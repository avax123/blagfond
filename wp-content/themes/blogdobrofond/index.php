<?php get_header(); 
if(have_posts()){
    if ( is_single() ) {
        get_template_part( 'content/single' );
    } else {
    get_template_part( 'content/content' );
    }
}
?>

<?php get_footer();?>