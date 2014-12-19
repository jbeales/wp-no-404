<?php

/**
 * Plugin Name: WP No 404s
 * Plugin URI: http://johnbeales.com
 * Description: Makes WordPress return HTTP 503 response codes instead of HTTP 404 response codes when it can't find a page.
 * Version: 1.0.0
 * Author: John Beales
 * Author URI: http://johnbeales.com
 * License: GPL2
 */


// @TODO : Return 404 if the request is for robots.txt, otherwise Google freaks out.

function no404_temporarily_unavailable( $header, $description, $code, $protocol ) {

	$unavailable = $protocol . ' 503 Service Unavailable';
	return $unavailable;
}
add_filter( 'status_header', 'no404_temporarily_unavailable', 10, 4 );





