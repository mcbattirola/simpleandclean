<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Input extends Component {
	public static $TYPE_TEXT = 0;
	public static $TYPE_NUMBER = 1;

	public function __construct( $type, $name, $id = null, $classes = [] ) {
		parent::__construct( 'input', false, $id, $classes );

		$this->add_style_bulk( [
			'color' => $this->get_theme()->color_text_primary,
			'border' => sprintf( '1px solid %s', $this->get_theme()->color_primary_shade ),
			'display' => 'block',
			'height' => $this->to_px( $this->get_theme()->layout_input_height_px ),
			'width' => '100%'
		] );

		$this->add_attribute( 'name', $name );

		switch ( $type ) {
			case self::$TYPE_NUMBER:
				$this->add_attribute( 'type', 'number' );
				break;
			case self::$TYPE_TEXT:
			default:
				$this->add_attribute( 'type', 'text' );
		}
	}
}
