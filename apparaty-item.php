<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: Аппараты (item)
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
                    Bio-Ultimate Gold
                </h2>
                <div class="news-item__mob">
                    <div class="news-item__mob_name">Bio-Ultimate Gold</div>
                    <div class="news-item__mob_date">
                        <!-- 24 — 25 августа -->
                    </div>
                </div>
                <div class="news-item__body">
                    <div class="news-item__body_img">
                        <picture>
                            <source srcset="" type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/apparaty/01.png" alt="apparaty-img">
                        </picture>
                    </div>
                    <div class="news-item__body_content">
                        <h2 class="news-item__body_content_name">
                            <!-- Duft & Doft −30% -->
                        </h2>
                        <div class="news-item__body_content_date">
                            <!-- 24 — 25 августа -->
                        </div>
                        <div class="news-item__body_content_subhead">
                            <!-- Маски для увлажнения, восстановления и укрепления кожи -->
                        </div>
                        <div class="news-item__body_content_text">
                            Bio-Ultimate Gold – полностью компьютеризированный двухканальный аппарат для микротоковой терапии. 17 программ, 54 подпрограммы; 11 уровней воздействия; 4 формы волны подаваемого импульса (пологая, умеренная, крутая, импульсная); Сила тока: 40-760 мкА; Диапазон частот: 0,1-300 Гц; Самостоятельное программирование; Увеличенные пределы регулировки; Двухканальная проба с частотной интерференцией; Комплектуется токопроводящими перчатками, пробами и биомаской; Автономное питание.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="client">
            <div class="container">
                <div class="client__in">
                    <h2 class="client__head section__title">Ещё аппараты</h2>

                    <!-- apparaty-slider -->
                    <?php get_template_part('templates/apparaty-slider'); ?>
                    <!-- /apparaty-slider -->


                </div>
            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>