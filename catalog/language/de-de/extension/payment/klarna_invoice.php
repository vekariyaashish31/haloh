<?php
// Text
$_['text_title']				= 'Klarna Rechnung - Zahlen Sie innerhalb von 14 Tagen';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Invoice benötigt einige zusätzliche Informationen, bevor sie Ihre Bestellung bearbeiten können.';
$_['text_male']					= 'Männlich';
$_['text_female']				= 'Weiblich';
$_['text_year']					= 'Jahr';
$_['text_month']				= 'Monat';
$_['text_day']					= 'Tag';
$_['text_comment']				= 'Klarna\'s Rechnung ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Geschlecht';
$_['entry_pno']					= 'Persönliche Nummer';
$_['entry_dob']					= 'Geburtsdatum';
$_['entry_phone_no']			= 'Telefonnummer';
$_['entry_street']				= 'Straße';
$_['entry_house_no']			= 'Hausnummer.';
$_['entry_house_ext']			= 'Haus Erw.';
$_['entry_company']				= 'Handelsregisternummer';

// Help
$_['help_pno']					= 'Bitte geben Sie hier Ihre Sozialversicherungsnummer ein.';
$_['help_phone_no']				= 'Bitte geben sie ihre Telefonnummer ein.';
$_['help_street']				= 'Bitte beachten Sie, dass die Lieferung nur an die registrierte Adresse erfolgen kann, wenn Sie mit Klarna bezahlen.';
$_['help_house_no']				= 'Bitte geben Sie Ihre Hausnummer ein.';
$_['help_house_ext']			= 'Bitte reichen Sie hier Ihre Hauserweiterung ein. Z.B. A, B, C, Rot, Blau usw.';
$_['help_company']				= 'Bitte geben Sie die Registrierungsnummer Ihres Unternehmens ein';

// Error
$_['error_deu_terms']			= 'Sie müssen der Datenschutzrichtlinie von Klarna zustimmen';
$_['error_address_match']		= 'Rechnungs- und Versandadressen müssen übereinstimmen, wenn Sie Klarna Invoice verwenden möchten';
$_['error_network']				= 'Beim Verbinden mit Klarna ist ein Fehler aufgetreten. Bitte versuche es später erneut.';