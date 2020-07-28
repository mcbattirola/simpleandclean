<?php
namespace SNC;

use SNC\Components\Main_Component;
use SNC\Components\Component;
use SNC\Components\Panel;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Main_header extends Main_Component {
    public function __construct() {

        $header = new Component( 'header', false, null, array( 'main-header' ) );

        $site_name = new Component( 'h1', false, null, array( 'main-header-title' ) );
        $site_name->set_content( get_bloginfo( 'name' ) ); 
        $header->append_child( $site_name );

        $site_description = new Component( 'h2', false, null, array ( 'main-header-subtitle' ) );
        $site_description->set_content( get_bloginfo( 'description' ) );
        $header->append_child( $site_description );

        parent::__construct( $header );
    }
}