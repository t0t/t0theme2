





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
        <q>"<?php the_sub_field("quote"); ?>" </q><span><?php the_sub_field("autor"); ?></span>
    </blockquote>

    
    <?php elseif(get_row_layout() == "well-img"): //Wellcome panel ?>
    
    <div class="img--bg-big well well--img">
        
        <h1 class="altheader efecto--intro"><?php the_sub_field("title"); ?></h1>

        <p><?php the_sub_field("description"); ?></p>

        <button class="btn btn--image"><a href="<?php the_sub_field("call_to_action"); ?>">Work in progress</a></button>

    </div>   


    <?php elseif(get_row_layout() == "well-anim"): //Wellcome panel ?>
    
    <div class="well well--anim">


        <!-- <img src="<?php //echo get_bloginfo('template_directory');?>/assets/img/logo_anim.svg" alt="" class="anim-intro"> -->
        
        <svg class="anim-intro" viewBox="0 -14 151 151" preserveAspectRatio="xMidYMid meet">

            <title>Logo t0theme anim</title>
            <desc>Logotipo de tema Wordpress y Styleguide de Sergio Forés</desc>
    
            <path class="efecto--stroke-dashoffset" d="M33.8175546,9.19339982 C33.8175546,9.19339982 46.2905546,0.973399822 69.8175546,2.10739982 C93.3455546,3.24139982 133.880555,7.49339982 144.652555,31.5873998 C155.423555,55.6823998 142.152555,90.3353998 115.738555,107.2724 C89.3255546,124.2104 54.5105546,125.4144 31.2665546,117.4774 C8.02255465,109.5404 -2.46544535,85.8133998 3.77055465,62.1013998 C10.0065546,38.3903998 12.5575546,22.8003998 33.8175546,9.19339982 L33.8175546,9.19339982 Z M91.0105546,55.4653998 L104.750555,55.4653998 L104.750555,39.1743998 L91.0105546,39.1743998 L91.0105546,55.4653998 Z M68.9675546,84.0283998 C68.9675546,84.0283998 69.5345546,89.1313998 73.7865546,92.8163998 C78.0385546,96.5013998 75.3175546,102.7374 71.2915546,101.8864 C67.2665546,101.0364 65.5655546,97.8743998 66.4155546,93.2193998 C67.2665546,88.5643998 68.9675546,84.0283998 68.9675546,84.0283998 L68.9675546,84.0283998 Z M32.9675546,86.5793998 C32.9675546,86.5793998 29.2825546,72.4063998 37.7865546,65.8863998 C46.2905546,59.3673998 55.3605546,60.2173998 60.7465546,54.2643998 C66.1325546,48.3123998 68.6835546,39.5243998 68.6835546,39.5243998 M27.5155546,81.1273998 C27.5155546,81.1273998 23.8305546,66.9543998 32.3345546,60.4343998 C33.9377315,59.2054358 35.561024,58.2383654 37.1759571,57.4382363 C44.1273844,53.9941064 50.9239252,53.6431383 55.2945546,48.8123998 C60.6805546,42.8593998 63.2315546,34.0723998 63.2315546,34.0723998" />

        </svg>

        <h1 class="altheader efecto--intro"><?php the_sub_field("title"); ?></h1>

        <h2><?php the_sub_field("description"); ?></h2>

        <button href="<?php the_sub_field("call_to_action"); ?>" class="btn btn--well">Work in progress</button>

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

            <a href="<?php the_permalink(); ?>">
                <figure class="slider__figure">
                    <?php the_post_thumbnail('medium'); ?>
                    <figcaption class="slider__caption"><?php the_title(); ?></figcaption>
                </figure>
            </a>
                
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
