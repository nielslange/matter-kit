<?php

// * ---------------------------------------------------------------------------    
// 
//       __ __  __
//     /  /   /   /     __/__/__
//     \ /   /   /  __   /  /  __  (/__
//      /   /   / /  /  /  /  /__) /  /
//     /   /   / (__/__/_ /__/____/  /_/
//             \
//               SOLUTIONS
// 
// 
//    =Core Templates - Menu
//
//    Display a menu
//
// ---------------------------------------------------------------------------- *

$menu = mttr_get_template_var( 'menu' );

if ( $menu ) {

	wp_nav_menu( $menu );

}