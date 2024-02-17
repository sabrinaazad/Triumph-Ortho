<section class="section section--linkable-panels full-width"  style="background-color: <?php echo the_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id'); ?>">
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
        <div class="panels linkable_slider">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
            <?php $link = get_sub_field('link');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="panel" href="<?php echo esc_url($link_url) ?>" target="<?php echo esc_attr($link_target) ?>">
                    <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                    <h4 class="title"><?php echo esc_html($link_title) ?></h4>
                    <div class="blurb"><?php the_sub_field('blurb'); ?></div>
                </a>
            <?php endif; ?>
            <?php endwhile; else : endif; ?>  
        </div>
    </div>
    <style>
        .section--linkable-panels .panels .slick-prev::before {
            content: url(<?php echo the_sub_field('left_arrow'); ?>);
        }
        .section--linkable-panels .panels .slick-next::before {
            content: url(<?php echo the_sub_field('right_arrow'); ?>);
        }     
    </style>
</section>