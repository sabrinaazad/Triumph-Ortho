<?php
    if (get_sub_field('alt')) {
        $alt = "alt";
    } else {
        $alt = "";
    }
?>
<section class="section section--testimonials full-width <?php echo $alt ?>" style="background-color: <?php echo the_sub_field("background_color") ?>;" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">

    <div class="heading-wrapper">  
        <?php $subheading = get_sub_field('subheading');
        if( $subheading ): ?>
            <h4 class="subheading"><?php echo $subheading ?></h4>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading"><?php echo $heading ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if ($blurb) : ?>
            <div class="blurb"><?php echo $blurb ?></div>
        <?php endif; ?>
    </div>

    <?php if (have_rows('slider')) : ?>
        <div class="panels testimonials_slider">
            <?php while (have_rows('slider')) : the_row(); ?>
            <div class="slide">
                <div class="panel">
                <?php if(get_sub_field('quote')) : ?><div class="quote"><?php the_sub_field('quote'); ?></div><?php endif; ?>
                    <div class="author">
                        <?php if(get_sub_field('avatar')) : ?><div class="image-wrapper desktop-only" style="background-image: url(<?php the_sub_field('avatar'); ?>);"></div><?php endif; ?>
                        <div class="name-wrapper">
                            <?php if(get_sub_field('name')) : ?><div class="name bold"><?php the_sub_field('name'); ?></div><?php endif; ?>
                            <?php if(get_sub_field('title')) : ?><div class="title uppercase"><?php the_sub_field('title'); ?></div><?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    <?php else : endif; ?>

    <?php $button = get_sub_field('button');
    if ($button) :
        $button_url = $button['url'];
        $button_title = $button['title'];
        $button_target = $button['target'] ? $button['target'] : '_self';
    ?>
    <div class="button-wrapper">
        <a class="btn btn-secondary" href="<?php echo esc_url($button_url) ?>" target="<?php echo esc_attr($button_target) ?>"><?php echo esc_html($button_title) ?></a>
    </div>
    <?php endif; ?>

    <style>
        .section--testimonials .panels .panel::before {
            background-image: url(<?php the_sub_field('left_quote'); ?>);
        }
        .section--testimonials .panels .panel::after {
            background-image: url(<?php the_sub_field('right_quote'); ?>);
        }
    </style>  
    </div>
</section>