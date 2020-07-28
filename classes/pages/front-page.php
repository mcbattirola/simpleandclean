<?php
namespace SNC\Pages;

use SNC\Pages\Base_Page;
use SNC\Components\Main_Component;
use SNC\Components\Component;
use SNC\Components\Panel;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Front_Page extends Base_Page {
    public function __construct() {
        
        $main_section = new Component( 'main', false );

        $div = new Component( 'div', false );
        $div->set_content('MAIN'); 
        $main_section->append_child( $div );

        parent::__construct( $main_section );
    }
}