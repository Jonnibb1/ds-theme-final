<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<<<<<<< HEAD
=======

>>>>>>> e64e17dd496c32832795032fd220e3da081e2b38
<header>
    <section class="top-bar">
        <div class="logo">
            Logo
        </div>
        <div class="searchbox">
            Search Box
        </div>
    </section>    
    <section class="menu-area">
<<<<<<< HEAD

<div class="container">
<nav class="main-menu">
    <button class="check-button">
        <div class="menu-icon">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </button>
            <?php wp_nav_menu(
                array('theme_location' =>  'ds_theme_main_menu', 'depth' => 2));
             ?>
=======
        <nav class="main-menu">
           <?php wp_nav_menu(
            array('theme-location' => 'wp_devs_main_menu', 'depth' => 2)
           ); ?>
>>>>>>> e64e17dd496c32832795032fd220e3da081e2b38
        </nav>
</div>









        
    </section>
</header>