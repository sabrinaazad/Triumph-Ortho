<section class="section section--two-column-list full-width" style="background-color:<?php the_sub_field('background_color_outer'); ?>;" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper" style="background-color:<?php the_sub_field('background_color_inner'); ?>;">
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
       
            <?php if (have_rows('list')) : $count=0; ?>
                <ul class="list list_slider">
                    <?php while (have_rows('list')) : the_row(); ?>
                        <li class="list-item">
                            <div class="icon-wrapper">
                                <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                            </div>
                            <div class="text-wrapper">
                            <div class="title"><?php the_sub_field('title'); ?></div>
                            <div class="blurb"><?php the_sub_field('blurb'); ?></div>
                            </div>
                        
                    <?php $count++; endwhile; ?>
                </li>  
            <?php else : endif; ?>
        </ul>
    </div>
</section>