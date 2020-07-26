<?php
namespace SNC;

use SNC\Main_Component;
use SNC\Components\Component;
use SNC\Components\Panel;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Header extends Main_Component {
    public function __construct() {
        //cria page
        $header = new Component( 'header', false );

        $new_customer_panel = new Panel( 'Create Posts Massively', 'Select a post to copy, a sufix and set the quantity to create multiple posts' );
        $header->append_child( $new_customer_panel );

        parent::__construct( $header );
    }
}