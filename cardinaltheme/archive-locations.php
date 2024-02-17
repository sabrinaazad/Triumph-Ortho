<?php get_header();
/* Template Name: Locations Archive */
?>
<?php $args = array(
    'p' => 342,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>

    <?php if (have_rows('modules')) : while (have_rows('modules')) : the_row();
        // Case: hero-banner layout.
        if (get_row_layout() == 'hero_banner') :
            get_template_part('modules/hero-banner');
        endif;
        
    endwhile; else : endif;
endwhile; endif; ?>

<?php wp_reset_postdata(); ?>

<?php $args = array(
    'p' => 342,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>
    <section class="section section--location-info">
        <div class="section-wrapper">
            <div class="two-col">
                <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                        <div class="col">

                            <?php $map = get_sub_field('map');
                            if (($map)) : ?>
                                <div class="video-wrapper">
                                    <?php echo $map ?>
                                </div>
                            <?php endif; ?>

                        </div>
                <?php endwhile; else : endif; ?>

                <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                        <div class="col">
                            <div class="locations-list">
                                <?php $subheading = get_sub_field('subheading');
                                if ($subheading) : ?>
                                    <h4 class="subheading"><?php echo $subheading ?></h4>
                                <?php endif;

                                $heading = get_sub_field('heading');
                                if ($heading) : ?>
                                    <h2 class="heading"><?php echo $heading ?></h2>
                                <?php endif; ?>
                        
                                <?php $blurb = get_sub_field('blurb');
                                if ($blurb) : ?>
                                    <div class="blurb"><?php echo $blurb ?></div>
                                <?php endif; ?> 
                                <?php
                                global $post;
                                $backup = $post; 
                                $the_query = new WP_Query(array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'locations',
                                    'orderby' => 'title',
                                    'order' => 'ASC'
                                )); 
                                ?>
                                <?php if ($the_query->have_posts()) : ?>
                                    <div class="location-wrapper">
                                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?> 
                                            <a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <?php endwhile; ?>
                                        <?php $the_query->reset_postdata(); 
                                        $post = $backup; ?>
                                    </div>
                                <?php else : ?>
                                    <p><?php __('No Locations Available'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>

<section class="section section--locations">
    <div class="section-wrapper">
        <div class="panels four_panels_slider">
            <?php
            global $post;
            $backup = $post; 
            $the_query = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'locations',
                'orderby' => 'title',
                'order' => 'ASC'
            ));
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>        
                        
                        <?php if (have_rows('modules')) :
                      
                            while (have_rows('modules')) : the_row(); ?>
                                    
                                <?php if (have_rows('right_side')) :
                            
                                    while (have_rows('right_side')) : the_row(); ?>
                                    
                                    <div class="panel">
                                        <?php
                                            $address = get_sub_field('address');
                                            $addressIcon = get_sub_field('address_icon');
                                            $phone = get_sub_field('phone');
                                            $phoneIcon = get_sub_field('phone_icon');
                                            $hours = get_sub_field('hours');
                                            $hoursIcon = get_sub_field('hours_icon');
                                        ?>
                                        
                                        <h4 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        
                                        <div class="wrapper">
                                            <?php if($address) : ?>
                                                <div class="address-wrapper">
                                                    <img src="<?php echo $addressIcon ?>" alt="address icon" /><div class="title">Address</div><div><?php echo $address ?></div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($phone) : ?>
                                                <div class="phone-wrapper">
                                                    <img src="<?php echo $phoneIcon ?>" alt="phone icon" /><div class="title">Phone</div><a href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a>
                                                </div>  
                                            <?php endif; ?>
                                        </div>
                                        
                                        <?php if($hours) : ?>
                                        <div class="hours-wrapper">
                                            <img src="<?php echo $hoursIcon ?>" alt="hours icon" /><div class="title">Hours</div><?php echo $hours ?>
                                        </div>    
                                        <?php endif; ?>

                                        <?php
                                        $button1 = false;
                                        $button2 = false;
                                        if (!empty(get_sub_field('button1'))) {
                                            $button1 = get_sub_field('button1');
                                            $link1_url = $button1['url'];
                                            $link1_title = $button1['title'];
                                            $link1_target = $button1['target'] ? $button1['target'] : '_self';
                                        }
                                        if (!empty(get_sub_field('button2'))) {
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
                                <? endwhile; else : endif; ?>
                        
                        <? endwhile; else : endif; ?>
                        
                <?php endwhile; ?>
                <?php $the_query->reset_postdata(); 
                $post = $backup; ?>
            <?php else : ?>
                <p><?php __('No Locations Available'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>