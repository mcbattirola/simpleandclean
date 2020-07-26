<?php
namespace SNC\Components;

use SNC\Utils\Security;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Field extends Component {
	private $input = null;
	private $label = null;

	public function __construct( $field_name, $field_label, $input_type, $id = null, $class = [ 'field' ] ) {
		parent::__construct( 'div', false, $id, $class );

		$this->add_style_bulk( [
			'margin-bottom' => '1rem',
			'width' => '100%'
		] );

		$field_id = 'field-' . Security::create_guid();
		
		$this->label = new Label( $field_label, $field_id );
		$this->input = new Input( $input_type, $field_name, $field_id );

		$this->append_child( $this->label );
		$this->append_child( $this->input );
	}

	public function set_value( $value ) {
		$this->input->add_attribute( 'value', $value );
	}
}
