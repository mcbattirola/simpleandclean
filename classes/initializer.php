<?php
namespace SNC;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class SNC_Initializer {
	public static function init() {    
                include_once dirname( __FILE__ ) . '/main-section.php';
                include_once dirname( __FILE__ ) . '/header.php';
                include_once dirname( __FILE__ ) . '/settings.php';
                include_once dirname( __FILE__ ) . '/utils/html-element.php';
                include_once dirname( __FILE__ ) . '/utils/html-theme.php';
                // include_once dirname( __FILE__ ) . '/utils/security.php';
                // include_once dirname( __FILE__ ) . '/utils/template.php';
                include_once dirname( __FILE__ ) . '/components/component.php';
                include_once dirname( __FILE__ ) . '/components/component_generic.php';
                include_once dirname( __FILE__ ) . '/components/component_ghost.php';
                include_once dirname( __FILE__ ) . '/components/button.php';
                include_once dirname( __FILE__ ) . '/components/container.php';
                include_once dirname( __FILE__ ) . '/components/input.php';
                include_once dirname( __FILE__ ) . '/components/option.php';
                include_once dirname( __FILE__ ) . '/components/select.php';
                include_once dirname( __FILE__ ) . '/components/textarea.php';
                include_once dirname( __FILE__ ) . '/components/label.php';
                include_once dirname( __FILE__ ) . '/components/field.php';
                include_once dirname( __FILE__ ) . '/components/field-select.php';
                include_once dirname( __FILE__ ) . '/components/field-textarea.php';
                include_once dirname( __FILE__ ) . '/components/heading.php';
                include_once dirname( __FILE__ ) . '/components/hr.php';
                include_once dirname( __FILE__ ) . '/components/page-header.php';
                include_once dirname( __FILE__ ) . '/components/page-title.php';
                include_once dirname( __FILE__ ) . '/components/panel.php';
                include_once dirname( __FILE__ ) . '/components/panel-container.php';
                include_once dirname( __FILE__ ) . '/components/panel-header.php';
                include_once dirname( __FILE__ ) . '/components/panel-footer.php';
                include_once dirname( __FILE__ ) . '/components/panel-footer-submit.php';
                include_once dirname( __FILE__ ) . '/components/panel-ribbon.php';
                include_once dirname( __FILE__ ) . '/components/paragraph.php';
                // include_once dirname( __FILE__ ) . '/pages/simple-page.php';
                // include_once dirname( __FILE__ ) . '/menu.php';		
	}
}
