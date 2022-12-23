<?php
$extension_name = "Options Combinations";
$extension_name_image = '<a href="https://devmanextensions.com/" target="_blank"><img src="https://devmanextensions.com/opencart_admin/common/img/devman_face.png"> DevmanExtensions.com</a> - '.$extension_name;

$_['extension_version'] = '2.4.7';

// Heading
$_['heading_title']    = $extension_name_image.' (V.'.$_['extension_version'].')';
$_['heading_title_2']  = $extension_name;

// Button
$_['button_combined_options']       = 'Show options combinations';
$_['button_show_combined_option']   = 'Show option combination';

// Text
$_['text_buttom'] = 'Options Combinations';
$_['text_data'] = 'Data';
$_['text_discounts'] = 'Discounts';
$_['text_specials'] = 'Specials';
$_['text_images'] = 'Images';
$_['text_points'] = 'Points';
$_['text_reward_points'] = 'Reward Points';
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

// Error
$_['curl_error'] = '<b>CURL ERROR NUMBER: %s</b><br><br>
<p>Your server didn\'t allow connect with our API for validate the license.</p>
<p><b>Put in contact with your hosting support team</b>, they have to solve this external problem.</p>
<p>This extensions is doing a simple CURL call to domain https://devmanextensions.com (185.70.92.53).</p>';
