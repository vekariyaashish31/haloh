<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'inställningar';
$_['tab_order_status']              = 'Orderstatus';

// Text
$_['text_extension']                = 'Extensions';
$_['text_success']                  = 'Framgång: Du har ändrat CardConnect betalningsmodul!';
$_['text_edit']                     = 'Redigera CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Betalning';
$_['text_authorize']                = 'Godkänna';
$_['text_live']                     = 'leva';
$_['text_test']                     = 'Testa';
$_['text_no_cron_time']             = 'Cronen har ännu inte exekverats';
$_['text_payment_info']             = 'Betalningsinformation';
$_['text_payment_method']           = 'Betalningsmetod';
$_['text_card']                     = 'Kort';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Referens';
$_['text_update']                   = 'Uppdatering';
$_['text_order_total']              = 'ordersumma';
$_['text_total_captured']           = 'Totalt Fångat';
$_['text_capture_payment']          = 'Capture Payment';
$_['text_refund_payment']           = 'Återbetalning Betalning';
$_['text_void']                     = 'Ogiltig';
$_['text_transactions']             = 'transaktioner';
$_['text_column_type']              = 'Typ';
$_['text_column_reference']         = 'Referens';
$_['text_column_amount']            = 'Belopp';
$_['text_column_status']            = 'Status';
$_['text_column_date_modified']     = 'Datum ändrat';
$_['text_column_date_added']        = 'datum tillagt';
$_['text_column_update']            = 'Uppdatering';
$_['text_column_void']              = 'Ogiltig';
$_['text_confirm_capture']          = 'Är du säker på att du vill fånga betalningen?';
$_['text_confirm_refund']           = 'Är du säker på att du vill återbetala betalningen?';
$_['text_inquire_success']          = 'Fråga var framgångsrik';
$_['text_capture_success']          = 'Fångningsförfrågan lyckades';
$_['text_refund_success']           = 'Återbetalningsförfrågan lyckades';
$_['text_void_success']             = 'Annulleringsförfrågan lyckades';

// Entry
$_['entry_merchant_id']             = 'Merchant ID';
$_['entry_api_username']            = 'API Användarnamn';
$_['entry_api_password']            = 'API-lösenord';
$_['entry_token']                   = 'Hemlig Token';
$_['entry_transaction']             = 'Transaktion';
$_['entry_environment']             = 'Miljö';
$_['entry_site']                    = 'Webbplats';
$_['entry_store_cards']             = 'Butikskort';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Total';
$_['entry_geo_zone']                = 'Geo Zone';
$_['entry_status']                  = 'Status';
$_['entry_logging']                 = 'Felsökningsloggning';
$_['entry_sort_order']              = 'Sorteringsordning';
$_['entry_cron_url']                = 'Cron jobbadress';
$_['entry_cron_time']               = 'Cron Job Last Run';
$_['entry_order_status_pending']    = 'Avvaktan';
$_['entry_order_status_processing'] = 'bearbetning';

// Help
$_['help_merchant_id']              = 'Ditt personliga ID för CardConnect-konto.';
$_['help_api_username']             = 'Ditt användarnamn för att komma åt CardConnect API.';
$_['help_api_password']             = 'Ditt lösenord för att komma åt CardConnect API.';
$_['help_token']                    = 'Ange en slumpmässig token för säkerhet eller använd den genererade.';
$_['help_transaction']              = 'Välj \'Betalning \' för att få tag i betalningen omedelbart eller \'Godkänn \' för att godkänna det.';
$_['help_site']                     = 'Detta bestämmer den första delen av API-webbadressen. Ändra endast om det är instruerat.';
$_['help_store_cards']              = 'Oavsett om du vill lagra kort med tokenisering.';
$_['help_echeck']                   = 'Oavsett om du vill erbjuda möjligheten att betala med en eCheck.';
$_['help_total']                    = 'Kassa totalt ordern måste nås innan betalningsmetoden blir aktiv. Måste vara ett värde utan valuta tecken.';
$_['help_logging']                  = 'Aktivering av debug kommer att skriva känslig data till en loggfil. Du bör alltid inaktivera om inte annat anges.';
$_['help_cron_url']                 = 'Ange ett cron-jobb för att ringa den här webbadressen så att beställningarna uppdateras automatiskt. Den är utformad för att spåras några timmar efter det att en företagsdag har hämtats.';
$_['help_cron_time']                = 'Det här är sista gången som cron-jobbadressen utfördes.';
$_['help_order_status_pending']     = 'Orderstatus när ordern måste godkännas av säljaren.';
$_['help_order_status_processing']  = 'Orderstatus när beställningen tas automatiskt.';

// Button
$_['button_inquire_all']            = 'Fråga alla';
$_['button_capture']                = 'Fånga';
$_['button_refund']                 = 'Återbetalning';
$_['button_void_all']               = 'Ogiltig alla';
$_['button_inquire']                = 'Fråga';
$_['button_void']                   = 'Ogiltig';

// Error
$_['error_permission']              = 'Varning: Du har inte behörighet att ändra betalning CardConnect!';
$_['error_merchant_id']             = 'Merchant ID Required!';
$_['error_api_username']            = 'API Användarnamn Required!';
$_['error_api_password']            = 'API-lösenordet Required!';
$_['error_token']                   = 'Hemlig Token Required!';
$_['error_site']                    = 'Site Required!';
$_['error_amount_zero']             = 'Beloppet måste vara högre än noll!';
$_['error_no_order']                = 'Ingen matchande order info!';
$_['error_invalid_response']        = 'Ogiltigt svar mottaget!';
$_['error_data_missing']            = 'Saknar data!';
$_['error_not_enabled']             = 'Modulen inte enabled!';