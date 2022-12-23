<?php
// Text
$_['text_title']				= 'Fattura Klarna - Paga entro 14 giorni';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Invoice richiede alcune informazioni aggiuntive prima di poter processare il tuo ordine.';
$_['text_male']					= 'Maschio';
$_['text_female']				= 'Femmina';
$_['text_year']					= 'Anno';
$_['text_month']				= 'Mese';
$_['text_day']					= 'Giorno';
$_['text_comment']				= 'ID fattura Klarna: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Genere';
$_['entry_pno']					= 'Numero personale';
$_['entry_dob']					= 'Data di nascita';
$_['entry_phone_no']			= 'Numero di telefono';
$_['entry_street']				= 'strada';
$_['entry_house_no']			= 'House No.';
$_['entry_house_ext']			= 'Casa Ext.';
$_['entry_company']				= 'Numero di registrazione della società';

// Help
$_['help_pno']					= 'Si prega di inserire il numero di previdenza sociale qui.';
$_['help_phone_no']				= 'Per favore, inserisca il suo numero di telefono.';
$_['help_street']				= 'Si prega di notare che la consegna può avvenire solo all\'indirizzo registrato quando si paga con Klarna.';
$_['help_house_no']				= 'Per favore inserisci il tuo numero di casa.';
$_['help_house_ext']			= 'Si prega di inviare la tua estensione di casa qui. Per esempio. A, B, C, rosso, blu ect.';
$_['help_company']				= 'Si prega di inserire il numero di registrazione della vostra azienda';

// Error
$_['error_deu_terms']			= 'Devi accettare l\'informativa sulla privacy di Klarna (Datenschutz)';
$_['error_address_match']		= 'Gli indirizzi di fatturazione e spedizione devono corrispondere se si desidera utilizzare la fattura Klarna';
$_['error_network']				= 'Si è verificato un errore durante la connessione a Klarna. Per favore riprova più tardi.';