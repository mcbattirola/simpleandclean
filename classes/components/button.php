<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Button extends Component {
	public static $COLOR_ACCENT = 0;
	public static $COLOR_ERROR = 1;
	public static $COLOR_SUCCESS = 2;

	public function __construct( $label, $color = 0, $type = 'button', $id = null, $class = [ 'button' ] ) {
		parent::__construct( 'button', false, $id, $class );

		$this->add_style_bulk( [
			'background-color' => $this->get_button_color( $color ),
			'border' => sprintf( '1px solid %s', $this->get_button_color( $color ) ),
			'color' => $this->get_theme()->color_contrast,
			'height' => $this->to_px( $this->get_theme()->layout_button_height_px ),
			'padding' => sprintf( '0 %dpx', $this->get_theme()->layout_page_padding_px )
		] );

		$this->set_content( $label );
	}

	private function get_button_color( $color ) {
		switch ( $color ) {
			case self::$COLOR_ERROR:
				return $this->get_theme()->color_error;
			case self::$COLOR_SUCCESS:
				return $this->get_theme()->color_success;
			case self::$COLOR_ACCENT:
			default:
				return $this->get_theme()->color_accent;
		}
	}
}
