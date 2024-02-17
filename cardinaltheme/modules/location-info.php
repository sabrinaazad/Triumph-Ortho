<section class="section section--location-info" id="<?php echo the_sub_field('id') ?>">
    <div class="section-wrapper">
        <div class="two-col">
            <?php if (have_rows('left_side')) : while (have_rows('left_side')) : the_row(); ?>
                    <div class="col">
                        
                            <?php $map = get_sub_field('map');
                            if (($map)) : ?>
                                <div class="video-wrapper">
                                    <?php echo $map ?>
                                </div>
                            <?php endif; ?>

                    </div>
            <?php endwhile; else : endif; ?>

            <?php if (have_rows('right_side')) : while (have_rows('right_side')) : the_row(); ?>
                    <div class="col">
                        <div class="content-wrapper">
                            
                            <?php $heading = get_sub_field('heading');
                            if ($heading) : ?>
                                <h2 class="heading"><?php echo $heading ?></h2>
                            <?php endif; ?>

                            <?php $address = get_sub_field('address');
                            $addressLabel = get_sub_field('address_label');
                            $addressIcon = get_sub_field('address_icon');
                            if ($address) : ?>
                                <div class="address">
                                    <div class="subheading"><img src="<?php echo $addressIcon ?>" alt="address icon" /> <?php echo $addressLabel ?></div>
                                    <?php echo $address ?>
                                </div>
                            <?php endif; ?>

                            <?php $phone = get_sub_field('phone');
                            $phoneLabel = get_sub_field('phone_label');
                            $phoneIcon = get_sub_field('phone_icon');
                            if ($phone) : ?>
                                <div class="phone">
                                    <div class="subheading"><img src="<?php echo $phoneIcon ?>" alt="phone icon" /> <?php echo $phoneLabel ?></div>
                                    <a href="tel:<?php echo $phone; ?>"><?php echo $phone ?></a>
                                </div>
                            <?php endif; ?>

                            <?php $hours = get_sub_field('hours');
                            $hoursLabel = get_sub_field('hours_label');
                            $hoursIcon = get_sub_field('hours_icon');
                            if ($hours) : ?>
                                <div class="hours">
                                    <div class="subheading"><img src="<?php echo $hoursIcon ?>" alt="hours icon" /> <?php echo $hoursLabel ?></div>
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
                                    <a class="btn btn-secondary hide" href="<?php echo $link2_url ?>" target="<?php echo $link2_target ?>"><?php echo $link2_title ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>