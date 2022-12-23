<?php
// Text
$_['text_title']				= 'Klarna faktura - zaplatit do 14 dnů';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna faktura vyžaduje některé další informace, než mohou zpracovat Vaši objednávku.';
$_['text_male']					= 'mužský';
$_['text_female']				= 'ženský';
$_['text_year']					= 'Rok';
$_['text_month']				= 'Měsíc';
$_['text_day']					= 'Den';
$_['text_comment']				= 'Klarna\'s Faktura ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Rod';
$_['entry_pno']					= 'Osobní číslo';
$_['entry_dob']					= 'Datum narození';
$_['entry_phone_no']			= 'Telefonní číslo';
$_['entry_street']				= 'ulice';
$_['entry_house_no']			= 'Číslo domu';
$_['entry_house_ext']			= 'Dům Ext.';
$_['entry_company']				= 'Registrační číslo společnosti';

// Help
$_['help_pno']					= 'Zadejte zde své číslo sociálního zabezpečení.';
$_['help_phone_no']				= 'Zadejte své telefonní číslo.';
$_['help_street']				= 'Vezměte prosím na vědomí, že doručení se může uskutečnit pouze při registraci na adrese Klarna.';
$_['help_house_no']				= 'Zadejte své číslo domu.';
$_['help_house_ext']			= 'Prosím, podejte prosím zde vaše pobočky. Např. A, B, C, červená, modrá atd.';
$_['help_company']				= 'Zadejte své registrační číslo společnosti';

// Error
$_['error_deu_terms']			= 'Musíte souhlasit s ochranou soukromí společnosti Klarna (Datenschutz)';
$_['error_address_match']		= 'Adresy fakturace a zasílání musí odpovídat, pokud chcete použít fakturu Klarna';
$_['error_network']				= 'Během připojení k Klarna došlo k chybě. Prosím zkuste to znovu později.';