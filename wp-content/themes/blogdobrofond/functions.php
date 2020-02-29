<?php 
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'top-menu' => __( 'Верхнее меню' ),
            'top-right-menu' => __( 'Верхнее правое меню' ),
            'middle-menu'=> __( 'Среднее меню' ),
            'footer' => __( 'Футер' ),
            'middle-menu-mobile' => __( 'Мобильное меню центр' ),
            'top-menu-mobile' => __( 'Мобильное меню верхнее' ),
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

function get_posts_by_category($category, $order = 'DESC', $post_type = 'post', $cat_name = '', $count = 0)
{
    $term = get_terms( 'category', array( 'name__like' => $category ) );
    $posts_array = array();
    if($term[0]->term_id){
    $args = array(
        'posts_per_page'   => $count,
        'offset'           => 0,
        'cat'              => $term[0]->term_id,
        'category_name'    => $cat_name,
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
    }
    return $posts_array;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
if( is_category() ){
  if($item->title == get_queried_object()->name){
      $classes[] = 'active ';

  }
}
  return $classes;
}

add_action( 'wp_ajax_pagination', 'pagination_offset_posts' );
add_action( 'wp_ajax_nopriv_pagination', 'pagination_offset_posts' );  

 
function pagination_offset_posts(){
    $offset = $_POST['m1'];
    $cat_name = $_POST['m3'];
    $term = get_terms( 'category', array( 'name__like' => $cat_name ) );

	$args = array(
        'posts_per_page'   => 9,
        'offset'           => $offset,
        'cat'              => $term[0]->term_id,
        'category_name'    => $cat_name,
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
    foreach($posts_array as $post){
        $data .= '<div class="col-lg-4 col-md-6 col-xs-12 blog-col"><a class="blog-item" href="'. $post->guid .'">
        <div class="blog-type">'. wp_get_post_categories($post->ID, array("fields" => "all"))[0]->name .'</div>
        <div class="blog-item__img"><img src="'. get_field("preview_and_avatar", $post->ID) .'" alt=""></div>
        <div class="blog-item__info"><b>'.get_field("preview_title", $post->ID).'</b>
          <p>'.get_field("preview_text", $post->ID).'</p><span class="detail-link">Подробнее</span>
        </div></a>
      </div>';
    }

	echo $data;
	die; 
}

add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

   add_action( 'wp_ajax_search', 'search_func' );
   add_action( 'wp_ajax_nopriv_search', 'search_func' );  
   
    
   function search_func(){
    global $wpdb;
       $search_word = $_POST['datas'];
       $ss = $wpdb->get_results('
        SELECT * FROM wp_2_posts
        WHERE post_title LIKE "%'.$search_word.'%"
        AND post_type = "post"
        LIMIT 10
        ');
        foreach($ss as $post){
            $data .= '<a class="search-item" href="'.$post->guid.'">
            <p>'.$post->post_title.'</p>
            <div class="blog-one-info">
              <div class="blog-one-date"> <img src="images/calendar.png" alt="">'.date_format(date_create($post->post_date),'d.m.Y').'</div>
              <div class="blog-one-tag">
                <div class="blog-type">'.wp_get_post_categories($post->ID, array('fields' => 'all'))[0]->name.'</div>
              </div>
            </div></a>';
        }
        echo $data;
       die;
   }