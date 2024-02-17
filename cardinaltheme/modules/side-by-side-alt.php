<?php
$reverse = get_sub_field("reverse");
if($reverse) {
    $reverse = "reverse";
} else {
    $reverse = "";
}
?>
<section class="section section--side-by-side-alt <?php echo $reverse ?>" id="<?php echo the_sub_field('id')?>">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">

                <?php $image = get_sub_field('image');
                if( ($image) ): ?>
                   <div class="image-wrapper"> 
                       <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
                   </div>
                <?php endif; ?>
                
            </div>          
        <?php endwhile;
        else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
            <div class="col">
                <div class="section-wrapper">

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
        <?php endwhile;
        else :  endif; ?>
        
    </div>
</section>