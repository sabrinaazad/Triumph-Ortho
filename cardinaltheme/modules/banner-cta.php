<section class="section section--banner-cta full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">
    <div class="section-wrapper">
        <div class="two-col">
            <div class="col">
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

                <?php $button = get_sub_field('button');
                    if( $button ): 
                    $button_url = $button['url'];
                    $button_title = $button['title'];
                    $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                <div class="button-wrapper">       
                    <a class="btn btn-secondary" href="<?php echo $button_url ?>" target="<?php echo $button_target ?>"><?php echo $button_title ?></a>     
                </div>  
                <?php endif; ?>
            </div>
            <div class="col">
            <?php $image = get_sub_field('featured_image');
            if (($image)) : ?>
                <div class="image-wrapper">
                    <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>