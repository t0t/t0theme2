<?php
/*
Template Name: Contacto
*/
?>

<?php get_header(); ?>

<?php get_template_part('templates/layout', 'page' ); ?>



<!-- Cargame los scrips de wpcf7 solo en esta pagina -->
<!-- http://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/ -->
<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php echo do_shortcode('[contact-form-7 id="46" title="Formulario de contacto 1"]'); ?>

<!-- http://wphostreviews.com/mappress-documentation -->
<?php echo do_shortcode('[mappress mapid="1" width="100%"]'); ?>





<?php get_footer(); ?>