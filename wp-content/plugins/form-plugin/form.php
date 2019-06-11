<?php
/*
Plugin Name: Contact - Zdrojowa Invest&Hotels
Plugin URI: http://forntendhero.pl
Description: plugin automate add custom contact form by shortcode
Version: 1.0
Author: SG
Author URI: http://forntendhero.pl
License: Free
*/
if (!defined('FORM_KONTAKT_DIR'))
    define('FORM_KONTAKT_DIR', ABSPATH . 'wp-content/themes/' . get_template());

if (!defined('FORM_KONTAKT_NAME'))
    define('FORM_KONTAKT_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));

if (!defined('FORM_KONTAKT_DIR'))
    define('FORM_KONTAKT_DIR', WP_PLUGIN_DIR . '/' . FORM_KONTAKT_NAME);

if (!defined('FORM_KONTAKT_URL'))
    define('FORM_KONTAKT_URL', WP_PLUGIN_URL . '/' . FORM_KONTAKT_NAME);



add_shortcode('form-kontakt', 'form_kontakt');
function form_kontakt($atts) {
    global $deliveryemail;
    $email = $deliveryemail;
    

	$content = '	<form id="icontactform" name="icontact" method="post" action="'.FORM_KONTAKT_URL.'/sendmail.php" enctype="multipart/form-data">
		
		<div class="form-group">
		<label for="name" id="namelabel">Name:</label>
		<input class="form-control" type="text" name="name" id="name" class="textinput">
		</div>
		
		<div class="form-group">
		<label for="surname" id="namelabel">Nazwisko:</label>
		<input class="form-control" type="text" name="surname" id="surname" class="textinput">
		</div>
		
		<div class="form-group">
		<label for="email" id="emailabel">E-mail:</label>
		<input class="form-control" type="email" name="email" id="email" class="textinput" required>
		</div>
		
		<div class="form-group">
		<label for="message" id="msglabel">Wiadomość:</label>
		<textarea class="form-control" name="message" id="message" class="msgtextarea" required></textarea>
		</div>
		
		
		<div class="form-group">
		<input type="submit" name="submitlink" id="submitlink" class="btn btn-info" value="Wyślij">
		</div>
	</form>
';
	
	return $content;
}



?>