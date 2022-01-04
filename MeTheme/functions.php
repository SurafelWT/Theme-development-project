<?php


add_theme_support('menus');


function mt_add_menu() {
    register_nav_menu(
        array(
            'top-menu' => __( 'Top Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}


add_action( 'init', 'mt_add_menu');









  function my_custom_theme_sidebar() {
      register_sidebar( array(
          'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
          'id'   => 'sidebar-1' ,
          'before_widget' => '<div>',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="rounded">',
          'after_title'   => '</h2>',
      ));
  }
  add_action( 'widgets_init', 'my_custom_theme_sidebar' );

  
function wct_loadStyle()
{
    wp_register_style( 'style', get_tempate_directory_uri() . '/assets/css/style1.css',array(), false, 'all');
    wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'wct_loadStyle' );

?>






















  ?>
