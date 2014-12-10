<?php
/*
Template Name: Portada
*/
?>
<?php get_header(); ?>

<main>

 	<?php get_template_part('templates/nav', 'main' ); ?>

        <section role="main">

			<?php //get_template_part( 'layout/content', 'slide' ); ?>

            <?php //get_template_part('templates/main', 'options' ); ?>
            <?php //get_template_part('templates/main', 'tabs' ); ?>
            <?php get_template_part('templates/content'); ?>

        </section>

</main>

<?php get_footer(); ?>