<section class="section section--hero-banner full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">
	<div class="section-wrapper">
        
        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <h4 class="subheading"><?php echo $subheading ?></h4>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h1 class="heading"><?php echo $heading ?></h1>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if ($blurb) : ?>
            <div class="blurb"><?php echo $blurb ?></div>
        <?php endif; ?>

    </div>
</section>