<?php if( get_field('flexible_content') ): ?>

    <?php while( has_sub_field("flexible_content") ): ?>




    <?php if(get_row_layout() == "quote"): // Frases?>

    <blockquote cite="<?php the_sub_field("autor"); ?>">
    "<?php the_sub_field("quote"); ?>"<span> _<?php the_sub_field("autor"); ?></span>
    </blockquote>

    
    <?php elseif(get_row_layout() == "well-img"): //Wellcome panel ?>
    
    <div class="img--bg-big well well--img">
        <h1 class="altheader"><?php the_sub_field("title"); ?></h1>
        <p><?php the_sub_field("description"); ?></p>
        <button class="btn btn--image"><a href="<?php the_sub_field("call_to_action"); ?>">Work in progress</a></button>
    </div>


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
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img--rounded" />
                    <figcaption class="galeria-fotos__caption"><?php echo $image['caption']; ?>xxx</figcaption></a>
                    </figure>
            <?php endforeach; ?>
            
        <?php endif; ?>
        
    </section>


    
    <?php elseif(get_row_layout() == "list-group-ul"): // Grupo Listas Desordenadas ?>
                
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