<?php
namespace SolidDropdown;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Dropdown_Widget extends \Elementor\Widget_Base {

	public static $slug = 'elementor-dropdown';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Elementor Dropdown', self::$slug); }

	public function get_icon() { return 'fa fa-caret-down'; }

	public function get_categories() { return [ 'general' ]; }

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Options', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'widget_value',
			[
				'label' => __( 'Option Value', self::$slug ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'value', self::$slug ),
				'placeholder' => __( 'Value Attribute', self::$slug ),
			]
		);

		$this->add_control(
			'widget_contents',
			[
				'label' => __( 'Option Contents', self::$slug ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'contents', self::$slug ),
				'placeholder' => __( 'Option Contents', self::$slug ),
			]
		);

		$this->end_controls_section();
	}
}