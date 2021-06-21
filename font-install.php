<?php
/**
* Bangla Stylish Fonts for Wordpress
* @package           Bangla Stylish Font for Wordpress
* @author            Md Hasib Khan
* @copyright         2021 Md Hasib Khan
* @license           GPL-2.0-or-later
*/
?>
<div class="container">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>
  <script>
    $(document).ready(function() {
      $('#myselector').change(function(){
        $('.statecontent').hide();
        $('#' + $(this).val()).show();
      }
                             );
    }
                     );
  </script>
  <form action="<?php echo admin_url( "admin.php?page=".$_GET["page"] ); ?>" method="post">
    <div class="title">Bangla Stylish Fonts
    </div>
    <div> Version 
      <?php echo pluginVersion;?> 
    </div>
    <?php
global $wpdb;  
$font= $_POST['myselector'];
if (!empty($font)){
$table_name = $wpdb->prefix . 'bnfont';   
$results = $wpdb->get_results( "SELECT font FROM wp_bnfont"); 
if  (!empty($results)) {
$wpdb->query("UPDATE $table_name SET font = '$font'");
echo '<div class="alert alert-success" role="alert" 
style="margin-top:20px">"'.$font.'" font has been successfully installed on your Website.</div>';
} else {
$wpdb->query("INSERT INTO $table_name (font) VALUES ('$font')");
echo '<div class="alert alert-success" role="alert" 
style="margin-top:20px">"'.$font.'" font has been successfully installed on your Website.</div>';
}
} 
else {
echo '<div class="form-group">
<br>
<select class="form-control" name="myselector" id="myselector" style="font-size:16px">
<option value="none">Select a font...</option>
<option value="Kalpurush">Kalpurush</option>
<option value="Bornoporichay">Bornoporichay</option>
<option value="SiyamRupali">Siyam Rupali</option>
<option value="HindSiliguri">Hind Siliguri</option>
<option value="SolaimanLipi">Solaiman Lipi</option>
<option value="KalpanaUnicode">Kalpana Unicode</option>
<option value="BalooDa"> Baloo Da </option>
<option value="LipishreeUnicode">Lipishree Unicode</option>
<option value="FazlaySejutiUnicode">Fazlay Sejuti Unicode</option>
<option value="ChandrabatiOMJ">Chandrabati OMJ</option>
</select>
</div>';
}
?>
    <!--None Font-->
    <div id="none" class="statecontent">
      <?php
