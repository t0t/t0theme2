<div class="main__content">
    
    <!-- Header -->
    <?php get_template_part('templates/page', 'header'); ?>
    

    <!-- Carousel -->
    <section class="jcarousel">

    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
        'post_type' => 'cpt',
        'post__not_in' => array($this_post),
        'category_name' => '') ); 
    ?>

        <ul>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                
                <li>
                <? if ( has_post_thumbnail() ) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                </a>
                <?}else {?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="t0theme" class="logo-img">
                <?}?>

                    <h3>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <? the_title(); ?>
                        </a>
                    </h3>
                </li>
                
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        </ul>

    </div>

    <!-- Prev/next controls -->
    <a href="#" class="jcarousel-control-prev btn btn--slider">
    <span class="icon-arrow-left"></span></a>
    <a href="#" class="jcarousel-control-next btn btn--slider">
    <span class="icon-arrow-right"></span></a>

    </section>


    
    <section class="main__content__section">
    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
        'post_type' => 'cpt',
        'post__not_in' => array($this_post),
        'category_name' => '') ); 
    ?>
            
        <!-- post -->
        <article class="article-post">

            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <ul>
            <li>
                <? if ( has_post_thumbnail() ) { ?>
                <figure class="article-post__figure">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                </a>
                <?}else {?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="t0theme" class="logo-img">
                <?}?>
                    <figcaption>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><? the_title(); ?></a>
                    </figcaption>
                </figure>
            </li>
            </ul>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            
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