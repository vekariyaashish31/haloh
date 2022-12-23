<?php

$extension_name = "DevmanExtensions - Download center";
$api_url = defined('DEVMAN_SERVER_TEST') ? DEVMAN_SERVER_TEST : 'https://devmanextensions.com/';

$extension_name = '<a href="https://devmanextensions.com/" target="_blank"><img src="'. $api_url . 'opencart_admin/common/img/devman_face.png"> DevmanExtensions</a> - Download center';

// Heading
$_['heading_title']    = $extension_name;
$_['heading_title_2']    = 'DevmanExtensions - Download center';

//Generals
$_['text_module']  		= 'Modules';
$_['button_save']      		= 'Save';
$_['button_cancel']      	= 'Cancel';
$_['status']				= 'Status';
$_['active']				= 'Enabled';
$_['disabled']				= 'Disabled';
$_['text_success']			= 'Success: You have modified module '.$extension_name.'!';
$_['error_permission']    	= 'Warning: You do not have permission to modify module '.$extension_name.'!';
$_['apply_changes'] 		= 'Apply changes';
$_['text_image_manager']     = 'Image Manager';
$_['text_browse']            = 'Browse';
$_['text_clear']             = 'Clear';
$_['text_none_user'] = ' - None User - ';
$_['text_validate_license'] = 'Download center';
$_['text_license_id'] = 'Enter your order ID';
$_['text_email'] = 'Enter your email';
$_['text_download_identifier_recover'] = '<a class="download_identifier_recover" target="_new" href="https://devmanextensions.com/download-center-recover">I don\'t know my Download Identifier</a>';
$_['text_send'] = 'Send';
$_['choose_store'] = 'Choose store';

$_['text_license_info'] = '<h3>Where I can find Order ID (License ID)?</h3>
<p>After your purchase, you would have to receive all information about your license to email that you used for purchase license, check your <b>SPAM folder</b>.</p>
<br>
<p>Depends where your purchased license, the Order ID will be different:</p>
<ul>
<li>Purchased license in <a href="https://devmanextensions.com/extensions-shop" target="_blank">Devman Store</a>: <b>MLXXXXXX</b></li>
<li>Purchased license in Opencart marketplace: <b>XXXXXX</b> ("XXXXXX" is a numeric value).</li>
<li>Purchased license in Opencartforum: <b>of-XXXXXX</b> ("XXXXXX" is a numeric value).</li>
<li>Purchased license in IsenseLabs: <b>isenselabs-XXXXXX</b> ("XXXXXX" is a numeric value).</li>
</ul>
';
$_['curl_error'] = '<b>CURL ERROR NUMBER: %s</b><br><br>
<p>Your server didn\'t allow connect with our API for validate the license.</p>
<p><b>Put in contact with your hosting support team</b>, they have to solve this external problem.</p>
<p>This extensions is doing a simple CURL call to domain https://devmanextensions.com (185.70.92.53).</p>';

?>