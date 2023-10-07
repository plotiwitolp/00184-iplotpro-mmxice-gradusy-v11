<?php
// start отключение уведомления об обновлении плагина ACF PRO
function filter_plugin_updates($value)
{
    unset($value->response['advanced-custom-fields-pro/acf.php']);
    return $value;
}
add_filter('site_transient_update_plugins', 'filter_plugin_updates');
// end отключение уведомления об обновлении плагина ACF PRO

// start подключение стилей и скриптов
function add_styles_for_specific_template()
{
    if (is_page_template('specialist-item.php')) {
        wp_enqueue_style('specialist-item', get_template_directory_uri() . '/css/specialist-item.css');
    }
}
add_action('wp_enqueue_scripts', 'add_styles_for_specific_template');
// end подключение стилей и скриптов

add_theme_support('post-thumbnails');


// START ПОРИЗВОЛЬНЫЕ ТИПЫ ДАННЫХ ****************** УСЛУГИ 
function registration_post_type_services()
{
    register_post_type(
        'services',
        array(
            'labels' => array(
                'name' => __('Услуги'),
                'singular_name' => __('Услуга'),
                'add_new' => __('Добавить новую услугу'),
                'add_new_item'  => __('Добавить новую услугу'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-admin-page',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                // 'slug' => 'services/%servicecat%',
                'slug' => 'uslugi',
                'with_front' => false,
            ),
            // 'taxonomies' => array('apparaty_tag'),
            'has_archive' => true,
            'hierarchical' => true,
        )
    );

    register_post_type(
        'specialisty',
        array(
            'labels' => array(
                'name' => __('Специалисты'),
                'singular_name' => __('Специалист'),
                'add_new' => __('Добавить нового специалиста'),
                'add_new_item'  => __('Добавить нового специалиста'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-businessperson',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                'slug' => 'specialisty',
                'with_front' => false,
            ),
            'has_archive' => true,
            'hierarchical' => false,
        )
    );

    register_taxonomy(
        'servicecat',
        ['services'],
        array(
            'label' => __('Категории услуг'),
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'hierarchical' => true,
            'rewrite' => array(
                'slug' => 'usluga',
                'with_front' => true,
            ),
        )
    );

    register_taxonomy(
        'apparaty_tag',
        ['services'],
        array(
            'label' => __('Аппараты (метки)'),
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => false,
            'query_var' => true,
            'hierarchical' => false,
            'rewrite' => array(
                'slug' => 'apparaty-tag',
                'with_front' => true,
            ),
        )
    );
}
add_action('init', 'registration_post_type_services');


function true_taxonomy_filter()
{
    global $typenow; // тип поста
    if ($typenow == 'services') { // для каких типов постов отображать
        $taxes = array('servicecat'); // таксономии через запятую
        foreach ($taxes as $tax) {
            $current_tax = isset($_GET[$tax]) ? $_GET[$tax] : '';
            $tax_obj = get_taxonomy($tax);
            $tax_name = mb_strtolower($tax_obj->labels->name);
            // функция mb_strtolower переводит в нижний регистр
            // она может не работать на некоторых хостингах, если что, убирайте её отсюда
            $terms = get_terms($tax);
            if (count($terms) > 0) {
                echo "<select name='$tax' id='$tax' class='postform'>";
                echo "<option value=''>Все $tax_name</option>";
                foreach ($terms as $term) {
                    echo '<option value=' . $term->slug, $current_tax == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
                }
                echo "</select>";
            }
        }
    }
}

add_action('restrict_manage_posts', 'true_taxonomy_filter');

// start фильтры для иерархических URL
// function custom_post_type_services_permalink($post_link, $post)
// {
//     if (is_object($post) && $post->post_type == 'services') {
//         $terms = wp_get_object_terms($post->ID, 'servicecat');

//         if ($terms && !is_wp_error($terms) && !empty($terms)) {
//             $parent = $terms[0]->parent;
//             while ($parent) {
//                 $parent_term = get_term_by('id', $parent, 'servicecat');
//                 $post_link = str_replace("%servicecat%", $parent_term->slug . '/' . $terms[0]->slug, $post_link);
//                 $parent = $parent_term->parent;
//             }
//             return str_replace('%servicecat%', $terms[0]->slug, $post_link);
//         } else {
//             return str_replace('%servicecat%', 'uncategorized', $post_link);
//         }
//     }
//     return $post_link;
// }
// add_filter('post_type_link', 'custom_post_type_services_permalink', 10, 2);


// function custom_taxonomy_servicecat_permalink($termlink, $term, $taxonomy)
// {
//     if ($taxonomy == 'servicecat') {
//         $post_type = 'services'; 
//         $post = get_posts(array('post_type' => $post_type, 'numberposts' => 1, 'tax_query' => array(array('taxonomy' => $taxonomy, 'field' => 'id', 'terms' => $term->term_id))));

//         if ($post) {
//             $terms = get_the_terms($post[0]->ID, $taxonomy);
//             $parent = $terms[0]->parent;
//             while ($parent) {
//                 $parent_term = get_term_by('id', $parent, $taxonomy);
//                 $termlink = str_replace("%$taxonomy%", $parent_term->slug . '/' . $terms[0]->slug, $termlink);
//                 $parent = $parent_term->parent;
//             }
//             return str_replace("%$taxonomy%", $terms[0]->slug, $termlink);
//         } else {
//             return str_replace("%$taxonomy%", 'uncategorized', $termlink);
//         }
//     }
//     return $termlink;
// }
// add_filter('term_link', 'custom_taxonomy_servicecat_permalink', 10, 3);


// end фильтры для иерархических URL 
// END ПОРИЗВОЛЬНЫЕ ТИПЫ ДАННЫХ ****************** УСЛУГИ
