<?php
namespace SNC;

use SNC\Components\Component;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

abstract class Main_Component {
	private $component;

	public function __construct( Component $component ) {
		$this->component = $component;
	}

	public function get_component() {
		return $this->component;
	}

	public function init() {
        echo $this->get_component()->build_html();
    }
}