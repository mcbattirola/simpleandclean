<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Page_Title extends Component {
	public function __construct( $title, $id = null, $classes = [] ) {
		parent::__construct( 'h1', false, $id, $classes );

		$this->add_style_bulk( [
			'color' => $this->get_theme()->color_text_primary,
			'font-size' => '1rem',
			'margin' => '0',
		] );

		$this->set_title( $title );
	}

	public function get_title() {
		return $this->get_content();
	}

	public function set_title( $title ) {
		$this->set_content( $title );
	}
}