$results = $wpdb->get_results( "SELECT font FROM wp_bnfont");
if(!empty($results))  {
foreach($results as $row){  
define('installedfont', $row->font );
echo '<div class="card-group">
<div class="card">
<img src="'.plugins_url(pluginDomain."/assets/background.png").'" width="100%" style="object-fit:cover!important">
</div>
<div class="card">
<div class="card-body">
<h4 class="card-title">Install Bangla Font</h4>
<p class="card-text">Select the font from dropdown font and click "Install Font" to add font in your website. </p>
<span class="part">Developed By:</span> <a style="text-decoration:none;" href="https://fb.me/hasib.unique">Md Hasib Khan</a>
<div class="installedfont"><span class="part">Currenly Installed Font: </span>'.installedfont.'<br></div>
<a class="btn btn-primary" target="_blank"href="'.get_home_url().'" role="button">Go to Homepage</a>
<a class="btn btn-primary" href="'.admin_url("admin.php?page=font-settings").'" role="button">About Plugin</a>
</div>
</div>
</div>';
}
}
else {
echo'
<div class="installedfont">You haven\'t installed any Bangla Font Yet!  Select a font to install it.</div>';
}
?>
    </div>
    <!--Kalpurush Font-->
    <div id="Kalpurush" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> Kalpurush 
        <br>
        <span class="part"> Developer:
        </span> Tanbin Islam Siyam (Avro Project) 
        <br>
        <span class="part"> Official Website:
        </span> 
        <a href="https://www.omicronlab.com"> https://www.omicronlab.com 
        </a> 
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:Kalpurush">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:Kalpurush;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
    <!--SolaimanLipi Font-->
    <div id="SolaimanLipi" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> SolaimanLipi 
        <br>
        <span class="part"> Developer:
        </span> Solaiman Karim (Distributed by Altruists International) 
        <br>
        <span class="part"> Official Website:
        </span> 
        <a href="http://ekushey.org/"> http://ekushey.org 
        </a> 
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:SolaimanLipi">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:SolaimanLipi;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
    <!--ChandrabatiOMJ Font-->
    <div id="ChandrabatiOMJ" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> ChandrabatiOMJ 
        <br>
        <span class="part"> Developer:
        </span> Mustafa Jabbar, Ananda Computers 
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:ChandrabatiOMJ">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:ChandrabatiOMJ;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
    <!--LipishreeUnicode Font-->
    <div id="LipishreeUnicode" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> LipishreeUnicode 
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:LipishreeUnicode">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:LipishreeUnicode;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
    <!--KalpanaUnicode Font-->
    <div id="KalpanaUnicode" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> Kalpana Unicode 
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:KalpanaUnicode">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:KalpanaUnicode;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
    <!--FazlaySejutiUnicode Font-->
    <div id="FazlaySejutiUnicode" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> Fazlay Sejuti Unicode 
        <br>
        <span class="part"> Developer:
        </span> Ahmed Fazlay Rabbi
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:FazlaySejutiUnicode">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:FazlaySejutiUnicode;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
    <!--Bornoporichay Font-->
    <div id="Bornoporichay" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> Bornoporichay 
        <br>
        <span class="part"> Developer:
        </span>  Subhadip Roy
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:Bornoporichay">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:Bornoporichay;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
 <!--SiyamRupali Font-->
 <div id="SiyamRupali" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> SiyamRupali 
        <br>
        <span class="part"> Developer:
        </span> Tanbin Islam Siyam (Avro Project) 
        <br>
        <span class="part"> Official Website:
        </span> 
        <a href="https://www.omicronlab.com"> https://www.omicronlab.com 
        </a> 
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:SiyamRupali">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:SiyamRupali;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
     <!--HindSiliguri Font-->
 <div id="HindSiliguri" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> HindSiliguri 
        <br>
        <span class="part"> Developer:
        </span> Indian Type Foundry
        <br>
        <span class="part"> Official Website:
        </span> 
        <a href="http://www.indiantypefoundry.com/"> http://www.indiantypefoundry.com/ 
        </a> 
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:HindSiliguri">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:HindSiliguri;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>
     <!--BalooDa Font-->
 <div id="BalooDa" class="statecontent" style="display:none">
      <link href="<?php echo plugins_url(pluginDomain.'/fonts/stylesheet.css')?>" rel="stylesheet">
      <div class="section-title">
        Font Details:
      </div>
      <div class="section-description">
        <span class="part">Font Name:
        </span> BalooDa 
        <br>
        <span class="part"> Developer:
        </span> Ek Type
        <br>
        <span class="part"> Official Website:
        </span> 
        <a href="https://github.com/EkType/"> https://github.com/EkType/ 
        </a> 
        <br>
      </div>
      <div class="section-title">
        Font Preview:
      </div>
      <div class="font-preview" style="font-family:BalooDa">
        আমার সোনার বাংলা, আমি তোমায় ভালোবাসি 
      </div>
      <div class="section-title">
        Test Font Preview:
      </div>
      <div class="form-group">
        <input type="text" aria-describedby="helpId" class="form-control" style="width:80%;font-family:BalooDa;font-size:23px" placeholder="এখানে লিখে দেখুন....">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Install Font
      </button>
    </div>

  </form>
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
    Bangla Stylish Font; Developed By 
    <a style="text-decoration:none;" href="https://fb.me/hasib.unique">Md Hasib Khan
    </a>
    <p>Wordpress Version 
      <?php echo $wp_version; ?> (PHP 
      <?php echo $php_version;?>) 
    </p>   
  </div> 
