<section class="section section--featured-panels full-width" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
    
        <div class="heading-wrapper">
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
        <?php
            if (get_sub_field('drop_shadow')) {
                $dropShadow = "drop-shadow";
            } else {
                $dropShadow = "";
            }
        ?>
        <div class="panels <?php echo $dropShadow ?>">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                <div class="panel">
                    <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                    <h4 class="title"><?php the_sub_field('title'); ?></h4>
                    <div class="blurb"><?php the_sub_field('blurb'); ?></div>
                </div>
            <?php endwhile; else : endif; ?>  
        </div>
    </div>
</section>