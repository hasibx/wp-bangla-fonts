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
?>
<div class="container">
<form action="<?php echo admin_url( "admin.php?page=".$_GET["page"] ); ?>" method="post">
    <div class="title">Font Settings (Beta)
    </div>
    
    <div> Version 
      <?php echo pluginVersion;?> 
    </div>
    <br>

    <div class="card-group">
    <div class="card">
        <img src="<?php echo plugins_url(pluginDomain.'/assets/background.png')?>" width="100%" style="object-fit:cover!important">
    </div>
    <div class="card">
    <div class="card-body">
            <h4 class="card-title">Font Settings is not Available for you!</h4>
            <p class="card-text">Font Settings is a Beta Version and only available for Developers. You must register on beta tesing platform of WebDevil to access Beta features!</p>
            <span class="part">Version: </span> <?php echo pluginVersion;?>
            <br>
            <span class="part">Developed By:</span> <a style="text-decoration:none;" href="https://fb.me/hasib.unique">Md Hasib Khan</a>
           <br>
           <span class="part">Latest Beta Version: </span> 1.0.3</a>
           <br>
           <br>
            <a class="btn btn-primary" href="https://webdevil.xyz/bnfont?access=beta" role="button">Register on Beta Program</a>
        </div>
    </div>
    </div>
    
