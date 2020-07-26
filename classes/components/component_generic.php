<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Component_Generic extends Component {
	public function __construct( $tag_name, $id = null, $class = [] ) {
		parent::__construct( $tag_name, false, $id, $class );
	}
}
