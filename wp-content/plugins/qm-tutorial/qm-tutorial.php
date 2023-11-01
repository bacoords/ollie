<?php
/**
 * Plugin Name: QM Tutorial
 * Plugin URI:
 * Description: A plugin to demonstrate the use of the Query Monitor plugin.
 * Version: 0.1.0
 * Author: Brian Coords
 * Author URI: https://briancoords.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: qm-tutorial
 *
 * @package QM_Tutorial
 */

namespace QM_Tutorial;

use QM_Tutorial\CLI\QM_Tutorial_CLI;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require __DIR__ . '/inc/class-qm-tutorial-cli.php';

QM_Tutorial_CLI::register();
