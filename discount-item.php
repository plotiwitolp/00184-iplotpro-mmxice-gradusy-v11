<?php
if (!defined('ABSPATH')) {
    wp_die();
}

/*
Template Name: Акции (item)
Template Post Type: page
*/

get_header();
?>

<!-- main -->
<main class="main">
    <div class="news-item">
        <div class="container">
            <div class="news-item__in">
                <h2 class="news-item__head section__title dark">
                    Фракционное омоложение Morpheus -20%
                </h2>
                <div class="news-item__mob">
                    <div class="news-item__mob_name">
                        Дарим скидку -20% на пакет из 5-ти процедур на аппарате Morpheus 8
                    </div>
                    <div class="news-item__mob_date">до 25 октября</div>
                </div>

                <div class="news-item__body">
                    <div class="news-item__body_img">
                        <picture>
                            <source srcset="" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="news-item-img">
                        </picture>
                    </div>
                    <div class="news-item__body_content">
                        <h2 class="news-item__body_content_name">
                            Дарим скидку -20% на пакет из 5-ти процедур на аппарате Morpheus 8
                        </h2>
                        <div class="news-item__body_content_date">
                            до 25 октября
                        </div>
                        <div class="news-item__body_content_text">
                            <p>
                                Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего порядка, а также сложившаяся структура организации позволяет оценить значение систем массового участия.
                            </p>
                            <p>
                                Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего порядка, а также сложившаяся структура организации позволяет оценить значение систем массового участия.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="client">
            <div class="container">
                <div class="client__in">
                    <h2 class="client__head section__title">ДРУГИЕ АКЦИИ</h2>

                    <!-- <div class="promo"> -->
                    <!-- <div class="container"> -->
                    <div class="promo__in">
                        <!-- <h2 class="promo__head section__title dark">
                                Акции и спецпредложения
                            </h2> -->
                        <!-- templates/promo -->
                        <?php get_template_part('templates/promo'); ?>
                        <!-- /templates/promo -->
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->


                </div>
            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>