<?php
$white = get_sub_field("white");
if($white) {
    $white = "white";
} else {
    $white = "";
}
?>
<section class="section section--featured-providers full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>); background-color: <?php echo the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field('id')?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <h4 class="subheading <?php echo $white ?>"><?php echo $subheading ?></h4>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading <?php echo $white ?>"><?php echo $heading ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb <?php echo $white ?>"><?php echo $blurb ?></div>
            <?php endif; ?> 

        </div>
        <div class="panels">
            <?php $providers = get_sub_field('providers');
            global $post;
            $backup = $post; 
            if ($providers) : ?>   
            <?php foreach ($providers as $post) :
                setup_postdata($post); ?>
                    <a class="panel" href="<?php the_permalink(); ?>">
                        <div class="background-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                            <div class="hover-wrapper">
                                <h4 class="heading"><?php the_title(); ?></h4>
                                <div class="btn btn-primary">READ BIO</div>
                            </div>
                        </div>
                    </a>  
                    <?php endforeach;
                wp_reset_postdata(); 
                $post = $backup; ?>
            <?php endif; ?>
        </div>
    </div>
</section>