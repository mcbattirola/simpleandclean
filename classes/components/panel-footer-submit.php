<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Panel_Footer_Submit extends Component_Ghost {
	public function __construct( $submit_button_label ) {
		$panel = new Panel_Footer();
		
		$button = new Button( $submit_button_label, Button::$COLOR_ACCENT );
		$panel->append_child( $button );

		$this->append_child( $panel );
	}
}
