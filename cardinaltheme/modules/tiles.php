<section class="section section--tiles" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <?php if (have_rows('tiles')) : ?>
            <div class="tiles">
                <?php while (have_rows('tiles')) : the_row(); ?>
                <?php $link = get_sub_field('link');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a class="tile" href="<?php echo esc_url($link_url) ?>" target="<?php echo esc_attr($link_target) ?>">
                            <?php $image = get_sub_field('icon');
                            if( ( $image ) ): ?>
                                <div class="image-wrapper">
                                    <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
                                </div>
                            <?php endif; ?> 
                            <?php $title = get_sub_field('title');
                            if( ( $title ) ): ?>
                                <h4 class="title"><?php echo $title ?></h4>
                            <?php endif; ?> 
                        </a>
                    <?php else : ?>
                        <div class="tile">
                            <?php $image = get_sub_field('icon');
                            if( ( $image ) ): ?>
                                <div class="image-wrapper">
                                    <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
                                </div>
                            <?php endif; ?> 
                            <?php $title = get_sub_field('title');
                            if( ( $title ) ): ?>
                                <h4 class="title"><?php echo $title ?></h4>
                            <?php endif; ?> 
                        </div>
                    <?php endif; ?>
                    
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>