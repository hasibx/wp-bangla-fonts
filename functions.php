<?php
/**
* Bangla Stylish Fonts for WordPress
*
* @package           Bangla Stylish Fonts for WordPress
* @author            Md Hasib Khan
* @copyright         2021 Md Hasib Khan
* @license           GPL-2.0-or-later
*
* @wordpress-plugin
* Plugin Name:       Bangla Stylish Font
* Plugin URI:        https://webdevil.xyz/admin
* Description:       This plugin allows you to use various bangla stylish font easily in your wordpress website without any coding knowledge. Very easy to setup and user-friendly.
* Version:           1.0.0
* Author:            Md Hasib Khan
* Author URI:        https://www.facebook.com/hasib.unique
* Text Domain:       bangla-stylish-font
* License:           GPL v2 or later
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/
/*
Bangla Stylish Font is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
Bangla Stylish Font  is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with Bangla Stylish Font. If not, see here: http://www.gnu.org/licenses/gpl-2.0.txt
*/
define('pluginDomain', 'wp-bangla-fonts');
define('pluginVersion', '1.0.0');
function bnfont_table(){
global $wpdb;
$charset_collate = $wpdb->get_charset_collate();
$tablename = $wpdb->prefix."bnfont";
$sql = "CREATE TABLE IF NOT EXISTS $tablename (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
font varchar(80) NOT NULL) $charset_collate;";
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
}
register_activation_hook( __FILE__, 'bnfont_table' );


$res = file_get_contents('https://webdevil.xyz/bnfont/version.json');
$res = json_decode($res);
if ($res->version !== pluginVersion){
function update_error() {
$res = file_get_contents('https://webdevil.xyz/bnfont/version.json');
$res = json_decode($res);
    $class = 'notice notice-error is-dismissible';
    $message = 'Bangla Stylish Font<strong> Version '.$res->version.' </strong> is available now. <a href="'.admin_url().'plugins.php">Update the plugin </a> to get more improvements!';
    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), $message ); 
}
add_action( 'admin_notices', 'update_error' );
}

global $wpdb;
$results = $wpdb->get_results( "SELECT font FROM wp_bnfont");
if(!empty($results))  {
foreach($results as $row){ 
define('loadfont', $row->font );
function load_font() {
echo '<link rel="stylesheet" href="'.plugins_url( '/fonts/stylesheet.css', __FILE__ ).'">
<style>
body,div,p,h1,h2,h3,h4,h5,h6,article,
form,form span.required,a,input,textarea,select,
.topbar,.main-menu,.breadcrumb,.copyrights-area
{font-family: '.loadfont.', Arial, sans-serif !important;
}
</style>';
}
}
}
add_action('wp_head', 'load_font');
function bnfont_menu(){
add_menu_page('Bangla Stylish Font', 'Bangla Font', 'manage_options', 'bangla-font', 'install_font', plugins_url(pluginDomain . '/assets/icon.png') , 3);
add_submenu_page("bangla-font","Font Settings", "Font Settings","manage_options", "font-settings", "font_settings"); 
add_submenu_page("bangla-font","About this plugin", "About this plugin","manage_options", "about-bangla-font", "about_plugin"); 
add_submenu_page("bangla-font","Report a problem", "Report a problem","manage_options", "font-report", "font_report"); 
}   
add_action('admin_menu', 'bnfont_menu');
function install_font(){
?>
<?php echo'<link href="'.plugins_url(pluginDomain . '/assets/admin-style.css').'" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">';
include('font-install.php') ?>
<?php
}
function font_report(){
?>
<?php echo'<link href="'.plugins_url(pluginDomain . '/assets/admin-style.css').'" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">';
include('report.php') ?>
<?php
}
function font_settings(){
?>
<?php echo'<link href="'.plugins_url(pluginDomain . '/assets/admin-style.css').'" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">';
include('settings.php') ?>
<?php
}
function about_plugin(){
?>
<?php echo'<link href="'.plugins_url(pluginDomain . '/assets/admin-style.css').'" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">';
include('about.php') ?>
<?php
}
