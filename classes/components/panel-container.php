<?php
namespace SNC\Components;

use SNC\Utils\Security;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Panel_Container extends Component {
	public function __construct( $id = null, $class = [ 'panel-container' ] ) {
		parent::__construct( 'div', false, $id, $class );

		$this->add_style_bulk( [
			'padding-bottom' =>  $this->to_px( $this->get_theme()->layout_panel_padding_px ),
			'padding-top' =>  $this->to_px( $this->get_theme()->layout_panel_padding_px ),
			'width' => '100%'
		] );
	}
}
