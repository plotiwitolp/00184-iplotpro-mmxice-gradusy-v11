<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: Новости
Template Post Type: page
*/
get_header();
?>

<!-- main -->
<main class="main">
    <div class="news-page">
        <div class="promo">
            <div class="container">
                <div class="promo__in">
                    <h2 class="promo__head section__title">
                        Новости
                    </h2>
                    <div class="promo__body">
                        <a href="<?php echo home_url('/novost'); ?>" class="promo__body_item">
                            <div class="promo__body_item_img">
                                <picture>
                                    <source srcset="" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="promo-img">
                                </picture>
                            </div>
                            <div class="promo__body_item_descr">
                                <div class="promo__body_item_descr_head">
                                    Пример заголовка. Рыба-текст заголовок.
                                </div>
                                <div class="promo__body_item_descr_data">
                                    27 сентября 2023
                                </div>
                                <div class="promo__body_item_descr_text">
                                    Не следует, однако забывать, что консультация с широким активом играет важную роль в формировании соответствующий условий активизации.
                                </div>
                                <div class="promo__body_item_descr_link">
                                    <div class="arrow-link">
                                        <div class="arrow-link__text">Узнать больше</div>
                                        <div class="arrow-link__icon"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo home_url('/novost'); ?>" class="promo__body_item">
                            <div class="promo__body_item_img">
                                <picture>
                                    <source srcset="" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="promo-img">
                                </picture>
                            </div>
                            <div class="promo__body_item_descr">
                                <div class="promo__body_item_descr_head">
                                    Пример заголовка. Рыба-текст заголовок.
                                </div>
                                <div class="promo__body_item_descr_data">
                                    27 сентября 2023
                                </div>
                                <div class="promo__body_item_descr_text">
                                    Не следует, однако забывать, что консультация с широким активом играет важную роль в формировании соответствующий условий активизации.
                                </div>
                                <div class="promo__body_item_descr_link">
                                    <div class="arrow-link">
                                        <div class="arrow-link__text">Узнать больше</div>
                                        <div class="arrow-link__icon"></div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- /main -->

<?php get_footer(); ?>