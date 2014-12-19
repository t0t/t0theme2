





<!-- Bloques -->
<?php if( have_rows('layout_content') ): ?>
    <?php while ( have_rows('layout_content') ) : the_row();?>

    <div class="grid-content">



    <?php if( get_row_layout() == 'contact_form' ):?>

    
        <?php
            if ( function_exists( 'wpcf7_enqueue_scripts' ) ) { wpcf7_enqueue_scripts(); }
            if ( function_exists( 'wpcf7_enqueue_styles' ) ) { wpcf7_enqueue_styles(); }
        ?>

        <div class="grid-content__item">
            <img src="<?php the_sub_field("image"); ?>" alt="">
        </div>
        <div class="grid-content__item">
            <?php echo do_shortcode('[contact-form-7 id="575" title="Contacto"]'); ?>
        </div>



        <?php elseif( get_row_layout() == '2_blocks' ):?>

                <!-- repeater -->
                <?php if( have_rows('block')): ?>
                <?php while (have_rows('block')) : the_row(); ?>
            
                <div class="grid-content__item">
                
                <?php the_sub_field("header"); ?>
                <?php the_sub_field("content"); ?>
                <img src="<?php the_sub_field('image'); ?>" alt="">
            
                </div>

                <?php endwhile;?>
                <?php endif ?>



        <?php elseif( get_row_layout() == '1_block' ):?>

                <div class="grid-content_wrap">

                <!-- repeater -->
                <?php if( have_rows('block')): ?>
                <?php while (have_rows('block')) : the_row(); ?>
            
                <div class="grid-content__item">
                
                <?php the_sub_field("header"); ?>
                <?php the_sub_field("content"); ?>
                <img src="<?php the_sub_field('image'); ?>" alt="">
            
                </div>

                <?php endwhile;?>
                <?php endif ?>
                </div>

            

        <?php endif;?>
    
    </div>
    <?php endwhile;?>

<?php else :?>
<?php endif;?>
    









<!-- Componentes -->
<?php if( get_field('flexible_content') ): ?>

    <?php while( has_sub_field("flexible_content") ): ?>




    <?php if(get_row_layout() == "quote"): // Frases?>

    <blockquote cite="<?php the_sub_field("autor"); ?>">
    "<?php the_sub_field("quote"); ?>"<span> _<?php the_sub_field("autor"); ?></span>
    </blockquote>

    
    <?php elseif(get_row_layout() == "well-img"): //Wellcome panel ?>
    
    <div class="img--bg-big well well--img">
        
        <h1 class="altheader efecto--intro"><?php the_sub_field("title"); ?></h1>

        <p><?php the_sub_field("description"); ?></p>

        <button class="btn btn--image"><a href="<?php the_sub_field("call_to_action"); ?>">Work in progress</a></button>

    </div>   



    <?php elseif(get_row_layout() == "gallery"): // Layout Gallery ?>

    <section>
    
        <div class="galeria-fotos">

            <?php if (get_sub_field("title")): ?>

                <h2 class="galeria-fotos__title">
                    <?php the_sub_field("title"); ?>
                </h2>
                <h3 class="galeria-fotos__description">
                    <?php the_sub_field("description"); ?>
                </h3>

            <?php endif ?>
            
            <?php
            $images = get_sub_field('gallery');
                 
            if( $images ): ?>
                
                <?php foreach( $images as $image ): ?>
                    <figure class="galeria-fotos__figure">
                        <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img--circle" />
                        <figcaption class="galeria-fotos__caption"><?php echo $image['caption']; ?></figcaption></a>
                        </figure>
                <?php endforeach; ?>
                
            <?php endif; ?>

        </div>
        
    </section>



    <?php elseif(get_row_layout() == "video"): // Layout Videos ?>

    <?php if(get_sub_field('video_repeater')): ?>
    <?php while(has_sub_field('video_repeater')): ?>  

    <section class="video-main">

        <h2 class="video-main__heading">Featured video</h2>
            <?php if (get_sub_field("video")): ?>
            <div class="video-main__iframe"><?php the_sub_field("video"); ?></div>
            <?php endif ?>

            <?php if (get_sub_field("descripcion")): ?>
            <h5 class="video-main__description"><?php the_sub_field("descripcion"); ?></h5>
            <?php endif ?>

    </section>
    
    <?php endwhile; ?>
    <?php endif; ?> 



    <?php elseif(get_row_layout() == "post-carrousel"): // Posts Carousel ?>
    <?php 
        $loop = new WP_Query( array( 
            'post_type' => 'cpt',
            'category_name' => '' 
            )); 
    ?>

<section class="slider">

  <h2><?php the_sub_field("title"); ?></h2>
  <?php //the_sub_field("description"); ?>

    <ul>

    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
      
        <li class="slider__item">
          
        <? if ( has_post_thumbnail() ) { ?>

            <figure class="slider__figure">
                <?php the_post_thumbnail(); ?>
                <figcaption class="slider__caption"><?php the_title(); ?></figcaption>
            </figure>
                
            <?}else {?>
            <p>oh! No hay foto...</p>
        
        <?}?>

        </li>
      
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
        
    </ul>
    
    <!-- Prev/next controls -->
    <button class="slider__item__prev btn btn--slider">&larr;</button>
    <button class="slider__item__next btn btn--slider">&rarr;</button>
  
</section>

    

    <?php elseif(get_row_layout() == "list-group-ul"): // Grupo Listas Desordenadas ?>
                
    <h2>Best Tools + Metodologies</h2>

    <section class="list-group">

    <?php
    // check if the repeater field has rows of data
    if( have_rows('lista') ):

        // loop through the rows of data
        while ( have_rows('lista') ) : the_row();
            ?>
            
                
            <ul class="list list--unordered">

            <li><?php the_sub_field('titulo'); ?></li>
            
            <?php while(has_sub_field('item_repeater')): ?>  
            <li class="list__item">
            <?php the_sub_field('item'); ?>
            </li>
                                        
            <?php endwhile; ?>
            </ul>

            <?
        endwhile;

    else :
    // no rows found
    endif;

    ?>
    </section>






    <?php elseif(get_row_layout() == "sub_heading"): // Layout lista ?>
    
    <h3><?php the_sub_field('subheading'); ?> </h3>






 







        <?php endif; ?> 
 
    <?php endwhile; ?>

 <?php endif; ?>
