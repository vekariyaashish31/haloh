<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Настройки';
$_['tab_order_status']              = 'Статус на поръчките';

// Text
$_['text_extension']                = 'Разширения';
$_['text_success']                  = 'Успех: Вие сте променили платежния модул на CardConnect!';
$_['text_edit']                     = 'Редактиране на CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'плащане';
$_['text_authorize']                = 'Упълномощаване';
$_['text_live']                     = 'на живо';
$_['text_test']                     = 'Тест';
$_['text_no_cron_time']             = 'Cron все още не е изпълнена';
$_['text_payment_info']             = 'Информация за плащане';
$_['text_payment_method']           = 'Начин на плащане';
$_['text_card']                     = 'карта';
$_['text_echeck']                   = 'Echeck';
$_['text_reference']                = 'препратка';
$_['text_update']                   = 'Актуализация';
$_['text_order_total']              = 'Обща стойност на поръчката';
$_['text_total_captured']           = 'Общо заловени';
$_['text_capture_payment']          = 'Заснемане на плащането';
$_['text_refund_payment']           = 'Възстановяване на суми';
$_['text_void']                     = 'празнота';
$_['text_transactions']             = 'Сделки';
$_['text_column_type']              = 'Тип';
$_['text_column_reference']         = 'препратка';
$_['text_column_amount']            = 'Количество';
$_['text_column_status']            = 'Статус';
$_['text_column_date_modified']     = 'Дата промяна';
$_['text_column_date_added']        = 'датата е добавена';
$_['text_column_update']            = 'Актуализация';
$_['text_column_void']              = 'празнота';
$_['text_confirm_capture']          = 'Наистина ли искате да уловите плащането?';
$_['text_confirm_refund']           = 'Наистина ли искате да възстановите плащането?';
$_['text_inquire_success']          = 'Запитването беше успешно';
$_['text_capture_success']          = 'Заявката за улавяне бе успешна';
$_['text_refund_success']           = 'Искането за възстановяване на средства бе успешно';
$_['text_void_success']             = 'Невалидното искане бе успешно';

// Entry
$_['entry_merchant_id']             = 'Идент. № на търговеца';
$_['entry_api_username']            = 'API потребителско име';
$_['entry_api_password']            = 'API парола';
$_['entry_token']                   = 'Таен символ';
$_['entry_transaction']             = 'транзакция';
$_['entry_environment']             = 'Заобикаляща среда';
$_['entry_site']                    = 'място';
$_['entry_store_cards']             = 'Магазини карти';
$_['entry_echeck']                  = 'Echeck';
$_['entry_total']                   = 'Обща сума';
$_['entry_geo_zone']                = 'Гео Зона';
$_['entry_status']                  = 'Статус';
$_['entry_logging']                 = 'Отстраняване на грешки';
$_['entry_sort_order']              = 'Сортиране на поръчката';
$_['entry_cron_url']                = 'URL адрес на Cron Job';
$_['entry_cron_time']               = 'Последната работа на Cron';
$_['entry_order_status_pending']    = 'в очакване на';
$_['entry_order_status_processing'] = 'обработване';

// Help
$_['help_merchant_id']              = 'Вашият личен идентификационен номер на търговец на сметка CardConnect.';
$_['help_api_username']             = 'Вашето потребителско име за достъп до приложния програмен интерфейс (API) на CardConnect.';
$_['help_api_password']             = 'Паролата ви за достъп до приложния програмен интерфейс (API) на CardConnect.';
$_['help_token']                    = 'Въведете произволно означение за сигурност или използвайте създаденото.';
$_['help_transaction']              = 'Изберете \'Плащане \', за да уловите плащането незабавно или \ "Упълномощаване \", за да го одобрите.';
$_['help_site']                     = 'Това определя първата част на URL адреса на приложния програмен интерфейс (API). Променете, само ако сте инструктирани.';
$_['help_store_cards']              = 'Независимо дали искате да съхранявате карти с помощта на токенизация.';
$_['help_echeck']                   = 'Независимо дали искате да предложите възможност да платите чрез eCheck.';
$_['help_total']                    = 'Общата сума на поръчката трябва да бъде достигната, преди този начин на плащане да стане активен. Трябва да е стойност без знак за валута.';
$_['help_logging']                  = 'Активирането на отстраняването на грешки ще напише чувствителни данни в лог файл. Винаги трябва да деактивирате, освен ако не сте инструктирали друго.';
$_['help_cron_url']                 = 'Задайте задание cron, за да се обадите на този URL адрес, така че поръчките да се актуализират автоматично. Той е проектиран да се изпълнява няколко часа след последното заснемане на един работен ден.';
$_['help_cron_time']                = 'Това е последният път, когато е изпълнен URL адресът на заданието cron.';
$_['help_order_status_pending']     = 'Състояние на поръчката, когато поръчката трябва да бъде разрешена от търговеца.';
$_['help_order_status_processing']  = 'Състоянието на поръчката при автоматично заснемане на поръчката.';

// Button
$_['button_inquire_all']            = 'Запитване за всичко';
$_['button_capture']                = 'Улавяне';
$_['button_refund']                 = 'Възстановяване';
$_['button_void_all']               = 'Невалидни Всички';
$_['button_inquire']                = 'запитвам';
$_['button_void']                   = 'празнота';

// Error
$_['error_permission']              = 'Предупреждение: Нямате разрешение да променяте плащането на CardConnect!';
$_['error_merchant_id']             = 'Изисква се идентификационен номер на търговец!';
$_['error_api_username']            = 'Изисквано потребителско име за API!';
$_['error_api_password']            = 'Изисква се парола за API!';
$_['error_token']                   = 'Необходимо е тайно означение!';
$_['error_site']                    = 'Необходим сайт!';
$_['error_amount_zero']             = 'Сумата трябва да бъде по-висока от нула!';
$_['error_no_order']                = 'Няма съответстваща поръчка info!';
$_['error_invalid_response']        = 'Получен е невалиден отговор!';
$_['error_data_missing']            = 'Липсващи данни!';
$_['error_not_enabled']             = 'Модулът не е активиран!';