<?php

require_once('walkers/nav_menu.php');
require_once('metas/mybool.php');



/****
 * 
 ****/



    include('getters/global.php');



/****
 * 
 ****/



    include('init/theme_support.php');
    include('init/wp_register.php');

 function wp_body_classes( $classes ) {
      $classes[] = 'class-name';
        
      return $classes;
  }
  add_filter( 'body_class','wp_body_classes' );

