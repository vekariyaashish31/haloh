<?php
// Heading
$_['heading_title']					 = 'Realex Remote';

// Text
$_['text_extension']				 = 'Extensions';
$_['text_success']					 = 'Framgång: Du har ändrat Realex-kontoinformation!';
$_['text_edit']                      = 'Redigera Realex Remote';
$_['text_card_type']				 = 'Kort typ';
$_['text_enabled']					 = 'Aktiverad';
$_['text_use_default']				 = 'Använd standard';
$_['text_merchant_id']				 = 'Merchant ID';
$_['text_subaccount']				 = 'Underkonto';
$_['text_secret']					 = 'Delad hemlighet';
$_['text_card_visa']				 = 'visum';
$_['text_card_master']				 = 'Mastercard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch /Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'Capture lyckades';
$_['text_capture_ok_order']			 = 'Capture var framgångsrik, orderstatus uppdaterad till framgång - avgjord';
$_['text_rebate_ok']				 = 'Rabatten var framgångsrik';
$_['text_rebate_ok_order']			 = 'Rabatten var framgångsrik, orderstatus uppdaterad till rabatterad';
$_['text_void_ok']					 = 'Annullering var framgångsrik, orderstatus uppdaterad till annullerad';
$_['text_settle_auto']				 = 'Bil';
$_['text_settle_delayed']			 = 'Försenad';
$_['text_settle_multi']				 = 'Mång';
$_['text_ip_message']				 = 'Du måste tillhandahålla din server-IP-adress till din Realex-kontohanterare innan du går live';
$_['text_payment_info']				 = 'Betalningsinformation';
$_['text_capture_status']			 = 'Betalning fångad';
$_['text_void_status']				 = 'Betalningen annulleras';
$_['text_rebate_status']			 = 'Betalning avdrags';
$_['text_order_ref']				 = 'Beställnings ref';
$_['text_order_total']				 = 'Totalt godkänt';
$_['text_total_captured']			 = 'Totalt infångat';
$_['text_transactions']				 = 'transaktioner';
$_['text_confirm_void']				 = 'Är du säker på att du vill radera betalningen?';
$_['text_confirm_capture']			 = 'Är du säker på att du vill fånga betalningen?';
$_['text_confirm_rebate']			 = 'Är du säker på att du vill rabatta betalningen?';
$_['text_realex_remote']			 = '<a mål="_BLANK" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"> <img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE; "/> </a>';

// Column
$_['text_column_amount']			 = 'Belopp';
$_['text_column_type']				 = 'Typ';
$_['text_column_date_added']		 = 'Skapad';

// Entry
$_['entry_merchant_id']				 = 'Merchant ID';
$_['entry_secret']					 = 'Delad hemlighet';
$_['entry_rebate_password']			 = 'Rabatt lösenord';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Sorteringsordning';
$_['entry_geo_zone']				 = 'Geo-zon';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Felsökningsloggning';
$_['entry_auto_settle']				 = 'Förlikningstyp';
$_['entry_tss_check']				 = 'TSS kontrollerar';
$_['entry_card_data_status']		 = 'Kortinfo logging';
$_['entry_3d']						 = 'Aktivera 3D-säkerhet';
$_['entry_liability_shift']			 = 'Acceptera icke-ansvarsförskjutande scenarier';
$_['entry_status_success_settled']	 = 'Framgång - avgjort';
$_['entry_status_success_unsettled'] = 'Framgång - inte avgjort';
$_['entry_status_decline']			 = 'Nedgång';
$_['entry_status_decline_pending']	 = 'Avvisa - offline auth';
$_['entry_status_decline_stolen']	 = 'Avvisa - förlorat eller stulet kort';
$_['entry_status_decline_bank']		 = 'Avvisa - bankfel';
$_['entry_status_void']				 = 'ogiltigförklaras';
$_['entry_status_rebate']			 = 'falsad';

// Help
$_['help_total']					 = 'Kassa totalt ordern måste nås innan betalningsmetoden blir aktiv';
$_['help_card_select']				 = 'Be användaren att välja sin korttyp innan de omdirigeras';
$_['help_notification']				 = 'Du måste ange denna webbadress till Realex för att få betalningsanmälningar';
$_['help_debug']					 = 'Aktivering av debug kommer att skriva känslig data till en loggfil. Du bör alltid inaktivera om inte annat anges.';
$_['help_liability']				 = 'Acceptansansvar innebär att du fortfarande tar emot betalningar när en användare misslyckas med 3D-säkerhet.';
$_['help_card_data_status']			 = 'Loggar de 4 sista siffrorna, utgår, namn, typ och utfärdar bankinformation';

// Tab
$_['tab_api']					     = 'API-detaljer';
$_['tab_account']				     = 'konton';
$_['tab_order_status']				 = 'Orderstatus';
$_['tab_payment']					 = 'Betalningsinställningar';

// Button
$_['button_capture']				 = 'Fånga';
$_['button_rebate']					 = 'Rabatter /återbetalning';
$_['button_void']					 = 'Ogiltig';

// Error
$_['error_merchant_id']				 = 'Merchant ID krävs';
$_['error_secret']					 = 'Delad hemlighet krävs';