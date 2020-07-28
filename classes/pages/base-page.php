<?php

namespace SNC\Pages;

use SNC\Components\Main_Component;
use SNC\Components\Component;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Base_Page {

    private $content;

    public function __construct( Component $content ) {
        $this->content = $content;        
    }

    public function build_html() {
        show_admin_bar(true);
        wp_head();
        get_header();
        echo $this->content->build_html();
        get_footer();
        wp_footer();
    }

}

