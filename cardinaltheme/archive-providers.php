<?php get_header();
/* Template Name: Providers Archive */
?>
<?php $args = array(
    'p' => 339,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); 

// Check value exists.
if (have_rows('modules')) :
    // Loop through rows.
    while (have_rows('modules')) : the_row();
        
        // Case: banner-cta layout.
        if (get_row_layout() == 'banner_cta') :
            get_template_part('modules/banner-cta');
        endif; 
        
        // Case: banner-cta-alt layout.
        if (get_row_layout() == 'banner_cta_alt') :
            get_template_part('modules/banner-cta-alt');
        endif; 
    
        // Case: blurb layout.
        if (get_row_layout() == 'blurb') :
            get_template_part('modules/blurb');
        endif; 

         // Case: contact-form layout.
         if (get_row_layout() == 'contact_form') :
            get_template_part('modules/contact-form');
        endif; 

         // Case: contact-form-alt layout.
         if (get_row_layout() == 'contact_form_alt') :
            get_template_part('modules/contact-form-alt');
        endif; 
                
        // Case: faqs layout.
        if (get_row_layout() == 'faqs') :
            get_template_part('modules/faqs');
        endif; 

        // Case: featured-blogs layout.
        if (get_row_layout() == 'featured_blogs') :
            get_template_part('modules/featured-blogs');
        endif;

        // Case: featured-content layout.
        if (get_row_layout() == 'featured_content') :
            get_template_part('modules/featured-content');
        endif; 

        // Case: featured-locations layout.
        if (get_row_layout() == 'featured_locations') :
            get_template_part('modules/featured-locations');
        endif;

        // Case: featured-panels layout.
        if (get_row_layout() == 'featured_panels') :
            get_template_part('modules/featured-panels');
        endif;

        // Case: featured-providers layout.
        if (get_row_layout() == 'featured_providers') :
            get_template_part('modules/featured-providers');
        endif; 

        // Case: featured-services layout.
        if (get_row_layout() == 'featured_services') :
            get_template_part('modules/featured-services');
        endif;     
        
        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;

        // Case: hero-banner layout.
        if (get_row_layout() == 'hero_banner') :
            get_template_part('modules/hero-banner');
        endif;

        // Case: linkable-panels layout.
        if (get_row_layout() == 'linkable_panels') :
            get_template_part('modules/linkable-panels');
        endif;

        // Case: location-info layout.
        if (get_row_layout() == 'location_info') :
            get_template_part('modules/location-info');
        endif; 

        // Case: provider-bio layout.
        if (get_row_layout() == 'provider_bio') :
            get_template_part('modules/provider-bio');
        endif; 

        // Case: providers-care-team layout.
        if (get_row_layout() == 'providers_care_team') :
            get_template_part('modules/providers-care-team');
        endif; 

        // Case: providers-locations layout.
        if (get_row_layout() == 'providers_locations') :
            get_template_part('modules/providers-locations');
        endif; 

        // Case: selected-providers layout.
        if (get_row_layout() == 'selected_providers') :
            get_template_part('modules/selected-providers');
        endif;

        // Case: selected-services layout.
        if (get_row_layout() == 'selected_services') :
            get_template_part('modules/selected-services');
        endif;

        // Case: service-page-providers layout.
        if (get_row_layout() == 'service_page_providers') :
            get_template_part('modules/service-page-providers');
        endif;

        // Case: side-by-side layout.
        if (get_row_layout() == 'side_by_side') :
            get_template_part('modules/side-by-side');
        endif;  
        
        // Case: side-by-side-alt layout.
        if (get_row_layout() == 'side_by_side_alt') :
            get_template_part('modules/side-by-side-alt');
        endif;  

        // Case: text-editor layout.
        if (get_row_layout() == 'text_editor') :
            get_template_part('modules/text-editor');
        endif;

        // Case: testimonials layout.
        if (get_row_layout() == 'testimonials') :
            get_template_part('modules/testimonials');
        endif;

        // Case: tiles layout.
        if (get_row_layout() == 'tiles') :
            get_template_part('modules/tiles');
        endif;

        // Case: two-column-list layout.
        if (get_row_layout() == 'two_column_list') :
            get_template_part('modules/two-column-list');
        endif;

    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

endwhile;  else : endif;

wp_reset_postdata(); 

get_footer();
