<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Heading extends Component {
	public function __construct( $size, $title, $id = null, $classes = [] ) {
		parent::__construct( sprintf( 'h%d', $size ), false, $id, $classes );

		$this->add_style_bulk( [
			'color' => $this->get_theme()->color_text_primary,
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
