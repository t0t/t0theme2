<div class="main__content">
    
    <section class="main__content__section">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <!-- post -->
            <article class="">
                
                <!-- Header -->
                <?php get_template_part('templates/page', 'header'); ?>

                <?php if(is_home()): ?>
                    <?php the_excerpt(); ?>
                <?php else: ?>

                <figure class="article-post__figure">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('thumbnail'); ?><figcaption>Caption</figcaption></a>
                </figure>
                    

                <?php get_template_part('templates/layout', 'page' ); ?>


                <p><?php the_content(); ?></p>
                
                <?php endif; ?>
                
                <footer>
                    <?php the_tags(); ?>
                </footer>
            
            </article>

        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <h3>No hemos encontrado entradas.</h3>
        <?php endif; ?>


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

<?php echo do_shortcode('[contact-form-7 id="46" title="Formulario de contacto 1"]'); ?>

<!-- http://wphostreviews.com/mappress-documentation -->
<?php echo do_shortcode('[mappress mapid="1" width="100%"]'); ?>



    </section>

        <?php
            if ( is_home() ) :
            get_sidebar();
            elseif ( is_404() ) :
            get_sidebar( '404' );
            else :
            get_sidebar( 'userpicture' );
            endif;
        ?>

</div>