<?php
namespace SNC\Components;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Paragraph extends Component {
	public function __construct( $content, $id = null, $classes = [] ) {
		parent::__construct( 'p', false, $id, $classes );

		$this->add_style_bulk( [
			'color' => $this->get_theme()->color_text_primary,
		] );

		$this->set_paragraph( $content );
	}

	public function get_paragraph() {
		return $this->get_content();
	}

	public function set_paragraph( $content ) {
		$this->set_content( $content );
	}
}
