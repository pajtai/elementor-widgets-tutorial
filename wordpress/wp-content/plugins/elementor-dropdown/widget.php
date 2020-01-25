<?php
namespace Solid_Dropdown;

use Elementor\Repeater;
use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Dropdown_Widget extends Widget_Base {

	public static $slug = 'elementor-dropdown';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Elementor Dropdown', self::$slug); }

	public function get_icon() { return 'fa fa-caret-down'; }

	public function get_categories() { return [ 'general' ]; }

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Options', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Use the repeater to define one one set of the items we want to repeat look like
		$repeater = new Repeater();

		$repeater->add_control(
			'option_value',
			[
				'label' => __( 'Option Value', self::$slug ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( "The Option's Value", self::$slug ),
				'placeholder' => __( 'Value Attribute', self::$slug ),
			]
		);

		$repeater->add_control(
			'option_contents',
			[
				'label' => __( 'Option Contents', self::$slug ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( "The Option's Contents", self::$slug ),
				'placeholder' => __( 'Option Contents', self::$slug ),
			]
		);

		// Add the
		$this->add_control(
			'options_list',
			[
				'label' => __( 'Repeater List', self::$slug ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[]
				],
				'title_field' => '{{{ option_contents }}}'
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$options_list = $this->get_settings_for_display('options_list');
		echo "<select>";
		foreach ($options_list as $option_item) {
			echo "<option value='{$option_item['option_value']}'>{$option_item['option_contents']}</option>";
		}
		echo "<select>";
	}
}