<?php
/**
 * Plugin Name: Elementor Dropdown
 * Description: A simple Elementor Widget that creates an HTML Select "dropdown"
 * Plugin URI:  https://www.soliddigital.com/blog/...
 * Version:     1.0.0
 * Author:      Peter Ajtai
 * Author URI:  https://pajtai.github.io/
 * Text Domain: elementor-dropdown
 */
namespace Solid_Dropdown;
use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// The Widget_Base class is not available immediately after plugins are loaded, so
// we delay the class' use until Elementor widgets are registered
add_action( 'elementor/widgets/widgets_registered', function() {
	require_once('widget.php');

	$drop_down_widget =	new Dropdown_Widget();

	// Let Elementor know about our widget
	Plugin::instance()->widgets_manager->register_widget_type( $drop_down_widget );
});
