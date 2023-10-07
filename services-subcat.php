<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: Услуги (подкатегория)
Template Post Type: page
*/

get_header();
?>

<!-- main -->
<main class="main">
    <div class="serv-page">
        <div class="container">
            <div class="serv-page__in">
                <h2 class="serv-page__head section__title dark">Аппаратная косметология </h2>
                <div class="subcat-body">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus ipsa odio, atque officia culpa repellat nobis expedita neque minus ab eius sint molestias quos voluptatibus impedit quia doloribus! Hic, id?
                    </p>
                    <p>
                        Dolor voluptatibus molestias consequuntur laborum aliquam dignissimos velit ullam porro impedit ea maxime temporibus delectus ipsam explicabo eum commodi ad aut hic asperiores, maiores ex. Iure dolor unde mollitia omnis.
                    </p>
                    <p>
                        Dolorum in unde temporibus iusto exercitationem illum ab quas deleniti excepturi culpa cumque perferendis labore, harum minima nam rem tenetur quae possimus beatae quis repellat? Reiciendis neque minus amet blanditiis.
                    </p>
                </div>
                <div class="subcat-list">
                    <?php get_template_part('templates/uslugi-subcat'); ?>
                </div>

            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>