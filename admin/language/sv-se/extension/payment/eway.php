<?php
// Heading
$_['heading_title']				= 'eWAY-betalning';

// Text
$_['text_extension']			= 'Extensions';
$_['text_success']				= 'Framgång: Du har ändrat din eWAY details!';
$_['text_edit']					= 'Redigera eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Tillstånd';
$_['text_sale']					= 'Försäljning';
$_['text_transparent']			= 'Genomskinlig omdirigering (betalningsformulär på plats)';
$_['text_iframe']				= 'IFrame (betalningsblanketten i fönstret)';

// Entry
$_['entry_paymode']				= 'Betalnings sätt';
$_['entry_test']				= 'Övningsläge';
$_['entry_order_status']		= 'Orderstatus';
$_['entry_order_status_refund'] = 'Återbetalad orderstatus';
$_['entry_order_status_auth']	= 'Auktoriserad orderstatus';
$_['entry_order_status_fraud']	= 'Misstänkt order för bedrägeribekämpning';
$_['entry_status']				= 'Status';
$_['entry_username']			= 'API-nyckel för eWAY';
$_['entry_password']			= 'eWAY-lösenordet';
$_['entry_payment_type']		= 'Betalnings typ';
$_['entry_geo_zone']			= 'Geo Zone';
$_['entry_sort_order']			= 'Sorteringsordning';
$_['entry_transaction_method']	= 'Transaktionsmetod';

// Error
$_['error_permission']			= 'Varning: Du har inte behörighet att ändra eWAY-betalningsmodulen';
$_['error_username']			= 'API-nyckel för eWAY krävs!';
$_['error_password']			= 'eWAY-lösenord krävs!';
$_['error_payment_type']		= 'Minst en betalningstyp krävs!';

// Help hints
$_['help_testmode']				= 'Ange till Ja för att använda eWAY Sandbox.';
$_['help_username']				= 'Din eWAY API-nyckel från ditt MYeWAY-konto.';
$_['help_password']				= 'Ditt eWAY API-lösenord från ditt MYEWAY-konto.';
$_['help_transaction_method']	= 'Auktorisation är endast tillgänglig för australiska banker';

// Order page - payment tab
$_['text_payment_info']			= 'Betalningsinformation';
$_['text_order_total']			= 'Totalt godkänt';
$_['text_transactions']			= 'transaktioner';
$_['text_column_transactionid'] = 'eWAY Transaction ID';
$_['text_column_amount']		= 'Belopp';
$_['text_column_type']			= 'Typ';
$_['text_column_created']		= 'Skapad';
$_['text_total_captured']		= 'Totalt infångat';
$_['text_capture_status']		= 'Betalning fångad';
$_['text_void_status']			= 'Betalningen annulleras';
$_['text_refund_status']		= 'Betalning återbetalas';
$_['text_total_refunded']		= 'Totalt återbetalas';
$_['text_refund_success']		= 'Återbetalning lyckades!';
$_['text_capture_success']		= 'Capture lyckades!';
$_['text_refund_failed']		= 'Återbetalning misslyckades:';
$_['text_capture_failed']		= 'Capture misslyckades:';
$_['text_unknown_failure']		= 'Ogiltig ordning eller mängd';

$_['text_confirm_capture']		= 'Är du säker på att du vill fånga betalningen?';
$_['text_confirm_release']		= 'Är du säker på att du vill släppa ut betalningen?';
$_['text_confirm_refund']		= 'Är du säker på att du vill återbetala betalningen?';

$_['text_empty_refund']			= 'Ange ett belopp som ska återbetalas';
$_['text_empty_capture']		= 'Ange ett belopp för att fånga';

$_['btn_refund']				= 'Återbetalning';
$_['btn_capture']				= 'Fånga';

