<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Panel_Ribbon extends Component {
	public function __construct( $title = null ) {
		parent::__construct( 'div', false, null, [ 'panel-ribbon' ] );

		$this->add_style_bulk( [
			'background-color' => $this->get_theme()->color_primary_tint,
			'margin-left' => $this->to_px( - $this->get_theme()->layout_panel_padding_px ),
			'padding' => $this->to_px( $this->get_theme()->layout_panel_padding_px ),
			'width' => '100%'
		 ] );

		$children = $this->create_children_components( $title );

		foreach ( $children as $child ) {
			$this->append_child( $child );
		}
	}

	private function create_children_components( $title ) {
		$children = [];
		
		$title_component = new Heading( 3, $title );
		$title_component->add_style_bulk( [
			'color' => $this->get_theme()->color_text_secondary,
			'font-size' => '1rem',
			'font-weight' => '400',
			'margin' => '0'
		] );
		array_push( $children, $title_component );

		return $children;
	}
}
