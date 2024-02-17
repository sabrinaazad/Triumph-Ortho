<section class="section section--providers-locations" id="<?php echo the_sub_field('id')?>">
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
        <div class="two-col">
            <div class="col">

                <?php $image = get_sub_field('image');
                if (($image)) : ?>
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
                    </div>
                <?php endif; ?>

            </div>
            <div class="col">
                <div class="panels">
                    <?php $locations = get_sub_field('locations');
                    global $post;
                    $backup = $post;
                    if ($locations) : ?>
                        <?php foreach ($locations as $post) :
                            setup_postdata($post); ?>

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
                                                <div class="details-wrapper">
                                                    <div class="wrapper">
                                                        <?php if ($address) : ?>
                                                            <div class="address-wrapper">
                                                                <div class="title-wrapper">
                                                                    <img src="<?php echo $addressIcon ?>" alt="address icon" />
                                                                    <div class="title">Address</div>
                                                                </div>
                                                                <div><?php echo $address ?></div>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if ($phone) : ?>
                                                            <div class="phone-wrapper">
                                                                <div class="title-wrapper">
                                                                    <img src="<?php echo $phoneIcon ?>" alt="phone icon" />
                                                                    <div class="title">Phone</div>
                                                                </div>
                                                                <a href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>

                                                    <?php if ($hours) : ?>
                                                        <div class="hours-wrapper">
                                                            <div class="title-wrapper">
                                                                <img src="<?php echo $hoursIcon ?>" alt="hours icon" />
                                                                <div class="title">Hours</div>
                                                            </div>
                                                            <?php echo $hours ?>
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
                                    <? endwhile;
                                    else : endif; ?>

                            <? endwhile;
                            else : endif; ?>

                        <?php endforeach;
                        wp_reset_postdata();
                        $post = $backup; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>