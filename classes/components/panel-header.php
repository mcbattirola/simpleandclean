<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Panel_Header extends Component {
	public function __construct( $title = null, $subtitle = null ) {
		parent::__construct( 'div', false, null, [ 'panel-header' ] );

		$this->add_style_bulk( [
			'border-bottom' => sprintf( '1px solid %s', $this->get_theme()->color_primary_tint_strong ),
			'margin-left' => $this->to_px( - $this->get_theme()->layout_panel_padding_px ),
			'margin-top' => $this->to_px( - $this->get_theme()->layout_panel_padding_px ),
			'padding' => $this->to_px( $this->get_theme()->layout_panel_padding_px ),
			'width' => '100%'
		 ] );

		$children = $this->create_children_components( $title, $subtitle );

		foreach ( $children as $child ) {
			$this->append_child( $child );
		}
	}

	private function create_children_components( $title, $subtitle ) {
		$children = [];
		
		if ( isset( $title ) ) {
			$title_component = new Heading( 2, $title );
			$title_component->add_style( 'font-size', '1.5rem' );
			$title_component->add_style( 'font-weight', '400' );
			$title_component->add_style( 'margin', '0' );
			array_push( $children, $title_component );
		}

		if ( isset( $subtitle ) ) {
			$subtitle_component = new Paragraph( $subtitle );
			$subtitle_component->add_style( 'color', $this->get_theme()->color_text_tertiary );
			$subtitle_component->add_style( 'font-size', '1rem' );
			$subtitle_component->add_style( 'margin-bottom', '0' );
			array_push( $children, $subtitle_component );
		}

		return $children;
	}
}
