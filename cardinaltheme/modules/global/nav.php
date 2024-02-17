<nav class="main-nav full-width sticky-margin" id="mainNav">
    <div class="sticky-wrapper sticky">
        <div class="topbar desktop-only">
            <div class="content">
                <div class="left">
                    <?php if( have_rows('topbar_icons', 'options') ): ?>
                        <div class="top-nav__icons">
                            <?php while( have_rows('topbar_icons', 'options') ) : the_row(); ?>
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
                    <?php else : endif;?>
                </div>
                <div class="right">
                    <div class="top-nav__drawer">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'top-nav',
                            'container' => '',
                            'items_wrap' => '
                                <ul class="top-nav">
                                    %3$s
                                </ul>'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">   
                <? if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }?>
            </div>

            <div class="main-nav__bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav">
                            %3$s
                        </ul></div>'
                ));
                ?>

            </div>
        </div>
    </div>
</nav>
