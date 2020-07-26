<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Panel extends Component {
	private $header;

	public function __construct( $title = null, $subtitle = null, $id = null, $classes = [ 'panel' ] ) {
		parent::__construct( 'div', false, $id, $classes );

		$this->add_style_bulk( [
			'background-color' => $this->get_theme()->color_primary,
			'box-shadow' => '0 0 2px ' . $this->get_theme()->color_primary_shade,
			'padding' => $this->to_px( $this->get_theme()->layout_panel_padding_px ),
		] );

		if ( isset( $title ) || isset( $subtitle ) ) {
			$this->set_header( new Panel_Header( $title, $subtitle ) );
		}
	}

	public function activate_form() {
		$this->set_tag_name( 'form' );
		$this->add_attribute( 'method', 'POST' );
	}

	public function set_header( Panel_Header $header ) {
		if ( isset( $this->header ) ) {
			$this->remove_child( $this->header );
		}

		$this->header = $header;
		$this->append_child( $header );
	}
}
