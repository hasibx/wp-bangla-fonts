<?php
/**
* Bangla Stylish Font
* @package           Bangla Stylish Font
* @author            Md Hasib Khan
* @copyright         2021 Md Hasib Khan
* @license           GPL-2.0-or-later
*/
echo '<br> <br> <h1> Sending Email... </h1>';
require ABSPATH . WPINC . '/version.php';
$php_version = phpversion();
$current      = get_site_transient( 'update_core' );
$translations = wp_get_installed_translations( 'core' );
// Invalidate the transient when $wp_version changes.
if ( is_object( $current ) && $wp_version !== $current->version_checked ) {
$current = false;
}
if ( ! is_object( $current ) ) {
$current                  = new stdClass;
$current->updates         = array();
$current->version_checked = $wp_version;
}
$mailbody= 'Note: Kindly don\'t remove this text (Plugin+Name: Bangla Stylish Font, Plugin Version: '.pluginVersion.', Site URL: '.home_url().', Wordpress Version: '.$wp_version.', PHP Version: '.$php_version.')';?>
<meta http-equiv="refresh" content="0; URL=mailto:hasibkhan.mhk@gmail.com?body=<?php echo $mailbody;?>" />
