<?php
if (!defined('ABSPATH')) {
    wp_die();
}

get_header();
?>

<!-- main -->
<main class="main">
    <div class="services-page">
        <div class="services-hero">
            <div class="container">
                <div class="services-hero__in">
                    <h2 class="services-hero__title section__title"><?php the_title(); ?></h2>

                    <!-- START БЛОК 1 "ГЛАВНОЕ ОПИСАНИЕ" -->
                    <?php if (get_field('vklyuchitvyklyuchit_blok_1')) { ?>
                        <div class="services-hero__text"><?php the_field('opisanie'); ?></div>
                    <?php } ?>
                    <!-- END БЛОК 1 -->

                    <!-- START БЛОК 2 "КАРТИНКА С ПАРАМЕТРАМИ"  -->
                    <?php if (get_field('vklyuchitvyklyuchit_blok_2')) { ?>
                        <div class="services_banner">
                            <div class="banner__left">
                                <?php $image = get_field('kartinka');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="banner__right">
                                <div class="banner__block">
                                    <div class="banner__text">
                                        <span><?php echo get_field('parametry_prodolzhitelnost_apparatnoj_kosmetologii_title') ?>:</span>
                                        <span class="--b"><?php echo get_field('parametry_prodolzhitelnost_apparatnoj_kosmetologii_text') ?></span>
                                    </div>
                                    <div class="banner__text">
                                        <span><?php echo get_field('parametry_kolichestvo_seansov_lejbl') ?>:</span>
                                        <span class="--b"><?php echo get_field('parametry_kolichestvo_seansov_znachenie') ?></span>
                                    </div>
                                    <div class="banner__text">
                                        <span><?php echo get_field('parametry_apparaty_lejbl') ?>:</span>
                                        <div class="apparaty-wrap">
                                            <?php
                                            $terms = get_field('parametry_apparaty_metki');
                                            if ($terms) {
                                                foreach ($terms as $term_id) {
                                                    $term = get_term_by('id', $term_id, 'apparaty_tag');
                                                    if ($term) {
                                            ?>
                                                        <span class="--b"><?php echo $term->name; ?></span>
                                            <?php }
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="price__row">
                                    <span class="--b"><?php echo get_field('stoimost_ot_lejbl') ?></span>
                                    <div class="main__price"><?php echo get_field('stoimost_ot_znachenie') ?> ₽</div>
                                </div>
                                <div class="banner__btns">
                                    <div class="fill__wr">
                                        <div class="fill__btn">
                                            <div class="fill__btn_icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wh.svg" alt="">
                                            </div>
                                            <div class="fill__btn_text upper zapisatsya_na_vizit">Записаться на визит</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- END БЛОК 2 -->

                </div>
            </div>
        </div>

        <!-- START БЛОК 3 "ПРЕИМУЩЕСТВА" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_3')) { ?>
            <div class="services-serv">
                <div class="container">
                    <div class="services-serv__in">
                        <div class="services-serv__head">
                            <h2 class="services-serv__head_title section__title"><?php the_field('zagolovok_nashi_preimushhestva'); ?></h2>
                            <div class="services-serv__head_text"></div>
                        </div>


                        <div class="swiper advantages__swiper">
                            <div class="advantages__swiper_wr swiper-wrapper">


                                <?php if (get_field('nashi_preimushhestva_zagolovok_preimushhestvo_1')) { ?>
                                    <div class="swiper-slide advantage">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('nashi_preimushhestva_kartinka_preimushhestvo_1'); ?>" alt="" class="advantage__img lozad">
                                        <div class="advantage__inner-text">
                                            <h5 class="advantage__title"><?php echo get_field('nashi_preimushhestva_zagolovok_preimushhestvo_1'); ?></h5>
                                            <p class="advantage__desc"><?php echo get_field('nashi_preimushhestva_opisanie_preimushhestvo_1'); ?></p>
                                        </div>
                                    </div>
                                <?php } ?>


                                <?php if (get_field('nashi_preimushhestva_zagolovok_preimushhestvo_2')) { ?>
                                    <div class="swiper-slide advantage">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('nashi_preimushhestva_kartinka_preimushhestvo_2'); ?>" alt="" class="advantage__img lozad">
                                        <div class="advantage__inner-text">
                                            <h5 class="advantage__title"><?php echo get_field('nashi_preimushhestva_zagolovok_preimushhestvo_2'); ?></h5>
                                            <p class="advantage__desc"><?php echo get_field('nashi_preimushhestva_opisanie_preimushhestvo_2'); ?></p>
                                        </div>
                                    </div>
                                <?php } ?>


                                <?php if (get_field('nashi_preimushhestva_zagolovok_preimushhestvo_3')) { ?>
                                    <div class="swiper-slide advantage">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('nashi_preimushhestva_kartinka_preimushhestvo_3'); ?>" alt="" class="advantage__img lozad">
                                        <div class="advantage__inner-text">
                                            <h5 class="advantage__title"><?php echo get_field('nashi_preimushhestva_zagolovok_preimushhestvo_3'); ?></h5>
                                            <p class="advantage__desc"><?php echo get_field('nashi_preimushhestva_opisanie_preimushhestvo_3'); ?></p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if (get_field('nashi_preimushhestva_zagolovok_preimushhestvo_4')) { ?>
                                    <div class="swiper-slide advantage">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('nashi_preimushhestva_kartinka_preimushhestvo_4'); ?>" alt="" class="advantage__img lozad">
                                        <div class="advantage__inner-text">
                                            <h5 class="advantage__title"><?php echo get_field('nashi_preimushhestva_zagolovok_preimushhestvo_4'); ?></h5>
                                            <p class="advantage__desc"><?php echo get_field('nashi_preimushhestva_opisanie_preimushhestvo_4'); ?></p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if (get_field('nashi_preimushhestva_zagolovok_preimushhestvo_5')) { ?>
                                    <div class="swiper-slide advantage">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('nashi_preimushhestva_kartinka_preimushhestvo_5'); ?>" alt="" class="advantage__img lozad">
                                        <div class="advantage__inner-text">
                                            <h5 class="advantage__title"><?php echo get_field('nashi_preimushhestva_zagolovok_preimushhestvo_5'); ?></h5>
                                            <p class="advantage__desc"><?php echo get_field('nashi_preimushhestva_opisanie_preimushhestvo_5'); ?></p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if (get_field('nashi_preimushhestva_zagolovok_preimushhestvo_6')) { ?>
                                    <div class="swiper-slide advantage">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('nashi_preimushhestva_kartinka_preimushhestvo_6'); ?>" alt="" class="advantage__img lozad">
                                        <div class="advantage__inner-text">
                                            <h5 class="advantage__title"><?php echo get_field('nashi_preimushhestva_zagolovok_preimushhestvo_6'); ?></h5>
                                            <p class="advantage__desc"><?php echo get_field('nashi_preimushhestva_opisanie_preimushhestvo_6'); ?></p>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>

                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- END БЛОК 3 -->


        <!-- START БЛОК 4 "БЕЗОПАСНОСТЬ" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_4')) { ?>
            <div class="services-sec">
                <div class="container">
                    <div class="services-sec__in">
                        <h2 class="services-sec__head section__title dark"><?php the_field('zagolovok_bezopasnost'); ?></h2>
                        <div class="services-sec__text"><?php the_field('opisanie_bezopasnost'); ?></div>
                        <div class="services-sec__list">

                            <?php if (get_field('bezopasnost_opisanie_bezopasnost_1')) { ?>
                                <div class="services-sec__item">
                                    <div class="services-sec__item_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('bezopasnost_ssylka_na_kartinku_bezopasnost_1'); ?>" alt="bezopasnost_1">
                                    </div>
                                    <div class="services-sec__item_text"><?php echo get_field('bezopasnost_opisanie_bezopasnost_1'); ?></div>
                                </div>
                            <?php } ?>

                            <?php if (get_field('bezopasnost_opisanie_bezopasnost_2')) { ?>
                                <div class="services-sec__item">
                                    <div class="services-sec__item_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('bezopasnost_ssylka_na_kartinku_bezopasnost_2'); ?>" alt="bezopasnost_2">
                                    </div>
                                    <div class="services-sec__item_text"><?php echo get_field('bezopasnost_opisanie_bezopasnost_2'); ?></div>
                                </div>
                            <?php } ?>

                            <?php if (get_field('bezopasnost_opisanie_bezopasnost_3')) { ?>
                                <div class="services-sec__item">
                                    <div class="services-sec__item_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('bezopasnost_ssylka_na_kartinku_bezopasnost_3'); ?>" alt="bezopasnost_3">
                                    </div>
                                    <div class="services-sec__item_text"><?php echo get_field('bezopasnost_opisanie_bezopasnost_3'); ?></div>
                                </div>
                            <?php } ?>

                            <?php if (get_field('bezopasnost_opisanie_bezopasnost_4')) { ?>
                                <div class="services-sec__item">
                                    <div class="services-sec__item_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_field('bezopasnost_ssylka_na_kartinku_bezopasnost_4'); ?>" alt="bezopasnost_4">
                                    </div>
                                    <div class="services-sec__item_text"><?php echo get_field('bezopasnost_opisanie_bezopasnost_4'); ?></div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- END БЛОК 4 -->


        <!-- START БЛОК 5 "ГАЛЕРЕЯ НАШИ РАБОТЫ" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_5')) { ?>
            <div class="services-pr">
                <div class="services-pr__in">
                    <div class="container">
                        <h2 class="services-pr__head section__title dark"><?php echo get_field('zagolovok_nashi_raboty'); ?></h2>

                        <div class="services-pr__body">

                            <?php if (have_rows('nashi_raboty_fotoalbom')) : ?>
                                <?php while (have_rows('nashi_raboty_fotoalbom')) : the_row(); ?>

                                    <?php $image = get_sub_field('foto_do_-_posle');
                                    if (!empty($image)) : ?>
                                        <div class="services-pr__body_item">
                                            <div class="flex before-after__text">
                                                <p class="color_10">До</p>
                                                <p class="color_10">После</p>
                                            </div>
                                            <picture>
                                                <source srcset="" type="image/webp">
                                                <a href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                    <div class="before-after__loupe align-center justify-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/eye.svg" alt="eye" class="d-block mr-8">
                                                        <p class="color_10 subtitle1">Увеличить</p>
                                                    </div>
                                                </a>
                                            </picture>
                                        </div>
                                    <?php endif; ?>

                            <?php endwhile;
                            endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- END БЛОК 5 -->

        <!-- START БЛОК 6 "КНОПКА ЗАПИСАТЬСЯ НА ВИЗИТ" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_6')) { ?>
            <div class="container">
                <div class="fill">
                    <div class="fill__wr">
                        <div class="fill__btn zapisatsya_na_vizit">
                            <div class="fill__btn_icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wh.svg" alt="wh">
                            </div>
                            <div class="fill__btn_text upper"><?php echo get_field('nazvanie_knopki_zapisatsya_na_vizit'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- END БЛОК 6  -->


        <!-- START БЛОК 7 "НА ТЕМНОМ ФОНЕ" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_7')) { ?>
            <div class="services-qt">
                <div class="container">
                    <div class="services-qt__in">
                        <div class="services-qt__body"><?php echo get_field('blok_s_tekstom_na_temnom_fone'); ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- END БЛОК 7-->


        <!-- START БЛОК 8 "ЦЕНЫ" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_8')) { ?>
            <div class="serives-price">
                <div class="container">
                    <div class="services-price__in">
                        <div class="services-price__head section__title dark"><?php echo get_field('nazvanie_zagolovka_czeny'); ?></div>

                        <div class="services-price__body accordion-container">
                            <div class="services-price__body_item ac">
                                <div class="services-price__body_item_head ac-header">
                                    <?php
                                    $post = get_queried_object();
                                    $terms = get_the_terms($post, 'servicecat');
                                    if ($terms && !is_wp_error($terms)) {
                                        $term = array_shift($terms);
                                    ?>
                                        <div class="ac-trigger"><?php echo $term->name ?></div>
                                    <?php } ?>
                                </div>
                                <div class="services-price__body_item_panel ac-panel">
                                    <div class="services-price__body_item_panel_content">
                                        <table class="table">
                                            <tr class="table__row table__row-head">
                                                <th class="table__item table__head"><?php echo get_field('tip_lejbl'); ?></th>
                                                <th class="table__item table__head"><?php echo get_field('czena_lejbl'); ?></th>
                                            </tr>
                                            <?php if (have_rows('czeny_prajs')) : ?>
                                                <?php while (have_rows('czeny_prajs')) : the_row(); ?>
                                                    <?php $nazvanie_uslugi = get_sub_field('nazvanie_uslugi'); ?>
                                                    <?php $czena_v = get_sub_field('czena_v'); ?>
                                                    <tr class="table__row">
                                                        <td class="table__item"><?php echo $nazvanie_uslugi; ?></td>
                                                        <td class="table__item"><?php echo $czena_v; ?> ₽</td>
                                                    </tr>
                                            <?php endwhile;
                                            endif; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="services-price__action">
                    <div class="services-price__action_wr">
                        <a href="#" download="#" class="services-price__action_btn">
                            <div class="services-price__action_btn_icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pdf-icon.svg" alt="df-icon">
                            </div>
                            <div class="services-price__action_btn_text upper"><?php echo get_field('nazvanie_knopki_skachat_prajs-list'); ?></div>
                        </a>
                    </div>

                </div>
            </div>
        <?php } ?>
        <!-- END БЛОК 8 -->


        <!-- START БЛОК 9 "СПЕЦИАЛИСТЫ" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_9')) { ?>
            <div class="services-team">
                <div class="container">
                    <div class="services-team__in">
                        <div class="services-team__head">
                            <h2 class="services-team__head_title section__title dark"><?php echo get_field('nazvanie_zagolovka_speczialisty'); ?></h2>
                            <div class="services-team__head_subhead">
                                <a href="<?php echo home_url('/speczialisty/'); ?>" class="arrow-link dark">
                                    <div class="arrow-link__text"><?php echo get_field('nazvanie_perehoda_vse_speczialisty'); ?></div>
                                    <div class="arrow-link__icon"></div>
                                </a>
                            </div>
                        </div>

                        <div class="services-team__body">
                            <div class="services-team__body_slider swiper">
                                <div class="services-team__body_slider_wr swiper-wrapper">
                                    <?php
                                    $speczialists = get_field('vybor_speczialistov');
                                    if ($speczialists) {
                                        foreach ($speczialists as $speczialist) {
                                            setup_postdata($speczialist);
                                    ?>
                                            <div class="spec-item swiper-slide">
                                                <a href="<?php echo home_url('/speczialist-item'); ?>" class="spec-item__img-wrap">
                                                    <div class="serv-page__body_item_img">
                                                        <picture>
                                                            <source srcset="" type="image/webp">
                                                            <img src="<?php echo get_template_directory_uri() ?>/img/doctorhause-2_11zon.webp" alt="serv-img">
                                                        </picture>
                                                    </div>
                                                </a>
                                                <div class="spec-text-wrap">
                                                    <div class="serv-page__body_item_spec-name"><?php echo $speczialist->post_title; ?></div>
                                                    <div class="serv-page__body_item_spec">Ведущий специалист, врач дерматолог-косметолог</div>
                                                    <div class="serv-page__body_item_staj"><span>Стаж: </span><span>15 лет</span></div>
                                                </div>
                                                <div class="spec-btn-wrap">
                                                    <div class="spec-btn-wrap__zapis upper">Записаться</div>
                                                    <a class="spec-btn-wrap__more upper" href="<?php echo home_url('/speczialist-item'); ?>">Подробнее</a>
                                                </div>
                                            </div>
                                    <?php
                                            wp_reset_postdata();
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- END БЛОК 9 -->


        <!-- START БЛОК 10 "УСЛУГИ" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_10')) { ?>
            <div class="serv2">
                <div class="container">
                    <div class="serv2__in">
                        <h2 class="serv2__head section__title dark">Услуги</h2>
                        <a href="<?php echo home_url('/uslugi'); ?>" class="about__body_content_link">
                            <div class="about__body_content_link_text">к услугам</div>
                            <div class="about__body_content_link_icon"></div>
                        </a>
                        <?php get_template_part('templates/uslugi'); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- END БЛОК 10 -->


        <!-- START БЛОК 11 "FAQ" -->
        <?php if (get_field('vklyuchitvyklyuchit_blok_11')) { ?>
            <div class="faq">
                <div class="container">
                    <div class="faq__in">
                        <div class="faq__img">
                            <img src="<?php echo get_field('faq_kartinka'); ?>" alt="FAQ">
                        </div>
                        <div class="faq__list-wrap">
                            <h2 class="faq__list-title"><?php echo get_field('faq_zagolovok'); ?></h2>
                            <div class="faq__list-inner">

                                <?php if (have_rows('faq_vopros-otvet')) : ?>
                                    <?php $i = 1; ?>
                                    <?php while (have_rows('faq_vopros-otvet')) : the_row(); ?>

                                        <div class="faq__list-item">
                                            <div class="faq__list-head">
                                                <div class="faq__list-counter"><?php echo $i; ?></div>
                                                <div class="faq__list-head-text"><?php echo get_sub_field('vopros'); ?></div>
                                                <div class="faq__list-arrow <?php echo $i == 1 ? 'active' : '';  ?>"></div>
                                            </div>
                                            <div class="faq__list-body"><?php echo get_sub_field('otvet'); ?></div>
                                        </div>
                                        <?php $i++; ?>
                                <?php endwhile;
                                endif; ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- END БЛОК 11 -->

    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>