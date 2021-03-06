<?php get_header(); ?>
<?php
    if(is_front_page())
    {
        get_template_part( 'template-parts/content/main_page' );
    }
    elseif ( is_singular() ) {
        if(get_the_category()[0]->slug == 'smi_unused')
        {
            get_template_part( 'template-parts/content/smi' );
        }
        if(get_the_category()[0]->slug == 'program_form_unused')
        {
            get_template_part( 'template-parts/content/form_program' );
        }
        if(get_the_category()[0]->slug == 'program_unused')
        {
            get_template_part( 'template-parts/content/program' );
        }
        if(get_the_category()[0]->slug == 'about_us_unused')
        {
            get_template_part( 'template-parts/content/about_us' );
        }
        if(get_the_category()[0]->slug == 'contacts_unused')
        {
            get_template_part( 'template-parts/content/contacts' );
        }
        if(get_the_category()[0]->slug == 'donats_unused')
        {
            get_template_part( 'template-parts/content/donats' );
        }
        if(get_the_category()[0]->slug == 'makedonat_unused')
        {
            get_template_part( 'template-parts/content/makedonats' );
        }
        if(get_the_category()[0]->slug == 'volonteri_unused')
        {
            get_template_part( 'template-parts/content/volonteri' );
        }
        if(get_the_category()[0]->slug == 'help_them_unused')
        {
            get_template_part( 'template-parts/content/help_them' );
        }
        if(get_the_category()[0]->slug == 'share_unused')
        {
            get_template_part( 'template-parts/content/share' );
        }
        if(get_the_category()[0]->slug == 'banner_unused')
        {
            get_template_part( 'template-parts/content/banner' );
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