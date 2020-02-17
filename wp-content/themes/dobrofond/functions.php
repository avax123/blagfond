<?php 
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'top-menu' => __( 'Верхнее меню' ),
            'top-right-menu' => __( 'Верхнее правое меню' ),
            'middle-menu'=> __( 'Среднее меню' ),
            'footer' => __( 'Футер' )
        )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  function filter_nav_menu_items($menu){
    $post_type = ($menu->object); //gets post type
    if(strpos($menu->title,'+') !== false && strpos($menu->title,'icon-phone') == false) {
        $menu->title = '<i class="icon-phone"></i>'. $menu->title;
    }

    return $menu; //return the filtered object
}
 
add_filter( 'wp_setup_nav_menu_item', 'filter_nav_menu_items', 1 );

function get_slider_posts($post_id)
{
    $term = get_terms( 'category', array( 'name__like' => 'Слайдер' ) );

    $args = array(
        'posts_per_page'   => 5,
        'offset'           => 0,
        'cat'              => $term[0]->term_id,
        'category_name'    => '',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'include'          => '',
        'exclude'          => '',
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'post',
        'post_mime_type'   => '',
        'post_parent'      => '',
        'author'	   => '',
        'author_name'	   => '',
        'post_status'      => 'publish',
        'suppress_filters' => true,
        'fields'           => '',
    );
    $posts_array = get_posts( $args );
    
    return $posts_array;
}

function get_posts_by_category($category, $order = 'DESC', $post_type = 'post')
{
    $term = get_terms( 'category', array( 'name__like' => $category ) );

    $args = array(
        'posts_per_page'   => 0,
        'offset'           => 0,
        'cat'              => $term[0]->term_id,
        'category_name'    => '',
        'orderby'          => 'date',
        'order'            => $order,
        'include'          => '',
        'exclude'          => '',
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => $post_type,
        'post_mime_type'   => '',
        'post_parent'      => '',
        'author'	   => '',
        'author_name'	   => '',
        'post_status'      => 'publish',
        'suppress_filters' => true,
        'fields'           => '',
    );
    $posts_array = get_posts( $args );
    
    return $posts_array;
}