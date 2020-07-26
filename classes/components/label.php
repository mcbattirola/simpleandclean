<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Label extends Component {
	public function __construct( $label, $input_id = '', $id = null, $classes = [] ) {
		parent::__construct( 'label', false, $id, $classes );

		$this->add_style_bulk( [
			'color' => $this->get_theme()->color_text_secondary,
			'display' => 'block',
			'font-size' => '0.875rem',
		] );

		$this->set_content( $label );
		$this->add_attribute( 'for', $input_id );
	}
}
