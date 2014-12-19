<?php
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>

<main role="main">

	<?php get_template_part('templates/nav', 'main' ); ?>

    <!-- Page Header -->
	<?php get_template_part('templates/page', 'header'); ?>

    <?php get_template_part('templates/custom', 'fields'); ?>
    
</main>


<?php get_footer(); ?>