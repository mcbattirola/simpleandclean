<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Option extends Component {
	public function __construct( $label, $value, $selected = false,  $id = null, $classes = [] ) {
        parent::__construct( 'option', false, $id, $classes );

		$this->set_content( $label );

		$this->add_attribute( 'value', $value );
		if ( $selected ) {
			$this->add_attribute( 'selected', 'selected' );
		}

	}
}
