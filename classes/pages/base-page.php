<?php

namespace SNC\Pages;

use SNC\Components\Main_Component;
use SNC\Components\Component;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Base_Page {

    private $content;
    private $head;

    public function __construct( Component $content ) {
        $this->content = $content;

        $this->mount_head();
    }

    public function build_html() {
        show_admin_bar( current_user_can( 'manage_options' ) );
        echo $this->head->build_html();
        wp_head();
        get_header();
        echo $this->content->build_html();        
        get_footer();
        wp_footer();
    }

    private function mount_head() {
        $this->head = new Component( 'head', false );

        $viewport_content = new Component( 'meta', true );
        $viewport_content->add_attribute( 'name', 'viewport' );
        $viewport_content->add_attribute( 'content', 'width=device-width, initial-scale=1' );

        $this->head->append_child( $viewport_content );
    }

}

