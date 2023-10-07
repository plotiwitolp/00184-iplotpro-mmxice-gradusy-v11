<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: О клинике
Template Post Type: page
*/
get_header();
?>

<!-- main -->
<main class="main">
    <div class="about-page">
        <div class="container">
            <div class="about-page__in">
                <h1 class="about-page__big">О клинике</h1>
                <h3 class="about__body_content_head"> Красота – это право, а не привилегия</h3>
                <div class="about-page__body">
                    <div class="about-page__body_text">
                        <p>
                            Gradusy-clinic - c другой стороны, новая модель организационной деятельности играет важную роль в формировании глубокомысленных рассуждений. Значимость этих проблем настолько очевидна, что разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает актуальность своевременного выполнения сверхзадачи. Прежде всего, базовый вектор развития требует от нас анализа прогресса профессионального сообщества. Банальные, но неопровержимые выводы, а также базовые сценарии поведения пользователей являются только методом политического участия и превращены в посмешище, хотя само их существование приносит несомненную пользу обществу.
                        </p>
                        <p>
                            Повседневная практика показывает, что высокое качество позиционных исследований требует анализа поставленных обществом задач. Также как постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки системы массового участия. Следует отметить, что граница обучения кадров, в своём классическом представлении, допускает внедрение позиций, занимаемых участниками в отношении поставленных задач.
                        </p>
                        <p>
                            В целом, конечно, внедрение современных методик позволяет выполнить важные задания по разработке поэтапного и последовательного развития общества.
                        </p>
                    </div>
                    <div class="about-page__body_list">
                        <div class="about-page__body_item">
                            <div class="about-page__body_item_val">15+</div>
                            <div class="about-page__body_item_name">
                                Лет в бизнесе
                            </div>
                        </div>
                        <div class="about-page__body_item">
                            <div class="about-page__body_item_val">500м2 </div>
                            <div class="about-page__body_item_name">
                                Площадь пространства
                            </div>
                        </div>
                        <div class="about-page__body_item">
                            <div class="about-page__body_item_val">80</div>
                            <div class="about-page__body_item_name">
                                человек в команде клинике
                            </div>
                        </div>
                        <div class="about-page__body_item">
                            <div class="about-page__body_item_val">20</div>
                            <div class="about-page__body_item_name">
                                Изолированных кабинетов
                            </div>
                        </div>
                    </div>
                </div>


                <div class="services-team">
                    <!-- <div class="container"> -->
                    <div class="services-team__in">
                        <div class="services-team__head">
                            <h2 class="services-team__head_title section__title dark">Специалисты</h2>
                            <div class="services-team__head_subhead">
                                <a href="#" class="arrow-link dark">
                                    <div class="arrow-link__text">все специалисты</div>
                                    <div class="arrow-link__icon"></div>
                                </a>
                            </div>
                        </div>
                        <!-- templates/specialist-slider.php -->
                        <?php get_template_part('templates/specialist-slider'); ?>
                        <!-- /templates/specialist-slider.php -->
                    </div>
                    <!-- </div> -->
                </div>


                <div class="about-page__atm">
                    <h2 class="about-page__atm_head section__title dark">
                        Атмосфера
                    </h2>
                    <div class="about-page__atm_body">
                        <div class="about-page__atm_slider swiper">
                            <div class="about-page__atm_slider_wr swiper-wrapper">
                                <a href='./img/atm.png' data-fancybox="gallery" class="about-page__atm_slider_sl swiper-slide">
                                    <picture>
                                        <source srcset="" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="atm-image">
                                    </picture>
                                </a>
                                <a href='./img/atm.png' data-fancybox="gallery" class="about-page__atm_slider_sl swiper-slide">
                                    <picture>
                                        <source srcset="" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="atm-image">
                                    </picture>
                                </a>
                                <a href='./img/atm.png' data-fancybox="gallery" class="about-page__atm_slider_sl swiper-slide">
                                    <picture>
                                        <source srcset="" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="atm-image">
                                    </picture>
                                </a>
                                <a href='./img/atm.png' data-fancybox="gallery" class="about-page__atm_slider_sl swiper-slide">
                                    <picture>
                                        <source srcset="" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="atm-image">
                                    </picture>
                                </a>
                                <a href='./img/atm.png' data-fancybox="gallery" class="about-page__atm_slider_sl swiper-slide">
                                    <picture>
                                        <source srcset="" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="atm-image">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- <div class="client">
                    <div class="client__in">
                        <h2 class="client__head section__title">Аппараты</h2>
                        <?php // get_template_part('templates/apparaty-slider'); 
                        ?>
                    </div>
                </div> -->


            </div>
        </div>
    </div>

    <!-- uslugi -->
    <div class="serv2">
        <div class="container">
            <div class="serv2__in">
                <h2 class="serv2__head section__title dark">
                    Услуги
                </h2>
                <a href="<?php echo home_url('/uslugi'); ?>" class="about__body_content_link">
                    <div class="about__body_content_link_text">к услугам</div>
                    <div class="about__body_content_link_icon"></div>
                </a>

                <?php get_template_part('templates/uslugi'); ?>

            </div>
        </div>
    </div>
    <!-- /uslugi -->

    <div class="promo">
        <div class="container">
            <div class="promo__in">
                <h2 class="promo__head section__title dark">
                    Акции и спецпредложения
                </h2>
                <!-- templates/promo -->
                <?php get_template_part('templates/promo'); ?>
                <!-- /templates/promo -->
            </div>
        </div>
    </div>

</main>
<!-- /main -->



<?php get_footer(); ?>