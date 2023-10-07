<?php
if (!defined('ABSPATH')) {
    wp_die();
}
$current_object = get_queried_object();
$term_id = $current_object->term_id;
get_header();
?>

<!-- main -->
<main class="main">
    <div class="serv-page">
        <div class="container">
            <div class="serv-page__in">
                <h2 class="serv-page__head section__title dark"><?php single_cat_title(); ?></h2>
                <div class="subcat-body">
                    <?php echo get_field('opisanie', $current_object); ?>
                </div>
                <div class="subcat-list">

                    <div class="uslugi-subcat promo__body">
                        <?php
                        $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'servicecat',
                                    'field' => 'id',
                                    'terms' => $current_object->term_id,
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                        ?>
                                <a href="<?php the_permalink(); ?>" class="promo__body_item">
                                    <div class="promo__body_item_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="promo-img">
                                        </picture>
                                    </div>
                                    <div class="promo__body_item_descr">
                                        <div class="promo__body_item_descr_head"><?php the_title(); ?></div>
                                        <div class="promo__body_item_descr_link">
                                            <div class="arrow-link dark">
                                                <div class="arrow-link__text">Узнать больше</div>
                                                <div class="arrow-link__icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        <?php
                            }
                            wp_reset_postdata();
                        } else {
                            echo 'Услуг не найдено.';
                        }
                        ?>


                    </div>


                </div>

            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>