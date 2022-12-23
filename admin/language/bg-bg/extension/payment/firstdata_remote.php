<?php
// Heading
$_['heading_title']					 = 'API за първа информация на EMEA за уеб услуги';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Разширения';
$_['text_success']					 = 'Успех: Вие сте променили данните на First Data!';
$_['text_edit']                      = 'Редактиране на първи данни API за уеб услуга на EMEA';
$_['text_card_type']				 = 'Вид на карта';
$_['text_enabled']					 = 'Enabled';
$_['text_merchant_id']				 = 'ID на магазина';
$_['text_subaccount']				 = 'подсметка';
$_['text_user_id']					 = 'Идент. № на потребителя';
$_['text_capture_ok']				 = 'Улавянето бе успешно';
$_['text_capture_ok_order']			 = 'Заснемането бе успешно, статусът на поръчката бе актуализиран до успешен - уреден';
$_['text_refund_ok']				 = 'Възстановяването бе успешно';
$_['text_refund_ok_order']			 = 'Възстановяването е успешно, състоянието на поръчката е актуализирано, за да бъде възстановено';
$_['text_void_ok']					 = 'Void е успешно, статусът на поръчката е актуализиран';
$_['text_settle_auto']				 = 'продажба';
$_['text_settle_delayed']			 = 'Pre auth';
$_['text_mastercard']				 = 'Мастъркард';
$_['text_visa']						 = 'виза';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'Американ Експрес';
$_['text_maestro']					 = 'маестро';
$_['text_payment_info']				 = 'Информация за плащане';
$_['text_capture_status']			 = 'Заплатено плащане';
$_['text_void_status']				 = 'Плащането е анулирано';
$_['text_refund_status']			 = 'Плащането е възстановено';
$_['text_order_ref']				 = 'Поръчайте реф';
$_['text_order_total']				 = 'Общо разрешени';
$_['text_total_captured']			 = 'Общо заловени';
$_['text_transactions']				 = 'Сделки';
$_['text_column_amount']			 = 'Количество';
$_['text_column_type']				 = 'Тип';
$_['text_column_date_added']		 = 'Създаден';
$_['text_confirm_void']				 = 'Наистина ли искате да анулирате плащането?';
$_['text_confirm_capture']			 = 'Наистина ли искате да уловите плащането?';
$_['text_confirm_refund']			 = 'Наистина ли искате да възстановите плащането?';

// Entry
$_['entry_certificate_path']		 = 'Път на сертификата';
$_['entry_certificate_key_path']	 = 'Частен път на ключовете';
$_['entry_certificate_key_pw']		 = 'Парола за частен ключ';
$_['entry_certificate_ca_path']		 = 'CA път';
$_['entry_merchant_id']				 = 'ID на магазина';
$_['entry_user_id']					 = 'Идент. № на потребителя';
$_['entry_password']				 = 'парола';
$_['entry_total']					 = 'Обща сума';
$_['entry_sort_order']				 = 'Sort order';
$_['entry_geo_zone']				 = 'Гео зоната';
$_['entry_status']					 = 'Статус';
$_['entry_debug']					 = 'Отчитане на грешки';
$_['entry_auto_settle']				 = 'Тип сетълмент';
$_['entry_status_success_settled']	 = 'Успешен - уреден';
$_['entry_status_success_unsettled'] = 'Успехът не е уреден';
$_['entry_status_decline']			 = 'упадък';
$_['entry_status_void']				 = 'анулира';
$_['entry_status_refund']			 = 'Възстановени';
$_['entry_enable_card_store']		 = 'Активирайте означенията за съхранение на карти';
$_['entry_cards_accepted']			 = 'Типовете карти са приети';

// Help
$_['help_total']					 = 'Общата сума на поръчката трябва да бъде достигната преди извършването на този начин на плащане';
$_['help_certificate']				 = 'Сертификатите и частните ключове трябва да се съхраняват извън публичните уеб папки';
$_['help_card_select']				 = 'Помолете потребителя да избере типа на картата, преди да бъде пренасочен';
$_['help_notification']				 = 'Трябва да предоставите този URL адрес на First Data, за да получавате известия за плащане';
$_['help_debug']					 = 'Активирането на отстраняването на грешки ще напише чувствителни данни в лог файл. Винаги трябва да деактивирате, освен ако не сте инструктирали друго.';
$_['help_settle']					 = 'Ако използвате pre-auth, трябва да извършите действие след писане в рамките на 3-5 дни, в противен случай транзакцията ви ще бъде преустановена';

// Tab
$_['tab_account']					 = 'Информация за API';
$_['tab_order_status']				 = 'Статус на поръчката';
$_['tab_payment']					 = 'Настройки за плащане';

// Button
$_['button_capture']				 = 'Улавяне';
$_['button_refund']					 = 'Възстановяване';
$_['button_void']					 = 'празнота';

// Error
$_['error_merchant_id']				 = 'Изисква се идентификационен номер на магазина';
$_['error_user_id']					 = 'Изисква се потребителски идентификационен номер';
$_['error_password']				 = 'изисква се парола';
$_['error_certificate']				 = 'Пътят на сертификата е задължителен';
$_['error_key']						 = 'Изисква се ключ на сертификата';
$_['error_key_pw']					 = 'Изисква се парола за ключ за сертификат';
$_['error_ca']						 = 'Изисква се сертификационен орган (CA)';