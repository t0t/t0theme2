<?php
/*
Template Name: CPT
*/
?>
<?php get_header(); ?>

<main role="main">

	<!-- Nav -->
 	<?php get_template_part('templates/nav', 'main' ); ?>

	<!-- Header -->
    <?php get_template_part('templates/page', 'header'); ?>

    <!-- Content -->
    <?php get_template_part('templates/content', 'cpt'); ?>

</main>

<?php get_footer(); ?>