<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Page_Header extends Component {
	public function __construct( $title ) {
		$id = $this->create_id( 'page-header' );
		parent::__construct( 'div', false, $id, [] );

		$this->add_style_bulk( [
			'background-color' => $this->get_theme()->color_primary,
			'box-shadow' => '0 0 2px ' . $this->get_theme()->color_primary_shade,
			'margin-bottom' => $this->to_px( $this->get_theme()->layout_page_padding_px * 2 ),
			'margin-left' => $this->to_px( - $this->get_theme()->layout_page_padding_px ),
			'padding' => sprintf( '%dpx %dpx', $this->get_theme()->layout_page_padding_px, $this->get_theme()->layout_page_padding_px * 2 )
		] );

		$children = $this->create_children_components( $title );

		foreach ( $children as $child ) {
			$this->append_child( $child );
		}
	}

	private function create_children_components( $title ) {
		$children = [];
		
		array_push( $children, new Page_Title( $title ) );

		return $children;
	}
}
