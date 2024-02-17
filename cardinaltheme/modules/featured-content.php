<section class="section section--featured-content full-width" style="background-color:<?php echo the_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">

        <div class="heading-wrapper">
            <div class="left">
                <?php $subheading = get_sub_field('subheading');
                if ($subheading) : ?>
                    <h4 class="subheading"><?php echo $subheading ?></h4>
                <?php endif;

                $heading = get_sub_field('heading');
                if ($heading) : ?>
                    <h2 class="heading"><?php echo $heading ?></h2>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php $blurb = get_sub_field('blurb');
                if ($blurb) : ?>
                    <div class="blurb"><?php echo $blurb ?></div>
                <?php endif; ?> 
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
            </div>

        </div>
        <div class="panels four_panels_slider">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                    <div class="panel">
                        <?php if (get_sub_field('image')) : ?><div class="image-wrapper" style="background-image: url(<?php the_sub_field('image'); ?>);"></div><?php endif; ?>
                        <div class="content-wrapper">
                            <?php if (get_sub_field('title')) : ?><h4 class="heading"><?php the_sub_field('title'); ?></h4><?php endif; ?>
                            <?php if (get_sub_field('blurb')) : ?><div class="blurb"><?php the_sub_field('blurb'); ?></div><?php endif; ?>
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
                        </div>
                    </div>
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>