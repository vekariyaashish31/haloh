<?php
// Heading
$_['heading_title']					 = 'Globalpay Omdirigering';

// Text
$_['text_extension']				  	 = 'Extensions';
$_['text_success']					 = 'Framgång: Du har ändrat Globalpay-kontouppgifter!';
$_['text_edit']                      = 'Redigera Globalpay Redirect';
$_['text_live']						 = 'leva';
$_['text_demo']						 = 'demo';
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
$_['text_url_message']				 = 'Du måste tillhandahålla butikadressen till din Globalpay-kontohanterare innan du går live';
$_['text_payment_info']				 = 'Betalningsinformation';
$_['text_capture_status']			 = 'Betalning fångad';
$_['text_void_status']				 = 'Betalningen annulleras';
$_['text_rebate_status']			 = 'Betalning avdrags';
$_['text_order_ref']				 = 'Beställnings ref';
$_['text_order_total']				 = 'Totalt godkänt';
$_['text_total_captured']			 = 'Totalt infångat';
$_['text_transactions']				 = 'transaktioner';
$_['text_column_amount']			 = 'Belopp';
$_['text_column_type']				 = 'Typ';
$_['text_column_date_added']		 = 'Skapad';
$_['text_confirm_void']				 = 'Är du säker på att du vill radera betalningen?';
$_['text_confirm_capture']			 = 'Är du säker på att du vill fånga betalningen?';
$_['text_confirm_rebate']			 = 'Är du säker på att du vill rabatta betalningen?';
$_['text_globalpay']                 = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				 = 'Merchant ID';
$_['entry_secret']					 = 'Delad hemlighet';
$_['entry_rebate_password']			 = 'Rabatt lösenord';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Sorteringsordning';
$_['entry_geo_zone']				 = 'Geo-zon';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Felsökningsloggning';
$_['entry_live_demo']				 = 'Live-demo';
$_['entry_auto_settle']				 = 'Förlikningstyp';
$_['entry_card_select']				 = 'Välj kort';
$_['entry_tss_check']				 = 'TSS kontrollerar';
$_['entry_live_url']				 = 'Live-anslutningsadress';
$_['entry_demo_url']				 = 'Demo-anslutningsadress';
$_['entry_status_success_settled']	 = 'Framgång - avgjort';
$_['entry_status_success_unsettled'] = 'Framgång - inte avgjort';
$_['entry_status_decline']			 = 'Nedgång';
$_['entry_status_decline_pending']	 = 'Avvisa - offline auth';
$_['entry_status_decline_stolen']	 = 'Avvisa - förlorat eller stulet kort';
$_['entry_status_decline_bank']		 = 'Avvisa - bankfel';
$_['entry_status_void']				 = 'ogiltigförklaras';
$_['entry_status_rebate']			 = 'falsad';
$_['entry_notification_url']		 = 'Anmälningsadress';

// Help
$_['help_total']					 = 'Kassa totalt ordern måste nås innan betalningsmetoden blir aktiv';
$_['help_card_select']				 = 'Be användaren att välja sin korttyp innan de omdirigeras';
$_['help_notification']				 = 'Du måste ange denna webbadress till Globalpay för att få betalningsanmälningar';
$_['help_debug']					 = 'Aktivering av debug kommer att skriva känslig data till en loggfil. Du bör alltid inaktivera om inte annat anges';
$_['help_dcc_settle']				 = 'Om din underkonto är DCC aktiverad måste du använda Autosettle';

// Tab
$_['tab_api']					     = 'API-detaljer';
$_['tab_account']		     		 = 'konton';
$_['tab_order_status']				 = 'Orderstatus';
$_['tab_payment']					 = 'Betalningsinställningar';
$_['tab_advanced']					 = 'Avancerad';

// Button
$_['button_capture']				 = 'Fånga';
$_['button_rebate']					 = 'Rabatter /återbetalning';
$_['button_void']					 = 'Ogiltig';

// Error
$_['error_merchant_id']				 = 'Merchant ID krävs';
$_['error_secret']					 = 'Delad hemlighet krävs';
$_['error_live_url']				 = 'Live URL krävs';
$_['error_demo_url']				 = 'Demo-URL krävs';
$_['error_data_missing']			 = 'Data saknas';
$_['error_use_select_card']			 = 'Du måste ha "Select Card" aktiverat för subkonto-routing med korttyp för att fungera';