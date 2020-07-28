<?php

use SNC\SNC_Initializer;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SNC_ROOT_PATH', __FILE__ );
define( 'SNC_NS', 'massive-posts' );
define( 'SNC_SLUG', 'massive-posts' );


include_once dirname( SNC_ROOT_PATH ) . '/classes/initializer.php';
SNC_Initializer::init();