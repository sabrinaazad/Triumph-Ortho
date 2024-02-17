<section class="section section--featured-services" style="background-color: <?php echo the_sub_field('background_color'); ?>; background-color: <?php echo the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <h4 class="subheading"><?php echo $subheading ?></h4>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb"><?php echo $blurb ?></div>
            <?php endif; ?>    

        </div>
        <div class="panels service_slider">
          
            <?php $services = get_sub_field('services');
            global $post;
            $backup = $post; 
            if ($services) : ?>   
            <?php foreach ($services as $post) :
                setup_postdata($post); ?>
                    <a class="panel" href="<?php the_permalink(); ?>">
                        <div class="image-wrapper"><img src="<?php the_post_thumbnail_url(); ?>" alt="icon" /></div>
                        <h4 class="heading"><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                        <div class="btn btn-secondary">Learn More</div>
                    </a>
                    <?php endforeach;
                wp_reset_postdata();
                $post = $backup; ?>
            <?php endif; ?>
    
        </div>
    </div>
    <style>
        .section--featured-services .panels .slick-prev::before {
            content: url(<?php echo the_sub_field('left_arrow'); ?>);
        }
        .section--featured-services .panels .slick-next::before {
            content: url(<?php echo the_sub_field('right_arrow'); ?>);
        }     
    </style>
</section>