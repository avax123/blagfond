<?php get_header(); ?>
<?php
    if(is_front_page())
    {
        get_template_part( 'template-parts/content/main_page' );
    }
    elseif ( is_singular() ) {
        if(get_the_category()[0]->slug == 'about_us_unused')
        {
            get_template_part( 'template-parts/content/about_us' );
        }
        if(get_the_category()[0]->slug == 'contacts_unused')
        {
            get_template_part( 'template-parts/content/contacts' );
        }
        if(get_the_category()[0]->slug == 'volonteri_unused')
        {
            get_template_part( 'template-parts/content/volonteri' );
        }
        get_template_part( 'template-parts/content/content' );
    }
    elseif(is_home())
    {
        get_template_part( 'template-parts/content/all_posts_page' );
    }
    else {
        get_template_part( 'template-parts/content/content' );
    }
?>
<?php get_footer();?>