<?php
if (!defined('ABSPATH')) {
    wp_die();
}

?>
<!-- footer-main -->
<?php get_template_part('templates/footer-main'); ?>
<!-- /footer-main -->

<!-- main-menu -->
<div class="menu">
    <div class="container">
        <div class="menu__in">
            <ul class="menu__part">
                <li class="menu__part_item">
                    <a class="menu__part_item_link" href="<?php echo home_url('/uslugi'); ?>">Услуги</a>
                    <div class="menu__part_item_arrow active"></div>
                    <ul class="menu__part_submenu">
                        <div class="menu__part_submenu-inner">
                            <li class="menu__part_submenu_item">
                                <a href="<?php echo home_url('/uslugi-podkategoriya'); ?>">Аппаратная косметология</a>
                                <div class="menu__part_item_arrow menu__part_submenu_item_arrow"></div>
                                <ul class="menu__part_submenu">
                                    <div class="menu__part_submenu-inner">
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">INMODE с 3 насадками</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Фото омоложение Лазер Lumecca Inmode</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Фракционное омоложение Morpheus 8</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Безоперационная липосакция Body FX Inmode Smas Lifting Liftera</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Микротоки Bio-Ultimate Gold</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Аппарат по лицу - R-Sleek</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class="menu__part_submenu_item">
                                <a href="<?php echo home_url('/uslugi-podkategoriya'); ?>">Инъекционная косметология</a>
                                <div class="menu__part_item_arrow menu__part_submenu_item_arrow"></div>
                                <ul class="menu__part_submenu">
                                    <div class="menu__part_submenu-inner">
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Инъекции</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Все виды нитей (в том числе постоянные, хирургические)</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class="menu__part_submenu_item">
                                <a href="<?php echo home_url('/uslugi-podkategoriya'); ?>">Эстетическая косметология</a>
                                <div class="menu__part_item_arrow menu__part_submenu_item_arrow"></div>
                                <ul class="menu__part_submenu">
                                    <div class="menu__part_submenu-inner">
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">R-Sleek - массаж сферами</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">RF-лифтинг - омоложение</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Медицинский массаж</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Остеопатия</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Мануальная терапия</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Спортивный массаж</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class="menu__part_submenu_item">
                                <a href="<?php echo home_url('/uslugi-podkategoriya'); ?>">Кабинет по телу</a>
                                <div class="menu__part_item_arrow menu__part_submenu_item_arrow"></div>
                                <ul class="menu__part_submenu">
                                    <div class="menu__part_submenu-inner">
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">R-Sleek - массаж сферами</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">RF-лифтинг - омоложение</a>
                                        </li>
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Медицинский массаж</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class="menu__part_submenu_item"><a href="<?php echo home_url('/uslugi-podkategoriya'); ?>">Процедурный кабинет</a>
                                <div class="menu__part_item_arrow menu__part_submenu_item_arrow"></div>
                                <ul class="menu__part_submenu">
                                    <div class="menu__part_submenu-inner">
                                        <li class="menu__part_submenu_item">
                                            <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Терапевт + анализы крови</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li>

            </ul>
            <ul class="menu__part">
                <!-- <li class="menu__part_item">
                    <a href="<?php echo home_url('/apparaty'); ?>" class="menu__part_item_link">Аппараты</a>
                </li> -->
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/speczialisty'); ?>" class="menu__part_item_link">Специалисты</a>
                </li>
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/akczii'); ?>" class="menu__part_item_link">Акции</a>
                </li>
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/prajs'); ?>" class="menu__part_item_link">Цены</a>
                </li>
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/problemy-i-resheniya'); ?>" class="menu__part_item_link">Проблемы и решения</a>
                </li>
                <!-- <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Онлайн бутик</a>
                </li> -->
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/o-klinike'); ?>" class="menu__part_item_link">О клинике</a>
                </li>
                </li>
            </ul>
            <ul class="menu__part">
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/novosti'); ?>" class="menu__part_item_link">Новости</a>
                </li>
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/kontakty'); ?>" class="menu__part_item_link">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- footer-in-main-menu -->
    <?php get_template_part('templates/footer-in-main-menu'); ?>
    <!-- /footer-in-main-menu -->
</div>
<!-- /main-menu -->

<!-- popup-layer -->
<div class="popup-layer"></div>
<!-- /popup-layer -->

<!-- pop-up записаться -->
<div class="popup-inner">

    <div class="employee-page__feedback">
        <span class="popup-sign-up__close">x</span>
        <!-- <div class="employee-page__feedback-title">Записаться</div> -->
        <div class="employee-page__feedback-subtitle">Запишитесь на прием прямо сейчас!</div>
        <form action="" class="feedback-form">
            <div class="feedback-form__first">
                <div class="feedback-form__item">
                    <input type="text" placeholder="Имя">
                </div>
                <div class="feedback-form__item">
                    <input type="tel" placeholder="Телефон">
                </div>
            </div>
            <div class="feedback-form__second">
                <div class="feedback-form__item">
                    <textarea placeholder="Сообщение"></textarea>
                </div>
            </div>
            <div class="feedback-form__third">
                <div class="feedback-form__item">
                    <label for="form-pravicy" class="feedback-form__item-pravicy">
                        <input type="checkbox" id="form-pravicy">
                        <span class="feedback-form__item-pravicy-checkmark"></span>
                        Я даю согласие на обработку <a href="#">персональных данных</a>
                    </label>
                </div>
                <div class="feedback-form__item">
                    <div class="feedback-form__item-submit upper">Отправить</div>
                </div>
            </div>
            <div class="feedback-form__message">
                Спасибо, ваше сообщение успешно отправлено!
                <br> Данное окно автоматически закроется через <span class="popup_timer">5</span> сек.
            </div>
        </form>
    </div>

</div>
<!-- /pop-up записаться -->

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.0/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.0/purify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script> -->

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>

</html>