<?php
/**
 * @package luis-rest-full-api
 */
/*
Plugin Name: luis-rest-full-api
Plugin URI: https://opluss.com.br/
Description: plugin para troca de informações com wordpress tipo de retorno json {
plugin for the exchange of information with wordpress return type json}
Version: 0.1
Author: Luis Fernando
Author URI: https://opluss.com.br/
License: GPLv2 or later
Text Domain: luis-rest-full-api
*/


if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'VERSION', '0.1' );
define( 'MINIMUM_WP_VERSION', '0.1' );
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ )."app/" );
define( 'PLUGIN_DIR_CONTROLLER', plugin_dir_path( __FILE__ )."app/src/controller/" );
define( 'PLUGIN_DIR_MODEL', plugin_dir_path( __FILE__ )."app/src/model/" );
define( 'DELETE_LIMIT', 100000 );

require_once( PLUGIN_DIR_CONTROLLER . 'class.restFullController.php' );

//http://localhost/wordpress/?rest_route=/luis-rest-full-api/getPosts

add_action( 'rest_api_init', function () {
register_rest_route( 'luis-rest-full-api', '/getPosts', array(
'methods' => 'GET',
'callback' => 'getPosts'

) );
} );


function getPosts()
{
	return 'teste';
}