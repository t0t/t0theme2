<?php if( get_field('flexible_content') ): ?>

     <?php while( has_sub_field("flexible_content") ): ?>





        <?php if(get_row_layout() == "video"): // Layout Videos ?>

            <?php if(get_sub_field('video_repeater')): ?>
            <?php while(has_sub_field('video_repeater')): ?>  

            <div class="row">

                    <?php //if (get_sub_field("video")): ?>
                    <?php the_sub_field("video"); ?>
                    <?php //endif ?>

                    <?php if (get_sub_field("descripcion")): ?>
                    <p><?php the_sub_field("descripcion"); ?></p>
                    <?php endif ?>

            </div>
            
            <?php endwhile; ?>
            <?php endif; ?> 





    <?php elseif(get_row_layout() == "sub_heading"): // Layout lista ?>
    
    <h3><?php the_sub_field('subheading'); ?> </h3>






      <?php elseif(get_row_layout() == "list"): // Layout lista ?>
                
<div class="row">

    <?php

    // check if the repeater field has rows of data
    if( have_rows('lista') ):

        // loop through the rows of data
        while ( have_rows('lista') ) : the_row();
            ?>
            <dl class="col__4">
                <dt><?php the_sub_field('titulo'); ?></dt>
                <?php while(has_sub_field('item_repeater')): ?>  
                         
                <dd><i class="icon-tick"></i> <?php the_sub_field('item'); ?></dd>
                                        
                <?php endwhile; ?>
                </dl>
            <?
        endwhile;

    else :

        // no rows found

    endif;

    ?>
                
</div>
     

 


    <?php elseif(get_row_layout() == "quote"): //Layout Quotes?>

    <blockquote cite="<?php the_sub_field("autor"); ?>">
    <?php the_sub_field("quote"); ?>
    </blockquote>





    <?php elseif(get_row_layout() == "gallery"): //Layout Gallery ?>

    <h3><?php the_sub_field("title"); ?></h3>
    <h4><?php the_sub_field("description"); ?></h4>
            
    <section class="galeria-fotos">
            
        <?php
        $images = get_sub_field('gallery');
             
        if( $images ): ?>
            
            <?php foreach( $images as $image ): ?>
                <figure class="galeria-fotos__figure">
                    <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img--circle" />
                    <figcaption class="galeria-fotos__caption"><?php echo $image['caption']; ?>xxx</figcaption></a>
                    </figure>
            <?php endforeach; ?>
            
        <?php endif; ?>
        
    </section>
        








        <?php endif; ?> 
 
    <?php endwhile; ?>

 <?php endif; ?>