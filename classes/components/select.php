<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Select extends Component {
	public function __construct( $name, $options = [], $id = null, $classes = [] ) {
        parent::__construct( 'select', false, $id, $classes );

		$this->add_style_bulk( [
			'color' => $this->get_theme()->color_text_primary,
			'border' => sprintf( '1px solid %s', $this->get_theme()->color_primary_shade ),
			'display' => 'block',
			'width' => '100%',
			'max-width' => '100%'
		] );

		foreach ( $options as $option ) {
			$this->append_child( $option );
		}

		$this->add_attribute( 'name', $name );
	}
}
