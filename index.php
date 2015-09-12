<?php
/**
 * Plugin Name:       Srizon-Plugin-Name-Long
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       srizon-plugin-description
 * Version:           1.0.0
 * Author:            afzal_du
 * Author URI:        http://www.srizon.com/contact
 * License:           srizon-license
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       srizon-plg-name
 * Domain Path:       /languages
 */

//if(file_exists('vendor/autoload.php')) require_once 'vendor/autoload.php'; // load vendor files
require_once dirname(__FILE__).'/inc/db.php'; // load db file
require_once dirname(__FILE__).'/inc/defaults.php'; // load db file
require_once dirname(__FILE__).'/inc/helpers.php'; // load helper functions
require_once dirname(__FILE__).'/admin/index.php'; // load admin files
require_once dirname(__FILE__).'/site/index.php'; // load frontend files

//load cmb2
if ( file_exists( dirname( __FILE__ ) . '/vendor/webdevstudios/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/webdevstudios/cmb2/init.php';
}