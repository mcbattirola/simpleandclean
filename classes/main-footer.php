<?php
namespace SNC;

use SNC\Components\Main_Component;
use SNC\Components\Component;
use SNC\Components\Panel;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Main_Footer extends Main_Component {
    public function __construct() {

        $footer = new Component( 'footer', false, null, array( 'main-footer' ), 'Matheus C. Battirola, 2020' );
        parent::__construct( $footer );
    }
}