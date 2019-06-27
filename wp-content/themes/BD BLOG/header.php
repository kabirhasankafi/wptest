<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php
wp_head();   
?>
</head>

<body <?php body_class(); ?> >
    <div class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-area"> <img src="image/logo.png" alt="pic"> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="menu-area">
                            <nav>
                              <?php
                                 $BDmenu = array('theme_location'=>'abc');
                                 wp_nav_menu($BDmenu);
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </div>