<?php
// Heading
$_['heading_title']				= 'Плащане на eWAY';

// Text
$_['text_extension']			= 'Разширения';
$_['text_success']				= 'Успех: Променихте данните си за eWAY!';
$_['text_edit']					= 'Редактиране на eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'упълномощаване';
$_['text_sale']					= 'продажба';
$_['text_transparent']			= 'Прозрачно пренасочване (формуляр за плащане на място)';
$_['text_iframe']				= 'IFrame (формуляр за плащане в прозорец)';

// Entry
$_['entry_paymode']				= 'Режим на плащане';
$_['entry_test']				= 'Тестов режим';
$_['entry_order_status']		= 'Статус на поръчката';
$_['entry_order_status_refund'] = 'Възстановено състояние на поръчката';
$_['entry_order_status_auth']	= 'Оторизиран статус на поръчката';
$_['entry_order_status_fraud']	= 'Предполагаемо състояние на поръчката за измама';
$_['entry_status']				= 'Статус';
$_['entry_username']			= 'Клавиш API за eWAY';
$_['entry_password']			= 'eWAY парола';
$_['entry_payment_type']		= 'Вид плащане';
$_['entry_geo_zone']			= 'Гео Зона';
$_['entry_sort_order']			= 'Sort order';
$_['entry_transaction_method']	= 'Метод на транзакция';

// Error
$_['error_permission']			= 'Предупреждение: Нямате разрешение да променяте платежния модул eWAY';
$_['error_username']			= 'Необходим е ключ API за eWAY!';
$_['error_password']			= 'Необходима е eWAY парола!';
$_['error_payment_type']		= 'Необходим е поне един вид плащане!';

// Help hints
$_['help_testmode']				= 'Задайте Да, за да използвате Sandbox от eWAY.';
$_['help_username']				= 'Ключът API за eWAY от профила ви в MYeWAY.';
$_['help_password']				= 'Паролата за API на eWAY от профила ви в MYeWAY.';
$_['help_transaction_method']	= 'Оторизацията е достъпна само за австралийски банки';

// Order page - payment tab
$_['text_payment_info']			= 'Информация за плащане';
$_['text_order_total']			= 'Общо разрешени';
$_['text_transactions']			= 'Сделки';
$_['text_column_transactionid'] = 'Идентификационен номер на транзакция за eWAY';
$_['text_column_amount']		= 'Количество';
$_['text_column_type']			= 'Тип';
$_['text_column_created']		= 'Създаден';
$_['text_total_captured']		= 'Общо заловени';
$_['text_capture_status']		= 'Заплатено плащане';
$_['text_void_status']			= 'Плащането е анулирано';
$_['text_refund_status']		= 'Плащането е възстановено';
$_['text_total_refunded']		= 'Общата сума е възстановена';
$_['text_refund_success']		= 'Възстановяването бе успешно!';
$_['text_capture_success']		= 'Улавянето е успешно!';
$_['text_refund_failed']		= 'Неуспешно възстановяване:';
$_['text_capture_failed']		= 'Заснемането не бе успешно:';
$_['text_unknown_failure']		= 'Невалидна поръчка или сума';

$_['text_confirm_capture']		= 'Наистина ли искате да уловите плащането?';
$_['text_confirm_release']		= 'Наистина ли искате да освободите плащането?';
$_['text_confirm_refund']		= 'Наистина ли искате да възстановите плащането?';

$_['text_empty_refund']			= 'Моля, въведете сума, която да възстановите';
$_['text_empty_capture']		= 'Моля, въведете сума за улавяне';

$_['btn_refund']				= 'Възстановяване';
$_['btn_capture']				= 'Улавяне';

