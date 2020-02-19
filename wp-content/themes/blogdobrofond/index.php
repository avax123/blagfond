<?php get_header(); 
if(have_posts()){
    get_template_part( 'content/content' );
}
?>

<?php get_footer();?>