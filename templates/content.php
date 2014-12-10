<div class="main__content">
    
    <section class="main__content__section">
        
        <!-- post -->
        <article class="main__article article-post">
                
            <header><h2><?php the_title(); ?></h2></header>

            <p><?php the_content(); ?></p>

            <footer><?php the_tags(); ?></footer>
            
        </article>

        <!-- Flexible content -->
        <article>
        <?php get_template_part('templates/custom', 'fields'); ?>
        </article>

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