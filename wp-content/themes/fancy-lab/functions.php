<?php 


/**
 * Fancy Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

 function fancy_lab_scripts() {
   wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() .'./style.css'), 'all' );
 }

 add_action( 'wp_enqueue_scripts', 'fancy_lab_scripts' );