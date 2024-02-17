<?php
$white = get_sub_field("white");
if($white) {
    $white = "white";
} else {
    $white = "";
}
?>
<section class="section section--featured-providers full-width" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">>
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
            <?php
            global $post;
            $backup = $post; 
            $the_query = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'providers',
                'orderby' => 'title',
                'order' => 'ASC'
            ));
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a class="panel" href="<?php the_permalink(); ?>">
                        <div class="background-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                            <div class="hover-wrapper">
                                <h4 class="heading"><?php the_title(); ?></h4>
                                <div class="btn btn-primary">READ BIO</div>
                            </div>
                        </div>
                    </a>  
                <?php endwhile; ?>
                <?php $the_query->reset_postdata(); 
                $post = $backup; ?>
            <?php else : ?>
                <p><?php __('No Locations Available'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>