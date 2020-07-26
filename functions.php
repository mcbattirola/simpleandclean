<?php

// use Massive_Posts\MOWP_Tools\MOWP_Tools;
// use Massive_Posts\Massive_Posts;
use SNC\SNC_Initializer;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SNC_ROOT_PATH', __FILE__ );
define( 'SNC_NS', 'massive-posts' );
define( 'SNC_SLUG', 'massive-posts' );

// if ( ! class_exists( '\Massive_Posts\Massive_Posts' ) ) {
	// include_once dirname( SNC_ROOT_PATH ) . '/includes/mowp-tools/mowp-tools.php';
	// include_once dirname( SNC_ROOT_PATH ) . '/includes/massive-posts.php';

	// MOWP_Tools::init();
	// Massive_Posts::init();
// }

include_once dirname( SNC_ROOT_PATH ) . '/classes/initializer.php';
SNC_Initializer::init();