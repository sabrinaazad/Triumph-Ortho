<section class="section section--featured-locations full-width" style="background-color: <?php echo the_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">

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
        <div class="panels locations_slider">
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
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="image-wrapper" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></a>
                                        <a href="<?php the_permalink(); ?>"><h4 class="heading"><?php the_title(); ?></h4></a>
                                        <div class="wrap">
                                        <?php if($address) : ?>
                                        <div class="address-wrapper">
                                            <img src="<?php echo $addressIcon ?>" alt="address icon" class="desktop-only" /><div><?php echo $address ?></div>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <?php if($phone) : ?>
                                        <div class="phone-wrapper">
                                            <img src="<?php echo $phoneIcon ?>" alt="phone icon" class="desktop-only" /><a href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a>
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