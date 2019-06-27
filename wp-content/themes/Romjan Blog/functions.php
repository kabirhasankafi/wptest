<?php
function romjan_blog(){
wp_enqueue_style("fontawesome" , "//use.fontawesome.com/releases/v5.7.2/css/all.css");
wp_enqueue_style("bootstrap" , "//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
wp_enqueue_style("mainstyle" , get_stylesheet_uri() , '' , '1.0.0');

}
add_action("wp_enqueue_scripts" , "romjan_blog");

?>