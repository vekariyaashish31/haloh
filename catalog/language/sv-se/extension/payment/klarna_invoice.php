<?php
// Text
$_['text_title']				= 'Klarna Faktura - Betala inom 14 dagar';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Faktura kräver ytterligare information innan de kan komma åt din order.';
$_['text_male']					= 'Manlig';
$_['text_female']				= 'Kvinna';
$_['text_year']					= 'År';
$_['text_month']				= 'Månad';
$_['text_day']					= 'Dag';
$_['text_comment']				= 'Klarnas faktura-ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Kön';
$_['entry_pno']					= 'Personligt nummer';
$_['entry_dob']					= 'Födelsedatum';
$_['entry_phone_no']			= 'Telefonnummer';
$_['entry_street']				= 'Gata';
$_['entry_house_no']			= 'Hus Nej.';
$_['entry_house_ext']			= 'House Ext.';
$_['entry_company']				= 'Organisationsnummer';

// Help
$_['help_pno']					= 'Vänligen ange ditt personnummer här.';
$_['help_phone_no']				= 'Vänligen skriv in ditt telefonnummer.';
$_['help_street']				= 'Observera att leverans endast kan ske till den registrerade adressen när du betalar med Klarna.';
$_['help_house_no']				= 'Vänligen ange ditt husnummer.';
$_['help_house_ext']			= 'Vänligen skicka ditt husförlängning här. T.ex. A, B, C, Röd, Blå ect.';
$_['help_company']				= 'Vänligen ange ditt företags registreringsnummer';

// Error
$_['error_deu_terms']			= 'Du måste godkänna Klarnas privatlivspolitik (Datenschutz)';
$_['error_address_match']		= 'Fakturerings- och leveransadresser måste matcha om du vill använda Klarna Invoice';
$_['error_network']				= 'Ett fel uppstod vid anslutning till Klarna. Vänligen försök igen senare.';