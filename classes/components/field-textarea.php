<?php
namespace SNC\Components;

use SNC\Utils\Security;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Field_Textarea extends Component {
	private $label = null;
	private $textarea = null;

	public function __construct( $field_name, $field_label, $rows, $id = null, $class = [ 'field' ] ) {
		parent::__construct( 'div', false, $id, $class );

		$this->add_style_bulk( [
			'margin-bottom' => '1rem',
			'width' => '100%'
		] );

		$field_id = 'field-' . Security::create_guid();
		
		$this->label = new Label( $field_label, $field_id );
		$this->textarea = new Textarea( $field_name, $rows, $field_id );

		$this->append_child( $this->label );
		$this->append_child( $this->textarea );
	}

	public function set_value( $value ) {
		$this->textarea->set_content( $value );
	}
}
