<?php
function photonews_setup(){
    load_theme_textdomain("photonews");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    
    //menu
    
    register_nav_menus(array(
        'mainmenu' =>__('Primary','photonews')
    ));
}
add_action('after_setup_theme' , 'photonews_setup');


function photonews_asstes(){
    wp_enqueue_style("fontawesome","//use.fontawesome.com/releases/v5.7.2/css/all.css");
    wp_enqueue_style("bootstrap","//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style("maincss",get_stylesheet_uri() ,"","1.0.3" );
    wp_enqueue_style("respovsive", get_theme_file_uri('/assets/css/responsive.css') , "" ,"1.0.1" );
    
    
    //js
    wp_enqueue_script("popper", ('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') , array("jquery") ,"1.0.1",true);
    wp_enqueue_script("bootstrapjs", ('//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') , array("jquery") ,"1.0.1",true);
    wp_enqueue_script("customjs", get_theme_file_uri('/assets/js/custom.js') , null ,"1.0.1", true);
    wp_enqueue_script("mainjs", get_theme_file_uri('/assets/js/main.js') , array("jquery") ,"1.0.1", true);
}

add_action("wp_enqueue_scripts", "photonews_asstes");




//widgets registration


function photonews_widget(){
    register_sidebar(array(
    'name' => 'photo sidebar',
    'id' => 'rightsidebar',
    'before_widget' => '<div class="pn-sidebar-content">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
     register_sidebar(array(
    'name' => 'footer left',
    'id' => 'footerleft',
    'before_widget' => '<div class="col-md-4">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
     register_sidebar(array(
    'name' => 'footer middle',
    'id' => 'footermiddle',
    'before_widget' => '<div class="col-md-4">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
     register_sidebar(array(
    'name' => 'footer right',
    'id' => 'footerright',
    'before_widget' => '<div class="col-md-4">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
}
add_action('widgets_init' , 'photonews_widget');


//redux framework


require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');












