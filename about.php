<?php
/**
 * Bangla Stylish Font
 * @package           Bangla Stylish Font
 * @author            Md Hasib Khan
 * @copyright         2021 Md Hasib Khan
 * @license           GPL-2.0-or-later
 */
$res = file_get_contents('https://webdevil.xyz/bnfont/version.json');
$res = json_decode($res);
?>
<div class="container">
    
<div class="title">About Bangla Stylish Fonts</div>
<div> Version <?php echo pluginVersion;?> </div>
<br>
<div class="card-group">
    <div class="card">
        <img src="<?php echo plugins_url(pluginDomain.'/assets/background.png')?>" width="100%" style="object-fit:cover!important">
    </div>
    <div class="card">
    <div class="card-body">
            <h4 class="card-title">Bangla Stylish Font Plugin</h4>
            <p class="card-text">This plugin allows you to use various bangla stylish font easily in your wordpress website without any coding knowledge. Very easy to setup and user-friendly. </p>
            <span class="part">Version: </span> <?php echo pluginVersion.' '; 
            if (($res->version)==pluginVersion){
                echo '<div style="color:green; display:inline-block">(Latest Version)</div>';
            } else {
                echo '<div style="color:red; display:inline-block">(Update Required)</div>';
            }
            ?>
            <br>
            <span class="part">Developed By:</span> <a style="text-decoration:none;" href="https://fb.me/hasib.unique">Md Hasib Khan</a>
           <br>
           <span class="part">Release Date: </span> <?php echo $res->releasedate;?></a>
           <br>
           <br>
            <a class="btn btn-primary" href="https://webdevil.xyz/bnfont" role="button">Visit our Website</a>
        </div>
    </div>
    </div>
    <br>
<h4>Speically Thanks to-</h4>
<div class="card-group">
    <div class="card">
        <img src="<?php echo plugins_url(pluginDomain.'/assets/bootstrap.png')?>" width="80px">
        <div class="card-body">
            <h4 class="card-title">Bootstrap </h4>
            <p class="card-text">Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development.</p>
            <a class="btn btn-primary" href="https://getbootstrap.com" role="button">Visit Website</a>
        </div>
    </div>
    <div class="card">
    <img src="<?php echo plugins_url(pluginDomain.'/assets/jquery.png')?>" width="130px">
        
        <div class="card-body">
            <h4 class="card-title">jQuery</h4>
            <p class="card-text">jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax. </p>
            <a class="btn btn-primary" href="https://jquery.com/" role="button">Visit Website</a>
        </div>
    </div>
    <div class="card">
    <img src="<?php echo plugins_url(pluginDomain.'/assets/omicronLab.png')?>" width="230px" style="margin:10px 10px 20px 10px">
        <div class="card-body">
            <h4 class="card-title">OmicronLab</h4>
            <p class="card-text">OmicronLab is founded by Mehdi Hasan Khan. This well-knowned IT Company contributed a lot of bangla font.</p>
            <a class="btn btn-primary" href="#" role="button">Visit Website</a>
        </div>
    </div>
</div>
<div class="card-group">
<div class="card">
    <img src="<?php echo plugins_url(pluginDomain.'/assets/logo.png')?>" width="100px">
        <div class="card-body">
            <h4 class="card-title">Bangla Font Developers</h4>
            <p class="card-text">We are really grateful to our bangla font contibutor who have developed a lot of amazing bangla fonts. Thanks again to them</p>
            <a class="btn btn-primary" href="https://www.google.com/search?q=bangla+font" role="button">Serach Bangla Font</a>
        </div>
    </div>

<div class="card">
    <img src="<?php echo plugins_url(pluginDomain.'/assets/wordpress.png')?>" width="80px">
        <div class="card-body">
            <h4 class="card-title">Wordpress</h4>
            <p class="card-text">WordPress is a free and open-source content management system written in PHP and paired with a MySQL or MariaDB database. </p>
            <a class="btn btn-primary" href="https://wordpress.org/download/" role="button">Visit Website</a>
        </div>
    </div>
    </div>
    <br>
<br>
<!--Footer-->
<?php
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
 ?>  
<div class="bn-font-footer">
    Bangla Stylish Font; Developed By <a style="text-decoration:none;" href="https://fb.me/hasib.unique">Md Hasib Khan</a>
    <p>Wordpress Version <?php echo $wp_version; ?> (PHP <?php echo $php_version;?>) </p>   
</div> 



    