<?php
/*
Plugin Name: WP Never Rewrite htaccess
Description: Say "no no no" to WP when it wants to rewrite htaccess
Author: Julien Maury
Author URI: https://blog.julien-maury.dev
Version: 1.0
*/
defined( "ABSPATH" )
    or die( "trying" );

add_filter( "flush_rewrite_rules_hard", "__return_false" );// @see https://developer.wordpress.org/reference/hooks/flush_rewrite_rules_hard/