// Validation Error codes
$_['text_card_message_V6000']	= 'Неопределена грешка при валидацията';
$_['text_card_message_V6001'] 	= 'Невалиден IP адрес на клиент';
$_['text_card_message_V6002'] 	= 'Невалиден идентификационен номер на устройството';
$_['text_card_message_V6011'] 	= 'Невалидна сума';
$_['text_card_message_V6012'] 	= 'Невалидно описание на фактурата';
$_['text_card_message_V6013'] 	= 'Невалиден номер на фактурата';
$_['text_card_message_V6014'] 	= 'Невалидна справка за фактурите';
$_['text_card_message_V6015'] 	= 'Невалиден валутен код';
$_['text_card_message_V6016'] 	= 'изисква се плащане';
$_['text_card_message_V6017'] 	= 'Необходим е кода на валутната вноска';
$_['text_card_message_V6018'] 	= 'Неизвестен валутен код на плащане';
$_['text_card_message_V6021'] 	= 'Изисква се име на картодържателя';
$_['text_card_message_V6022'] 	= 'Изисква се номер на картата';
$_['text_card_message_V6023'] 	= 'CVN е задължително';
$_['text_card_message_V6031'] 	= 'Невалиден номер на картата';
$_['text_card_message_V6032'] 	= 'Невалидна CVN';
$_['text_card_message_V6033'] 	= 'Невалидна дата на изтичане';
$_['text_card_message_V6034'] 	= 'Невалиден номер на изданието';
$_['text_card_message_V6035'] 	= 'Невалидна начална дата';
$_['text_card_message_V6036'] 	= 'Невалиден месец';
$_['text_card_message_V6037'] 	= 'Невалидна година';
$_['text_card_message_V6040'] 	= 'Идентификационен номер на клиент с невалиден идентификационен номер';
$_['text_card_message_V6041'] 	= 'Изисква се клиент';
$_['text_card_message_V6042'] 	= 'Изисква се първо име на клиента';
$_['text_card_message_V6043'] 	= 'Изисква се фамилно име на клиента';
$_['text_card_message_V6044'] 	= 'Код на страната на клиента е задължителен';
$_['text_card_message_V6045'] 	= 'Задължително заглавие на клиента';
$_['text_card_message_V6046'] 	= 'Изисква се идентификационен номер на клиентски идент';
$_['text_card_message_V6047'] 	= 'RedirectURL Необходим';
$_['text_card_message_V6051'] 	= 'Невалидно първо име';
$_['text_card_message_V6052'] 	= 'Невалидно фамилно име';
$_['text_card_message_V6053'] 	= 'Невалиден код на държавата';
$_['text_card_message_V6054'] 	= 'Грешен имейл';
$_['text_card_message_V6055'] 	= 'Невалиден телефон';
$_['text_card_message_V6056'] 	= 'Невалиден мобилен телефон';
$_['text_card_message_V6057'] 	= 'Невалиден факс';
$_['text_card_message_V6058'] 	= 'Невалидно заглавие';
$_['text_card_message_V6059'] 	= 'URL адресът за пренасочване е невалиден';
$_['text_card_message_V6060'] 	= 'URL адресът за пренасочване е невалиден';
$_['text_card_message_V6061'] 	= 'Невалиден справочник';
$_['text_card_message_V6062'] 	= 'Невалидно име на фирмата';
$_['text_card_message_V6063'] 	= 'Невалидно описание на заданието';
$_['text_card_message_V6064'] 	= 'Невалидна улица1';
$_['text_card_message_V6065'] 	= 'Невалидна улица2';
$_['text_card_message_V6066'] 	= 'Невалиден град';
$_['text_card_message_V6067'] 	= 'Невалидна държава';
$_['text_card_message_V6068'] 	= 'Невалиден пощенски код';
$_['text_card_message_V6069'] 	= 'Грешен имейл';
$_['text_card_message_V6070'] 	= 'Невалиден телефон';
$_['text_card_message_V6071'] 	= 'Невалиден мобилен телефон';
$_['text_card_message_V6072'] 	= 'Невалидни коментари';
$_['text_card_message_V6073'] 	= 'Невалиден факс';
$_['text_card_message_V6074'] 	= 'Невалиден адрес';
$_['text_card_message_V6075'] 	= 'Невалидно име на адрес за доставка';
$_['text_card_message_V6076'] 	= 'Невалиден адрес на фамилията за доставка';
$_['text_card_message_V6077'] 	= 'Невалиден пощенски адрес Street1';
$_['text_card_message_V6078'] 	= 'Невалиден пощенски адрес Street2';
$_['text_card_message_V6079'] 	= 'Невалиден пощенски адрес на град';
$_['text_card_message_V6080'] 	= 'Невалидно състояние на адрес за доставка';
$_['text_card_message_V6081'] 	= 'Невалиден пощенски адрес';
$_['text_card_message_V6082'] 	= 'Невалиден имейл адрес на адрес за доставка';
$_['text_card_message_V6083'] 	= 'Невалиден телефонен адрес за доставка';
$_['text_card_message_V6084'] 	= 'Невалидна държава с адрес за доставка';
$_['text_card_message_V6091'] 	= 'Неизвестен код на държавата';
$_['text_card_message_V6100'] 	= 'Невалидно име на картата';
$_['text_card_message_V6101'] 	= 'Невалиден месец на изтичане на картата';
$_['text_card_message_V6102'] 	= 'Невалидна година на изтичане на картата';
$_['text_card_message_V6103'] 	= 'Невалиден месец на стартиране на картата';
$_['text_card_message_V6104'] 	= 'Невалидна година на стартиране на картата';
$_['text_card_message_V6105'] 	= 'Невалиден номер на издаване на карта';
$_['text_card_message_V6106'] 	= 'Невалидна CVN карта';
$_['text_card_message_V6107'] 	= 'Невалиден код за достъп';
$_['text_card_message_V6108'] 	= 'Невалиден адрес на клиент';
$_['text_card_message_V6109'] 	= 'Невалиден UserAgent';
$_['text_card_message_V6110'] 	= 'Невалиден номер на картата';
$_['text_card_message_V6111'] 	= 'Неупълномощен достъп до приложния програмен интерфейс (API), профил, който не е сертифициран с PCI';
$_['text_card_message_V6112'] 	= 'Излишни данни за картата, различни от година и месец на изтичане';
$_['text_card_message_V6113'] 	= 'Невалидна транзакция за възстановяване';
$_['text_card_message_V6114'] 	= 'Грешка при потвърждаване на порта';
$_['text_card_message_V6115'] 	= 'Невалиден DirectRefundRequest, ID транзакция';
$_['text_card_message_V6116'] 	= 'Невалидни данни за картата на оригиналния идентификационен номер на транзакция';
$_['text_card_message_V6124'] 	= 'Невалидни договорени покупки. Договорените покупки са предоставени, но сумите не съвпадат с полето TotalAmount';
$_['text_card_message_V6125'] 	= 'Избраният тип плащане не е активиран';
$_['text_card_message_V6126'] 	= 'Невалиден шифрован номер на картата, декриптирането не бе успешно';
$_['text_card_message_V6127'] 	= 'Невалиден криптиран cvn, декриптирането не бе успешно';
$_['text_card_message_V6128'] 	= 'Невалиден метод за плащане тип';
$_['text_card_message_V6129'] 	= 'Транзакцията не е разрешена за заснемане /анулиране';
$_['text_card_message_V6130'] 	= 'Генерична грешка в информацията за клиента';
$_['text_card_message_V6131'] 	= 'Генерична грешка при изпращането на информация';
$_['text_card_message_V6132'] 	= 'Транзакцията вече е завършена или анулирана, операцията не е разрешена';
$_['text_card_message_V6133'] 	= 'Поръчка за плащане не е налице за типа плащане';
$_['text_card_message_V6134'] 	= 'Невалиден идентификационен номер на транзакция от Auth за Capture /Void';
$_['text_card_message_V6135'] 	= 'PayPal възстановяване на грешки при обработката';
$_['text_card_message_V6140'] 	= 'Профилът на търговеца е спрян';
$_['text_card_message_V6141'] 	= 'Невалидни подробности за профила в PayPal или подпис на API';
$_['text_card_message_V6142'] 	= 'Упълномощаване не е налице за банка /клон';
$_['text_card_message_V6150'] 	= 'Невалидна сума за възстановяване';
$_['text_card_message_V6151'] 	= 'Сумата на възстановяването е по-голяма от първоначалната';
$_['text_card_message_D4406'] 	= 'Неизвестна грешка';
$_['text_card_message_S5010'] 	= 'Неизвестна грешка';