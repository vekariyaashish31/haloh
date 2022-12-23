<?php
// Text
$_['text_title']				= 'ბარათის ინვოისი - გადაიხადეთ 14 დღის განმავლობაში';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna ინვოისი მოითხოვს დამატებით ინფორმაციას, სანამ მათ შეუძლიათ შეკვეთის პროცედურა.';
$_['text_male']					= 'მამაკაცი';
$_['text_female']				= 'ქალი';
$_['text_year']					= 'წელი';
$_['text_month']				= 'თვე';
$_['text_day']					= 'დღეს';
$_['text_comment']				= 'კლარას ინვოისის ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'გენდერი';
$_['entry_pno']					= 'პირადი ნომერი';
$_['entry_dob']					= 'დაბადების თარიღი';
$_['entry_phone_no']			= 'ტელეფონის ნომერი';
$_['entry_street']				= 'ქუჩა';
$_['entry_house_no']			= 'სახლი №';
$_['entry_house_ext']			= 'სახლი ექს.';
$_['entry_company']				= 'კომპანიის რეგისტრაციის ნომერი';

// Help
$_['help_pno']					= 'გთხოვთ, შეიყვანოთ თქვენი სოციალური დაცვის ნომერი.';
$_['help_phone_no']				= 'გთხოვთ, შეიყვანოთ თქვენი ტელეფონის ნომერი.';
$_['help_street']				= 'გთხოვთ, გაითვალისწინოთ, რომ მიწოდების მისამართი მხოლოდ დარეგისტრირებული მისამართია კლარასთან გადახდისას.';
$_['help_house_no']				= 'გთხოვთ შეიყვანოთ თქვენი სახლის ნომერი.';
$_['help_house_ext']			= 'გთხოვთ, წარადგინოთ თქვენი სახლის გაფართოება აქ. მაგალითად. A, B, C, წითელი, ლურჯი ECT.';
$_['help_company']				= 'გთხოვთ შეიყვანოთ თქვენი კომპანიის რეგისტრაციის ნომერი';

// Error
$_['error_deu_terms']			= 'თქვენ უნდა ეთანხმებით, რომ Klarna- ის კონფიდენციალურობის პოლიტიკა (Datenschutz)';
$_['error_address_match']		= 'საბილინგო და მიწოდება მისამართები უნდა შეესაბამებოდეს თუ გსურთ გამოიყენოთ Klarna ინვოისი';
$_['error_network']				= 'კლარასთან დაკავშირებისას მოხდა შეცდომა. გთხოვთ სცადოთ მოგვიანებით.';