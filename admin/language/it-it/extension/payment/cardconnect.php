<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'impostazioni';
$_['tab_order_status']              = 'Lo stato dell\'ordine';

// Text
$_['text_extension']                = 'estensioni';
$_['text_success']                  = 'Successo: è stato modificato il modulo di pagamento CardConnect!';
$_['text_edit']                     = 'Modifica CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Pagamento';
$_['text_authorize']                = 'Autorizzare';
$_['text_live']                     = 'Vivere';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'Il cron non è ancora stato eseguito';
$_['text_payment_info']             = 'Informazioni sul pagamento';
$_['text_payment_method']           = 'Metodo di pagamento';
$_['text_card']                     = 'Carta';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Riferimento';
$_['text_update']                   = 'Aggiornare';
$_['text_order_total']              = 'Ordine totale';
$_['text_total_captured']           = 'Totale catturato';
$_['text_capture_payment']          = 'Cattura pagamento';
$_['text_refund_payment']           = 'Rimborso';
$_['text_void']                     = 'vuoto';
$_['text_transactions']             = 'Le transazioni';
$_['text_column_type']              = 'genere';
$_['text_column_reference']         = 'Riferimento';
$_['text_column_amount']            = 'Quantità';
$_['text_column_status']            = 'Stato';
$_['text_column_date_modified']     = 'Data modificata';
$_['text_column_date_added']        = 'Data aggiunta';
$_['text_column_update']            = 'Aggiornare';
$_['text_column_void']              = 'vuoto';
$_['text_confirm_capture']          = 'Sei sicuro di voler acquisire il pagamento?';
$_['text_confirm_refund']           = 'Sei sicuro di voler rimborsare il pagamento?';
$_['text_inquire_success']          = 'Informarsi ha avuto successo';
$_['text_capture_success']          = 'La richiesta di acquisizione ha avuto esito positivo';
$_['text_refund_success']           = 'La richiesta di rimborso è andata a buon fine';
$_['text_void_success']             = 'La richiesta di annullamento ha avuto esito positivo';

// Entry
$_['entry_merchant_id']             = 'ID Commerciante';
$_['entry_api_username']            = 'Nome utente API';
$_['entry_api_password']            = 'Password API';
$_['entry_token']                   = 'Token segreto';
$_['entry_transaction']             = 'Transazione';
$_['entry_environment']             = 'Ambiente';
$_['entry_site']                    = 'Luogo';
$_['entry_store_cards']             = 'Store Cards';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Totale';
$_['entry_geo_zone']                = 'Geo Zone';
$_['entry_status']                  = 'Stato';
$_['entry_logging']                 = 'Registrazione di debug';
$_['entry_sort_order']              = 'Ordinamento';
$_['entry_cron_url']                = 'Cron Job URL';
$_['entry_cron_time']               = 'Cron Job Last Run';
$_['entry_order_status_pending']    = 'in attesa di';
$_['entry_order_status_processing'] = 'in lavorazione';

// Help
$_['help_merchant_id']              = 'L\'ID commerciante dell\'account personale CardConnect.';
$_['help_api_username']             = 'Il tuo nome utente per accedere all\'API CardConnect.';
$_['help_api_password']             = 'La tua password per accedere all\'API CardConnect.';
$_['help_token']                    = 'Inserisci un token casuale per sicurezza o usa quello generato.';
$_['help_transaction']              = 'Scegli "Pagamento" per acquisire immediatamente il pagamento o "Autorizza" per approvarlo.';
$_['help_site']                     = 'Questo determina la prima parte dell\'URL dell\'API. Cambiare solo se richiesto.';
$_['help_store_cards']              = 'Se si desidera memorizzare le carte tramite tokenizzazione.';
$_['help_echeck']                   = 'Se vuoi offrire la possibilità di pagare utilizzando un eCheck.';
$_['help_total']                    = 'Il checkout totale dell\'ordine deve arrivare prima che questo metodo di pagamento diventi attivo. Deve essere un valore senza segno di valuta.';
$_['help_logging']                  = 'L\'abilitazione del debug scriverà i dati sensibili in un file di registro. Dovresti sempre disabilitare se non diversamente indicato.';
$_['help_cron_url']                 = 'Imposta un cron job per chiamare questo URL in modo che gli ordini vengano aggiornati automaticamente. È progettato per essere eseguito poche ore dopo l\'ultima acquisizione di un giorno lavorativo.';
$_['help_cron_time']                = 'Questa è l\'ultima volta che è stato eseguito l\'URL del cron job.';
$_['help_order_status_pending']     = 'Lo stato dell\'ordine quando l\'ordine deve essere autorizzato dal commerciante.';
$_['help_order_status_processing']  = 'Lo stato dell\'ordine quando l\'ordine viene acquisito automaticamente.';

// Button
$_['button_inquire_all']            = 'Richiedi tutto';
$_['button_capture']                = 'Catturare';
$_['button_refund']                 = 'Rimborso';
$_['button_void_all']               = 'Void All';
$_['button_inquire']                = 'Chiedere informazioni';
$_['button_void']                   = 'vuoto';

// Error
$_['error_permission']              = 'Avviso: non si dispone dell\'autorizzazione per modificare il pagamento CardConnect!';
$_['error_merchant_id']             = 'ID commerciante richiesto!';
$_['error_api_username']            = 'Nome utente API richiesto!';
$_['error_api_password']            = 'Password API richiesta!';
$_['error_token']                   = 'Token segreto richiesto!';
$_['error_site']                    = 'Sito richiesto!';
$_['error_amount_zero']             = 'L\'importo deve essere superiore a zero!';
$_['error_no_order']                = 'Nessun ordine corrispondente!';
$_['error_invalid_response']        = 'Risposta non valida ricevuta!';
$_['error_data_missing']            = 'Dati mancanti!';
$_['error_not_enabled']             = 'Modulo non abilitato!';