<?php
/*
Template Name: Portada
*/
?>
<?php get_header(); ?>

<main>

 	<?php get_template_part('templates/nav', 'main' ); ?>

        <section role="main">

            <?php get_template_part('templates/content'); ?>

        </section>

</main>

<?php get_footer(); ?>