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

        $text_container = new Component( 'header', false );

        $site_name = new Component( 'a', false, null, array( 'main-header-title' ) );
        $site_name->add_attribute( 'href', esc_url( home_url( '/' ) ) );
        $site_name->set_content( get_bloginfo( 'name' ) );
        $text_container->append_child( $site_name );
        
        $site_description = new Component( 'div', false, null, array ( 'main-header-subtitle' ) );
        $site_description->set_content( get_bloginfo( 'description' ) );
        $text_container->append_child( $site_description );
        
        $header->append_child( $text_container );
        parent::__construct( $header );
    }
}