<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Panel_Footer extends Component {
	public function __construct() {
		parent::__construct( 'div', false, null, [ 'panel-footer' ] );

		$this->add_style_bulk( [
			'background-color' => $this->get_theme()->color_primary,
			'border-top' => sprintf( '1px solid %s', $this->get_theme()->color_primary_tint_strong ),
			'margin-bottom' => $this->to_px( - $this->get_theme()->layout_panel_padding_px ),
			'margin-left' => $this->to_px( - $this->get_theme()->layout_panel_padding_px ),
			'margin-right' => $this->to_px( - $this->get_theme()->layout_panel_padding_px ),
			'padding' => sprintf( '%dpx %dpx', $this->get_theme()->layout_panel_padding_px, $this->get_theme()->layout_panel_padding_px )
		] );
	}
}
