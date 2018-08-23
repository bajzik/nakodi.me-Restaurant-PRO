<?php
/*
 * Plugin Name: nakodi.me Restaurant PRO
 * Plugin URI: https://nakodi.me
 * Description: TBA
 * Version: 0.0.1
 * Author: nakodi.me
 * Author URI: https://nakodi.me
 * Text Domain: nme-restaurant-pro
 */

$plugin_dir = str_replace(basename(__FILE__), "", plugin_basename(__FILE__));
$plugin_dir = substr($plugin_dir, 0, strlen($plugin_dir) - 1);
define('NME_RESTAURANT_PRO_PATH', plugin_dir_path(__FILE__));
define('NME_RESTAURANT_PRO_DIR', $plugin_dir);
define('NME_RESTAURANT_PRO_INDEX', __FILE__);

require_once 'lib' . DIRECTORY_SEPARATOR . 'Restaurant_Pro_Core.php';