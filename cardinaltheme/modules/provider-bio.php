<section class="section section--provider-bio full-width no-padded-sides" id="<?php echo the_sub_field('id')?>">
    <?php while (have_posts()) : the_post(); ?> 
    <div class="section-wrapper">
        <div class="two-col">
        
                <div class="col">
                    <?php $image = get_sub_field('image');
                    if (($image)) : ?>
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
                    </div>
                    <?php else: ?>
                        <div class="image-wrapper"> 
                            <?php the_post_thumbnail(); ?>
                        </div>     
                    <?php endif; ?>
                </div>          
                <div class="col">
                    <div class="section-wrapper">

                        <h2 class="heading"><?php echo the_title(); ?><?php $creds = get_sub_field('creds');
                    if (($creds)) : ?>, <?php echo $creds ?><?php endif; ?></h2>

                        <?php $title = get_sub_field('title');
                        if( $title ): ?>
                            <h4 class="title"><?php echo $title ?></h4>
                        <?php endif; ?>

                        <div class="blurb"> <?php echo get_sub_field('bio'); ?></div>
                        
                    </div>   
            </div>         
        
        </div>
    </div>
    <?php endwhile; ?>
    <div class="specialty-wrapper">
        <div class="section-wrapper">
        <div class="content-wrapper">
            <div class="main-title">SPECIALTIES: </div>
            <div class="specialty">
                <?php $specialty = get_sub_field('specialties');
                global $post;
                $backup = $post; 
                if ($specialty) : ?>   
                <?php foreach ($specialty as $post) :
                    setup_postdata($post); ?>
                        <a class="panel" href="<?php the_permalink(); ?>">
                            <div class="background-image"><img src="<?php the_post_thumbnail_url(); ?>" alt="specialty icon" /></div>
                            <div class="content-wrapper">
                                <h4 class="title"><?php the_title(); ?></h4>
                                <div class="blurb"><?php the_excerpt(); ?></div>
                            </div>
                        </a>  
                        <?php endforeach;
                    wp_reset_postdata(); 
                    $post = $backup; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>