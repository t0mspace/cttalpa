<?php
/**
 * Plugin Name: Make Paths Relative
 * Plugin URI: https://wordpress.org/plugins/make-paths-relative/
 * Description: This plugin converts the URL(Links) to relative instead of absolute.
 * Version: 0.5.5
 * Author: YAS Global Team
 * Author URI: https://www.yasglobal.com/web-design-development/wordpress/make-paths-relative/
 * Donate link: https://www.paypal.me/yasglobal
 * License: GPLv2 or later
 *
 * Text Domain: make-paths-relative
 * Domain Path: /i18n/languages/
 *
 * @package MakePathsRelative
 */

/**
 * Make Paths Relative Plugin 
 * Copyright (C) 2016-2018, Sami Ahmed Siddiqui <sami.siddiqui@yasglobal.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Make sure we don't expose any info if called directly
if ( ! defined( 'ABSPATH' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

if ( ! function_exists( 'add_action' ) || ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'MAKE_PATHS_RELATIVE_FILE' ) ) {
	define( 'MAKE_PATHS_RELATIVE_FILE', __FILE__ );
}

require_once( dirname( MAKE_PATHS_RELATIVE_FILE ) . '/make-paths-relative-main.php' );
