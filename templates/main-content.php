<div class="main__content">
    
    <section class="main__content__section">
        <?php
            if(is_home()) {
                query_posts();
            }
        ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <!-- post -->
            <article class="main__article">
                
                <header>
                    
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                </header>
                
                <div>
                    <?php if(is_home()): ?>
                        <?php the_excerpt(); ?>
                    <?php else: ?>
                        <?php the_content(); ?>
                    <?php endif; ?>
                </div>
                
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