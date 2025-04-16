<?php
/**
 * Plugin Name: Label & Barcode Marq
 * Plugin URI: https://github.com/erwansetyobudi/label_barcode_marq
 * Description: Label Call Number including barcode item with Color Marq. Thanks to Jeffry.
 * Version: 0.0.1
 * Author: Erwan Setyo Budi
 * Author URI: https://github.com/erwansetyobudi
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

// registering menus
$plugin->registerMenu('bibliography', 'Label & Barcode Marq', __DIR__ . '/index.php');
