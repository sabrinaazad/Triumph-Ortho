<footer class="footer full-width" id="footer">
    <section class="section section--footer">
        <div class="col-wrapper">
            <div class="col">
                <div class="menu-container">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-nav-1',
                        'container' => '',
                        'items_wrap' => '
                        <ul class="footer-nav-1">
                            %3$s
                        </ul>
                        ',
                        'menu_id' => 'footerNav1'
                    )); ?>
                </div>
            </div>
            <div class="col">
                <div class="logo-container">
                    <a href="/"><img src="<?php echo the_field('footer_logo', 'options'); ?>" alt="Logo" class="logo"></a>
                </div>
                <div class="details-container">
                    <p><?php echo the_field('footer_details_block', 'options'); ?></p>
                </div>
                <?php if (have_rows('footer_icons', 'options')) : ?>
                    <div class="icons-container">
                        <?php while (have_rows('footer_icons', 'options')) : the_row(); ?>
                        <?php 
                        $link = get_sub_field('link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="icon" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php 
                            $image = get_sub_field('icon');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            </a>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php else : endif; ?>
                <?php if (have_rows('footer_buttons', 'options')) : ?>
                    <div class="buttons-container">
                        <?php while (have_rows('footer_buttons', 'options')) : the_row(); ?>
                        <?php 
                        $button = get_sub_field('button');
                        if( $button ): 
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                            ?>
                                <a class="btn btn-primary" href="<?php echo $button_url ?>" target="<?php echo $button_target ?>"><?php echo $button_title ?></a>     
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php else : endif; ?>
            </div>
            <div class="col">
                <div class="menu-container">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-nav-2',
                        'container' => '',
                        'items_wrap' => '
                        <ul class="footer-nav-2">
                            %3$s
                        </ul>
                        ',
                        'menu_id' => 'footerNav2'
                    )); ?>
                </div>
            </div>
        </div>
        <div class="info-container">
            <p><?php echo the_field('footer_info_block', 'options'); ?>
                <br>Website Design, Development & SEO by <a target="_blank" href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
            </p>
        </div>
    </section>
</footer>