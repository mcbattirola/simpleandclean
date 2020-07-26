<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Textarea extends Component {
	public function __construct( $name, $rows = 5, $id = null, $classes = [] ) {
		parent::__construct( 'textarea', false, $id, $classes );

		$this->add_style_bulk( [
			'color' => $this->get_theme()->color_text_primary,
			'border' => sprintf( '1px solid %s', $this->get_theme()->color_primary_shade ),
			'display' => 'block',
			'width' => '100%'
		] );

		$this->add_attribute( 'name', $name );
		$this->add_attribute( 'rows', $rows );
	}
}
