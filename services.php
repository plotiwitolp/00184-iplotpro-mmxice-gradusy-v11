<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: Услуги 
Template Post Type: page
*/

get_header();
?>

<!-- main -->
<main class="main">
    <div class="serv-page">
        <div class="container">
            <div class="serv-page__in">
                <h2 class="serv-page__head section__title dark">Услуги</h2>

                <?php get_template_part('templates/uslugi'); ?>

            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>