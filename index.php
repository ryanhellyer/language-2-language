<?php
/*
Plugin Name: Language 2 Language
Plugin URI: http://somedomain.com/
Description: Translation plugin for WordPress multisite
Version: 1.0
Author: Ryan Hellyer
Author URI: http://geek.ryanhellyer.net/

------------------------------------------------------------------------
Copyright Ryan Hellyer

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

*/



/**
 * Do not continue processing since file was called directly
 * 
 * @since 1.0
 * @author Ryan Hellyer <ryanhellyer@gmail.com>
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/**
 * Load required files
 * 
 * @since 1.0
 * @author Ryan Hellyer <ryanhellyer@gmail.com>
 */
require( 'inc/class-translation.php' );
require( 'inc/posts-to-posts/posts-to-posts.php' );

/**
 * Define constants
 * 
 * @since 1.0
 * @author Ryan Hellyer <ryanhellyer@gmail.com>
 */
define( 'TRANSLATION_DIR', dirname( __FILE__ ) . '/' ); // Plugin folder DIR
define( 'TRANSLATION_URL', plugins_url() ); // Plugin folder URL

/**
 * Instantiate classes
 * 
 * @since 1.0
 * @author Ryan Hellyer <ryanhellyer@gmail.com>
 */

 
 
 
 
 
 function my_connection_types() {
	p2p_register_connection_type( array(
		'name' => 'posts_to_pages',
		'from' => 'post',
		'to' => 'page'
	) );
}
add_action( 'p2p_init', 'my_connection_types' );

