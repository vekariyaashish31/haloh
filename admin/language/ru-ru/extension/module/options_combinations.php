<?php
$extension_name = "Комбинации Опций";
$extension_name_image = '<a href="https://devmanextensions.com/" target="_blank"><img src="https://devmanextensions.com/opencart_admin/common/img/devman_face.png"> DevmanExtensions.com</a> - '.$extension_name;

$_['extension_version'] = '2.4.7';

// Heading
$_['heading_title']    = $extension_name_image.' (V.'.$_['extension_version'].')';
$_['heading_title_2']  = $extension_name;

// Button
$_['button_combined_options']       = 'Показать комбинации опций';
$_['button_show_combined_option']   = 'Показать комбинацию опции';

// Text
$_['text_buttom'] = 'Комбинации Опций';
$_['text_data'] = 'Данные';
$_['text_discounts'] = 'Скидки';
$_['text_specials'] = 'Специальные';
$_['text_images'] = 'Изображений';
$_['text_points'] = 'очки';
$_['text_reward_points'] = 'Бонусные очки';
$_['text_license_info'] = '<h3>Где можно найти ID заказа (ID лицензии)?</h3>
<p>После оформления заказа, Вы получите полную информацию о лицензии на электронную почту, которая использовалась при оформлении заказа. Обязательно проверьте <b>папку SPAMr</b>.</p>
<br>
<p>В зависимости от того, где вы приобрели лицензию, идентификатор заказа будет отличаться:</p>
<ul>
<li>Лицензия из магазина <a href="https://devmanextensions.com/extensions-shop" target="_blank">Devman Store</a>: <b>MLXXXXXX</b></li>
<li>Лицензия из магазина Opencart: <b>XXXXXX</b> ("XXXXXX" числовое значение).</li>
<li>Лицензия из магазина Opencartforum: <b>of-XXXXXX</b> ("XXXXXX" числовое значение).</li>
<li>Лицензия из магазина IsenseLabs: <b>isenselabs-XXXXXX</b> ("XXXXXX" числовое значение).</li>
</ul>
';

// Error
$_['curl_error'] = '<b>Ошибка CURL: %s</b><br><br>
<p>Соединение между Вашим сервером и сервером для проверки лицензии не было установлено.</p>
<p><b>Свяжитесь со службой поддержки Вашего хостинга</b>, они смогут помочь в решении этой проблемы.</p>
<p>Это расширение создает простой запрос CURL для домена https://devmanextensions.com (185.70.92.53).</p>';