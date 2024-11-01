<?php
/**
 * Plugin Name:		   TC Bootstrap Carousel
 * Plugin URI:		   http://themescode.com/bootstrap-slider-by-themescode
 * Description:		   Twitter Bootstrap based  professional WordPress  carousel slider plugin.
 * Version: 		     1.0
 * Author: 			     themescode < imran@themescode.com >
 * Author URI: 		   http://themescode.com
 * Text Domain:      tc-bootstrap-carousel
 * License:          GPL-2.0+
 * License URI:      http://www.gnu.org/licenses/gpl-2.0.txt
 * License: GPL2
 */


 // Pull in WP Stack plugin library

 include(plugin_dir_path( __FILE__ ).'/libs/cpt.php' );
 include(plugin_dir_path( __FILE__ ).'/public/tc-bcarousel-view.php' );
 include(plugin_dir_path( __FILE__ ).'/admin/tc-bcarousel-setting.php' );

 function tc_bcarousel_enqueue_scripts() {
 		//Plugin Main CSS File.
      wp_enqueue_style( 'tc-bcarousel-main', plugins_url('assets/css/tc-bcarousel-main.css', __FILE__ ) );
  }

  //This hook ensures our scripts and styles are only loaded in the admin.

   add_action( 'wp_enqueue_scripts', 'tc_bcarousel_enqueue_scripts' );



function tcbcarousel_move_featured_image_box() {

       remove_meta_box( 'postimagediv', 'tc-bcarousel', 'side' );

       add_meta_box('postimagediv', __('Featured Image'), 'post_thumbnail_meta_box', 'tc-bcarousel', 'normal', 'high');

  }

add_action('do_meta_boxes', 'tcbcarousel_move_featured_image_box');


 if ( function_exists( 'add_theme_support' ) ) {
     add_theme_support( 'post-thumbnails' );
 }
