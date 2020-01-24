<?php
namespace SolidDropdown;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Dropdown_Widget extends \Elementor\Widget_Base {

	public static $slug = 'elementor-dropdown';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Elementor Dropdown', self::$slug); }

	public function get_icon() { return 'fa fa-caret-down'; }

	public function get_categories() { return [ 'general' ]; }
}