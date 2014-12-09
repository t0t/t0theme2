<div class="main__content">
    
    <section class="main__content__section">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <!-- post -->
            <article class="main__article article-post">
                
                <header>
                    
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            Este es el <?php the_title(); ?>
                        </a>
                    </h2>

                </header>

                <?php if(is_home()): ?>
                    <?php the_excerpt(); ?>
                <?php else: ?>

                    <figure class="article-post__figure">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?><figcaption>Caption</figcaption></a>
                    </figure>
                    
                    <p class="basefont">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis excepturi, sequi consequuntur. Magni, ipsa adipisci ea nam, repellendus illum, possimus minima nulla blanditiis eveniet facere porro dolor reiciendis officia autem.
                    </p>

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