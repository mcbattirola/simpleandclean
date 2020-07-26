<?php
namespace SNC\Components;

use SNC\Options\Pages\Page;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Container extends Component {
	public function __construct( $page_width, $id = null, $classes = [ 'container' ] ) {
		parent::__construct( 'div', false, $id, $classes );

		if ( $page_width === Page::$PAGE_WIDTH_800 ) {
			$this->add_style_bulk( [
				'margin' => 'auto auto',
				'max-width' => '800px',
				'width' => sprintf( 'calc(100%% - %s)', $this->to_px( $this->get_theme()->layout_page_padding_px * 3 ) ),
			] );
		} else {
			$this->add_style_bulk( [
				'margin-left' => $this->to_px( $this->get_theme()->layout_page_padding_px ),
				'width' =>  sprintf( 'calc(100%% - %s)', $this->to_px( $this->get_theme()->layout_page_padding_px * 3 ) ),
			] );
		}
	}
}
