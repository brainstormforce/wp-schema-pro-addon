<?php
/**
 * Plugin Name: Schema Pro Addon
 * Plugin URI: https://wpschemapro.com
 * Author: Brainstorm Force
 * Author URI: https://www.brainstormforce.com
 * Description: Addon for Schema Pro plugin.
 * Version: 1.0.0
 * Text Domain: wp-schema-pro-addon
 * License: GPL2
 *
 * @package Schema Pro Addon
 */

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

/**
 * Set constants.
 */
define( 'SCHEMA_PRO_ADDON_FILE', __FILE__ );
define( 'SCHEMA_PRO_ADDON_BASE', plugin_basename( SCHEMA_PRO_ADDON_FILE ) );
define( 'SCHEMA_PRO_ADDON_DIR', plugin_dir_path( SCHEMA_PRO_ADDON_FILE ) );
define( 'SCHEMA_PRO_ADDON_URI', plugins_url( '/', SCHEMA_PRO_ADDON_FILE ) );
define( 'SCHEMA_PRO_ADDON_VER', '1.0.0' );

/**
 * Initial file.
 */
require_once SCHEMA_PRO_ADDON_DIR . 'class-schema-pro-addon.php';
