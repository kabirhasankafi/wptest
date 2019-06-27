<?php
function prothom(){
    wp_enqueue_style('our_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'prothom');
register_nav_menus(array('abc' => ('primary'),
                        'xyz' => ('secondary'),
                        )
                  );

function bd_sidebar(){
    register_sidebar(array(
       'name' => 'primary',
        'id' => 'Sidebarone',
        'before_widget' => '<div class="BD-sidebar-section">',
        'after_widget' => '</div>'
    ) 
    );
}
add_action('widgets_init','bd_sidebar');

?>