<?php
/**
 * Plugin Name: Ultimate Gutenberg Block
 * Plugin URI: https://makewebbetter.com
 * Description: Ultimate Gutenberg Block is a Gutenberg Block which is used to add google map block using gutenberg editor
 * Author: MakeWebBetter
 * Author URI: https://makewebbetter.com/
 * Tested up to: 4.9.8
 * Version: 1.0.0
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @package CGB
 */


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
