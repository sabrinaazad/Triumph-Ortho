<section class="section section--hero full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">
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

        <?php
            $button1 = false;
            $button2 = false;
            if ( !empty(get_sub_field('button1')) ){
                $button1 = get_sub_field('button1');
                $link1_url = $button1['url'];
                $link1_title = $button1['title'];
                $link1_target = $button1['target'] ? $button1['target'] : '_self';
            }
            if ( !empty(get_sub_field('button2')) ){
                $button2 = get_sub_field('button2');
                $link2_url = $button2['url'];
                $link2_title = $button2['title'];
                $link2_target = $button2['target'] ? $button2['target'] : '_self';
            }
        ?>
        <div class="button-wrapper">
            <?php if ($button1) : ?>
                <a class="btn btn-secondary" href="<?php echo $link1_url ?>" target="<?php echo $link1_target ?>"><?php echo $link1_title ?></a>
            <?php endif; ?>
            <?php if ($button2) : ?>
                <a class="btn btn-secondary" href="<?php echo $link2_url ?>" target="<?php echo $link2_target ?>"><?php echo $link2_title ?></a>
            <?php endif; ?>
        </div>

    </div>
</section>