// Validation Error codes
$_['text_card_message_V6000']	= 'Odefinierat valideringsfel';
$_['text_card_message_V6001'] 	= 'Ogiltig kund-IP';
$_['text_card_message_V6002'] 	= 'Ogiltigt DeviceID';
$_['text_card_message_V6011'] 	= 'Ogiltigt belopp';
$_['text_card_message_V6012'] 	= 'Ogiltig fakturabeskrivning';
$_['text_card_message_V6013'] 	= 'Ogiltigt fakturanummer';
$_['text_card_message_V6014'] 	= 'Ogiltig faktura referens';
$_['text_card_message_V6015'] 	= 'Ogiltig valutakod';
$_['text_card_message_V6016'] 	= 'Betalning krävs';
$_['text_card_message_V6017'] 	= 'Betalningsvaluta Kod krävs';
$_['text_card_message_V6018'] 	= 'Okänd Betalningsvaluta Kod';
$_['text_card_message_V6021'] 	= 'Kortinnehavarens namn krävs';
$_['text_card_message_V6022'] 	= 'Kortnummer krävs';
$_['text_card_message_V6023'] 	= 'CVN krävs';
$_['text_card_message_V6031'] 	= 'Ogiltigt kortnummer';
$_['text_card_message_V6032'] 	= 'Ogiltigt CVN';
$_['text_card_message_V6033'] 	= 'Ogiltigt utgångsdatum';
$_['text_card_message_V6034'] 	= 'Ogiltigt utgåva nummer';
$_['text_card_message_V6035'] 	= 'Ogiltigt startdatum';
$_['text_card_message_V6036'] 	= 'Ogiltig Månad';
$_['text_card_message_V6037'] 	= 'Ogiltigt år';
$_['text_card_message_V6040'] 	= 'Ogiltigt Token Kunde-ID';
$_['text_card_message_V6041'] 	= 'Kunde krävs';
$_['text_card_message_V6042'] 	= 'Kundens förnamn krävs';
$_['text_card_message_V6043'] 	= 'Kundens efternamn krävs';
$_['text_card_message_V6044'] 	= 'Kod Landskod krävs';
$_['text_card_message_V6045'] 	= 'Kundtitel krävs';
$_['text_card_message_V6046'] 	= 'Token Kunde-ID krävs';
$_['text_card_message_V6047'] 	= 'RedirectURL krävs';
$_['text_card_message_V6051'] 	= 'Ogiltigt förnamn';
$_['text_card_message_V6052'] 	= 'Ogiltigt efternamn';
$_['text_card_message_V6053'] 	= 'Ogiltigt landskod';
$_['text_card_message_V6054'] 	= 'Ogiltig email';
$_['text_card_message_V6055'] 	= 'Ogiltig telefon';
$_['text_card_message_V6056'] 	= 'Ogiltig mobil';
$_['text_card_message_V6057'] 	= 'Ogiltigt fax';
$_['text_card_message_V6058'] 	= 'Ogiltig Titel';
$_['text_card_message_V6059'] 	= 'Omdirigeringsadressen är ogiltig';
$_['text_card_message_V6060'] 	= 'Omdirigeringsadressen är ogiltig';
$_['text_card_message_V6061'] 	= 'Ogiltig referens';
$_['text_card_message_V6062'] 	= 'Ogiltigt företagsnamn';
$_['text_card_message_V6063'] 	= 'Ogiltig jobbbeskrivning';
$_['text_card_message_V6064'] 	= 'Ogiltig Street1';
$_['text_card_message_V6065'] 	= 'Ogiltig Street2';
$_['text_card_message_V6066'] 	= 'Ogiltig Stad';
$_['text_card_message_V6067'] 	= 'Ogiltig stat';
$_['text_card_message_V6068'] 	= 'Ogiltigt postnummer';
$_['text_card_message_V6069'] 	= 'Ogiltig email';
$_['text_card_message_V6070'] 	= 'Ogiltig telefon';
$_['text_card_message_V6071'] 	= 'Ogiltig mobil';
$_['text_card_message_V6072'] 	= 'Ogiltiga kommentarer';
$_['text_card_message_V6073'] 	= 'Ogiltigt fax';
$_['text_card_message_V6074'] 	= 'Ogiltig URL';
$_['text_card_message_V6075'] 	= 'Ogiltigt sändningsadress förnamn';
$_['text_card_message_V6076'] 	= 'Ogiltigt Sändningsadress Efternamn';
$_['text_card_message_V6077'] 	= 'Ogiltig leveransadress Street1';
$_['text_card_message_V6078'] 	= 'Ogiltig leveransadress Street2';
$_['text_card_message_V6079'] 	= 'Ogiltig leveransadress Stad';
$_['text_card_message_V6080'] 	= 'Ogiltig leveransadress';
$_['text_card_message_V6081'] 	= 'Ogiltig leveransadress PostalCode';
$_['text_card_message_V6082'] 	= 'Ogiltig leveransadress Email';
$_['text_card_message_V6083'] 	= 'Ogiltig Fraktadress Telefon';
$_['text_card_message_V6084'] 	= 'Ogiltigt leveransadress land';
$_['text_card_message_V6091'] 	= 'Okänd landskod';
$_['text_card_message_V6100'] 	= 'Ogiltigt kortnamn';
$_['text_card_message_V6101'] 	= 'Ogiltigt kortets utgångsdatum';
$_['text_card_message_V6102'] 	= 'Ogiltigt kortets utgångsår';
$_['text_card_message_V6103'] 	= 'Ogiltig kortstartsmånad';
$_['text_card_message_V6104'] 	= 'Ogiltigt kort startår';
$_['text_card_message_V6105'] 	= 'Ogiltigt kortnummer';
$_['text_card_message_V6106'] 	= 'Ogiltigt kort CVN';
$_['text_card_message_V6107'] 	= 'Ogiltig AccessCode';
$_['text_card_message_V6108'] 	= 'Ogiltig CustomerHostAddress';
$_['text_card_message_V6109'] 	= 'Ogiltig UserAgent';
$_['text_card_message_V6110'] 	= 'Ogiltigt kortnummer';
$_['text_card_message_V6111'] 	= 'Obehörig API-åtkomst, Konto inte PCI-certifierat';
$_['text_card_message_V6112'] 	= 'Redundanta kortuppgifter annat än utgångsår och månad';
$_['text_card_message_V6113'] 	= 'Ogiltig transaktion för återbetalning';
$_['text_card_message_V6114'] 	= 'Gateway valideringsfel';
$_['text_card_message_V6115'] 	= 'Ogiltig DirectRefundRequest, Transaction ID';
$_['text_card_message_V6116'] 	= 'Ogiltiga kortdata på original TransactionID';
$_['text_card_message_V6124'] 	= 'Ogiltiga rader. Linjeposter har lagts till, men summorna överensstämmer inte med TotalAmount-fältet';
$_['text_card_message_V6125'] 	= 'Den valda betalningstypen är inte aktiverad';
$_['text_card_message_V6126'] 	= 'Ogiltigt krypterat kortnummer, dekryptering misslyckades';
$_['text_card_message_V6127'] 	= 'Ogiltig krypterad cvn, dekryptering misslyckades';
$_['text_card_message_V6128'] 	= 'Ogiltig metod för betalningstyp';
$_['text_card_message_V6129'] 	= 'Transaktion har inte godkänts för Capture /Cancellation';
$_['text_card_message_V6130'] 	= 'Generiskt kundinformationsfel';
$_['text_card_message_V6131'] 	= 'Generiskt fraktinformationsfel';
$_['text_card_message_V6132'] 	= 'Transaktionen har redan slutförts eller annullerats, drift är inte tillåten';
$_['text_card_message_V6133'] 	= 'Kassa är inte tillgänglig för Betalningstyp';
$_['text_card_message_V6134'] 	= 'Ogiltigt Auth Transaction ID för Capture /Void';
$_['text_card_message_V6135'] 	= 'PayPal-fel behandlar återbetalning';
$_['text_card_message_V6140'] 	= 'Säljarkonto är avstängt';
$_['text_card_message_V6141'] 	= 'Ogiltiga PayPal-kontouppgifter eller API-signatur';
$_['text_card_message_V6142'] 	= 'Godkänn inte tillgänglig för Bank /Branch';
$_['text_card_message_V6150'] 	= 'Ogiltigt återbetalningsbelopp';
$_['text_card_message_V6151'] 	= 'Återbetalningsbeloppet är större än den ursprungliga transaktionen';
$_['text_card_message_D4406'] 	= 'Okänt fel';
$_['text_card_message_S5010'] 	= 'Okänt fel';