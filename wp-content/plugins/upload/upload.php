<?php
/**
 * Plugin Name:       Upload
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       upload
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function upload_upload_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'upload_upload_block_init' );
// function enqueue_custom_scripts() {
//     // Enqueue the slider JavaScript file
//     wp_enqueue_script( 'custom-slider', plugin_dir_url( __FILE__ ) . '/js/slider.js', array(), '1.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );

// Enqueue custom slider styles
// function enqueue_custom_slider_styles() {
//     wp_enqueue_style( 'custom-slider-styles', plugins_url( 'css/custom-slider-styles.css', __FILE__ ) );
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_custom_slider_styles' );