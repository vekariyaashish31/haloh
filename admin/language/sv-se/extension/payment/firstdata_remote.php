<?php
// Heading
$_['heading_title']					 = 'First Data EMEA Web Service API';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Extensions';
$_['text_success']					 = 'Framgång: Du har ändrat First Data-kontoinformation!';
$_['text_edit']                      = 'Redigera First Data EMEA Web Service API';
$_['text_card_type']				 = 'Kort typ';
$_['text_enabled']					 = 'Aktiverad';
$_['text_merchant_id']				 = 'Butik ID';
$_['text_subaccount']				 = 'Underkonto';
$_['text_user_id']					 = 'användar ID';
$_['text_capture_ok']				 = 'Capture lyckades';
$_['text_capture_ok_order']			 = 'Capture var framgångsrik, orderstatus uppdaterad till framgång - avgjord';
$_['text_refund_ok']				 = 'Återbetalning var framgångsrik';
$_['text_refund_ok_order']			 = 'Återbetalning lyckades, orderstatus uppdaterad till återbetalning';
$_['text_void_ok']					 = 'Annullering var framgångsrik, orderstatus uppdaterad till annullerad';
$_['text_settle_auto']				 = 'Försäljning';
$_['text_settle_delayed']			 = 'Förmyndare';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'visum';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Betalningsinformation';
$_['text_capture_status']			 = 'Betalning fångad';
$_['text_void_status']				 = 'Betalningen annulleras';
$_['text_refund_status']			 = 'Betalning återbetalas';
$_['text_order_ref']				 = 'Beställnings ref';
$_['text_order_total']				 = 'Totalt godkänt';
$_['text_total_captured']			 = 'Totalt infångat';
$_['text_transactions']				 = 'transaktioner';
$_['text_column_amount']			 = 'Belopp';
$_['text_column_type']				 = 'Typ';
$_['text_column_date_added']		 = 'Skapad';
$_['text_confirm_void']				 = 'Är du säker på att du vill radera betalningen?';
$_['text_confirm_capture']			 = 'Är du säker på att du vill fånga betalningen?';
$_['text_confirm_refund']			 = 'Är du säker på att du vill återbetala betalningen?';

// Entry
$_['entry_certificate_path']		 = 'Certifikatväg';
$_['entry_certificate_key_path']	 = 'Privat nyckelväg';
$_['entry_certificate_key_pw']		 = 'Privat nyckellösenord';
$_['entry_certificate_ca_path']		 = 'CA-sökvägen';
$_['entry_merchant_id']				 = 'Butik ID';
$_['entry_user_id']					 = 'användar ID';
$_['entry_password']				 = 'Lösenord';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Sorteringsordning';
$_['entry_geo_zone']				 = 'Geo-zon';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Felsökningsloggning';
$_['entry_auto_settle']				 = 'Förlikningstyp';
$_['entry_status_success_settled']	 = 'Framgång - avgjort';
$_['entry_status_success_unsettled'] = 'Framgång - inte avgjort';
$_['entry_status_decline']			 = 'Nedgång';
$_['entry_status_void']				 = 'ogiltigförklaras';
$_['entry_status_refund']			 = 'återbetalas';
$_['entry_enable_card_store']		 = 'Aktivera kortlagringsbuntar';
$_['entry_cards_accepted']			 = 'Korttyper accepteras';

// Help
$_['help_total']					 = 'Kassa totalt ordern måste nås innan betalningsmetoden blir aktiv';
$_['help_certificate']				 = 'Certifikat och privata nycklar bör lagras utanför dina offentliga webbmappar';
$_['help_card_select']				 = 'Be användaren att välja sin korttyp innan de omdirigeras';
$_['help_notification']				 = 'Du måste tillhandahålla den här webbadressen till första data för att få betalningsanmälningar';
$_['help_debug']					 = 'Aktivering av debug kommer att skriva känslig data till en loggfil. Du bör alltid inaktivera om inte annat anges.';
$_['help_settle']					 = 'Om du använder pre-auth måste du slutföra en post-auth-åtgärd inom 3-5 dagar, annars kommer din transaktion att släppas';

// Tab
$_['tab_account']					 = 'API-info';
$_['tab_order_status']				 = 'Orderstatus';
$_['tab_payment']					 = 'Betalningsinställningar';

// Button
$_['button_capture']				 = 'Fånga';
$_['button_refund']					 = 'Återbetalning';
$_['button_void']					 = 'Ogiltig';

// Error
$_['error_merchant_id']				 = 'Butik-ID krävs';
$_['error_user_id']					 = 'Användar-ID krävs';
$_['error_password']				 = 'lösenord krävs';
$_['error_certificate']				 = 'Certifikatväg krävs';
$_['error_key']						 = 'Certifikatnyckel krävs';
$_['error_key_pw']					 = 'Certifikatnyckel lösenord krävs';
$_['error_ca']						 = 'Certifikatmyndighet (CA) krävs';