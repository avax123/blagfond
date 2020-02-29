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

   function my_upload_size_limit( $limit ) {
    add_filter( 'upload_size_limit', 'my_upload_size_limit' );
        return wp_convert_hr_to_bytes( '5M' );
    }

    add_action( 'admin_post_save_form', 'lunchbox_generate_orders_csv' );
    function lunchbox_generate_orders_csv() {
        if (isset($_POST['submit'])) {
            $math          = $_POST['math'] ?: '';
            $chemistry     = $_POST['chemistry'] ? ', '.$_POST['chemistry'] : '';
            $other_profile = $_POST['other_profile'] ? ', '.$_POST['other_profile'] : '';
        
            $message = '<strong>'.'Контактные данные'.'</strong>'.'<br/>'.
                       'Телефон: '.$_POST['phone'].'<br/>'.
                       'E-mail: '.$_POST['email'].'<br/>'.'<br/>'.
                       '<strong>'.'Данные ребенка'.'</strong>'.'<br/>'.
                       'Имя ребенка: '.$_POST['name'].'<br/>'.
                       'Дата рождения: '.$_POST['birthday'].'<br/>'.
                       'Населенный пункт проживания: '.$_POST['city'].'<br/>'.
                       'Профиль образования: '.$math.$chemistry.$other_profile.'<br/>'.
                       '<strong>'.'Успеваемость в школе'.'</strong>'.'<br/>'.
                       'Средний балл по всем предметам: '.$_POST['avg-grade'].'<br/>'.
                       'По математике: '.$_POST['math-grade'].'<br/>'.
                       'По физике: '.$_POST['physics-grade'].'<br/>'.
                       'По биологии: '.$_POST['biology-grade'].'<br/>'.
                       'По химии: '.$_POST['chemistry-grade'].'<br/>'.'<br/>'.
                       '<strong>'.'Финансовое состояние семьи'.'</strong>'.'<br/>'.
                       'Совокупный доход родителей в рублях: '.$_POST['revenue'].'<br/>'.
                       'Количество членов семьи проживающих вместе: '.$_POST['relatives-number'].'<br/>'.'<br/>'.
                       'Ознакомлен с Соглашением: '.$_POST['agree'];
        
            $to      = 'mkdr1488@gmail.com';
            $subject = "Заявка на участие в программе «Поддержи таланты»";
            $headers = 'From: sergey.petrov.a@gmail.com'."\r\n".
                       'Content-type: text/html; charset="utf-8"'."\r\n".
                       'Date: '.date('D, d M Y h:i:s O')."\r\n";
        
            $test = mail($to, $subject, $message, $headers);
            if ($test) {
                get_header(); 
                get_template_part( 'template-parts/content/form_success' );
                get_footer();
                exit();
            }
        } else {
            echo 'Error: Wrong data';
        }
    }

    add_action( 'admin_post_save_form_help_themn', 'lunchbox_generate_orders_csv_help_them' );
    function lunchbox_generate_orders_csv_help_them() {
        $message = '<strong>'.'Контактные данные'.'</strong>'.'<br/>'.
        'Телефон: '.$_POST['contact'].'<br/>'.
        'Имя: '.$_POST['fio'].'<br/>'.

        $to      = 'mkdr1488@gmail.com';
        $subject = "Заявка 'Помоги делом'";
        $headers = 'From: sergey.petrov.a@gmail.com'."\r\n".
                'Content-type: text/html; charset="utf-8"'."\r\n".
                'Date: '.date('D, d M Y h:i:s O')."\r\n";

        $test = mail($to, $subject, $message, $headers);
        if ($test) {
        get_header(); 
        get_template_part( 'template-parts/content/form_success' );
        get_footer();
        exit();
        } else {
        echo 'Error: Wrong data';
        }
    }