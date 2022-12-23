<?php
// Text
$_['text_title']				= 'Кална фактура - Платете в рамките на 14 дни';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Фактурата на Кларна изисква допълнителна информация, преди да може да обработва поръчката ви.';
$_['text_male']					= 'Мъжки';
$_['text_female']				= 'Женски пол';
$_['text_year']					= 'година';
$_['text_month']				= 'месец';
$_['text_day']					= 'ден';
$_['text_comment']				= 'Идентификацията на Klarna: %s.' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'пол';
$_['entry_pno']					= 'Персонален номер';
$_['entry_dob']					= 'Дата на раждане';
$_['entry_phone_no']			= 'Телефонен номер';
$_['entry_street']				= 'улица';
$_['entry_house_no']			= 'Къща №';
$_['entry_house_ext']			= 'Къща Екстра.';
$_['entry_company']				= 'Регистрационен номер на компанията';

// Help
$_['help_pno']					= 'Моля, въведете тук номера на социалното осигуряване.';
$_['help_phone_no']				= 'Моля, въведете телефонния си номер.';
$_['help_street']				= 'Моля, обърнете внимание, че доставката може да се извърши само на регистрирания адрес, когато плащате с Klarna.';
$_['help_house_no']				= 'Моля, въведете номера на къщата си.';
$_['help_house_ext']			= 'Моля, изпратете тук разширението на къщата си. Например A, B, C, Red, Blue и др.';
$_['help_company']				= 'Моля, въведете регистрационния номер на фирмата си';

// Error
$_['error_deu_terms']			= 'Трябва да се съгласите с декларацията за поверителност на Klarna (Datenschutz)';
$_['error_address_match']		= 'Адресите за фактуриране и доставка трябва да съответстват, ако искате да използвате фактура "Кларна"';
$_['error_network']				= 'При свързването с Klarna възникна грешка. Моля, опитайте отново по-късно.';