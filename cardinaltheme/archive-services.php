<?php get_header();
/* Template Name: Services Archive */
?>
<?php $args = array(
    'p' => 335,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>

<?php if (have_rows('modules')) : while (have_rows('modules')) : the_row();
            // Case: hero-banner layout.
            if (get_row_layout() == 'hero_banner') :
                get_template_part('modules/hero-banner');
            endif;

            // Case: blurb layout.
            if (get_row_layout() == 'blurb') :
                get_template_part('modules/blurb');
            endif;

        endwhile;  else : endif;
    endwhile;
endif; ?>

<?php wp_reset_postdata(); ?>

<section class="section section--featured-services">
    <div class="section-wrapper">
        <div class="panels">
            <?php
                global $post;
                $backup = $post; 
                $the_query = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type' => 'services',
                    'orderby' => 'title',
                    'order' => 'ASC'
                )); 
                ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <a class="panel" href="<?php the_permalink(); ?>">
                            <div class="image-wrapper"><img src="<?php the_post_thumbnail_url(); ?>" alt="icon" /></div>
                            <h4 class="heading"><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                            <div class="btn btn-secondary">Learn More</div>
                        </a>
                    <?php endwhile; ?>
                    <?php $the_query->reset_postdata(); 
                    $post = $backup; ?>
                <?php else : ?>
                    <p><?php __('No Services Available'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>