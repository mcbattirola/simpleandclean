<?php
namespace SNC\Utils;

use SNC\Settings;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class HTML_Theme {
	public $color_accent;
	public $color_contrast;
	public $color_error;
	public $color_primary;
	public $color_primary_shade;
	public $color_primary_tint;
	public $color_primary_tint_strong;
	public $color_success;
	public $color_text_primary;
	public $color_text_secondary;
	public $color_text_tertiary;
	public $layout_button_height_px;
	public $layout_button_padding_px;
	public $layout_input_height_px;
	public $layout_page_padding_px;
	public $layout_panel_padding_px;

	public function __construct() {
		$this->color_accent = Settings::$COLOR_ACCENT;
		$this->color_contrast = Settings::$COLOR_CONSTRAST;
		$this->color_error = Settings::$COLOR_ERROR;
		$this->color_primary = Settings::$COLOR_PRIMARY;
		$this->color_primary_shade = Settings::$COLOR_PRIMARY_SHADE;
		$this->color_primary_tint = Settings::$COLOR_PRIMARY_TINT;
		$this->color_primary_tint_strong = Settings::$COLOR_PRIMARY_TINT_STRONG;
		$this->color_success = Settings::$COLOR_SUCCESS;
		$this->color_text_primary = Settings::$COLOR_TEXT_PRIMARY;
		$this->color_text_secondary = Settings::$COLOR_TEXT_SECONDARY;
		$this->color_text_tertiary = Settings::$COLOR_TEXT_TERTIARY;
		$this->layout_button_height_px = Settings::$LAYOUT_BUTTON_HEIGHT_PX;
		$this->layout_button_padding_px = Settings::$LAYOUT_BUTTON_PADDING_PX;
		$this->layout_input_height_px = Settings::$LAYOUT_INPUT_HEIGHT_PX;
		$this->layout_page_padding_px = Settings::$LAYOUT_PAGE_PADDING_PX;
		$this->layout_panel_padding_px = Settings::$LAYOUT_PANEL_PADDING_PX;
	}
}
