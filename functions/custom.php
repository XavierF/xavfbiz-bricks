<?php

/**
 * Custom user functions.
 * You can put here your custom code.
 * 
 /**
*make post tags into a button
**/
function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a' , '<a class="btn btn-outline-tag btn-sm fw-light"', $html);
    return $html;
}
add_filter('the_tags','add_class_the_tags',10,1);


add_theme_support( 'responsive-embeds' );

//----Toggle BS-Modal-with-nav-menu-items 
//$menu_id = array('17504', '17640');

//add_filter( 'nav_menu_link_attributes', 'menu_atts', 10, 3 );
//function menu_atts( $atts, $item, $args )
//{
//  // The ID of the target menu item
//  $menu_target = 17504 && 17640 ;
//
//  // inspect $item
//  if ($item->ID == $menu_target) {
//    $atts['data-bs-toggle'] = 'modal';
//    //$atts['data-bs-target'] = '#Modal-Search';
//  }
//  return $atts;
//}











