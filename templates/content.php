<div class="main__content">
    
    <section class="main__content__section">
        
        <!-- Flexible content -->
        <article>
        <?php get_template_part('templates/custom', 'fields'); ?>
        </article>

        <!-- post -->
        <article class="main__article article-post">
                
            <?php if (!is_front_page() ): ?>
            <header><h2><?php the_title(); ?></h2></header>
            <? endif; ?>
            
            <p><?php the_content(); ?></p>

            <footer><?php the_tags(); ?></footer>
            
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