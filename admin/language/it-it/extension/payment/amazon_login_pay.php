<?php
//Headings
$_['heading_title']                = 'Amazon Pay';

// Text
$_['text_success']                 = 'Il modulo Amazon Pay è stato aggiornato';
$_['text_ipn_url']				   = 'Cron Job URL';
$_['text_ipn_token']			   = 'Token segreto';
$_['text_us']					   = 'americano';
$_['text_de']					   = 'Tedesco';
$_['text_uk']                      = 'Inglese';
$_['text_fr']                      = 'francese';
$_['text_it']                      = 'italiano';
$_['text_es']                      = 'spagnolo';
$_['text_us_region']			   = 'stati Uniti';
$_['text_eu_region']               = 'Euro regione';
$_['text_uk_region']               = 'Regno Unito';
$_['text_live']                    = 'Vivere';
$_['text_sandbox']                 = 'sandbox';
$_['text_auth']		           	   = 'Autorizzazione';
$_['text_payment']		           = 'Pagamento';
$_['text_extension']               = 'estensioni';
$_['text_account']                 = 'account';
$_['text_guest']				   = 'ospite';
$_['text_no_capture']              = '--- Nessuna cattura automatica ---';
$_['text_all_geo_zones']           = 'Tutte le zone geografiche';
$_['text_button_settings']         = 'Impostazioni del pulsante di pagamento';
$_['text_colour']                  = 'Colore';
$_['text_orange']                  = 'arancia';
$_['text_tan']                     = 'abbronzatura';
$_['text_white']                   = 'bianca';
$_['text_light']                   = 'Leggero';
$_['text_dark']                    = 'Buio';
$_['text_size']                    = 'Dimensione';
$_['text_medium']                  = 'medio';
$_['text_large']                   = 'Grande';
$_['text_x_large']                 = 'Extra large';
$_['text_background']              = 'sfondo';
$_['text_edit']					   = 'Modifica Amazon Pay';
$_['text_amazon_login_pay']        = '<a href="https://pay.amazon.com/uk/sp/opencart" target="_blank" title="Accedi ad Amazon Pay"> <img src="view/image/payment/amazonpay.png" alt="Amazon Pay" title="Amazon Pay" style="border: 1px solido #EEEEEE; "/> </a>';
$_['text_amazon_join']             = '<a href="https://pay.amazon.com/uk/sp/opencart" target="_blank" title="Accedere ad Amazon Pay"> <u> Registrazione ad Amazon Pay </u> </a>';
$_['text_payment_info']			   = 'Informazioni sul pagamento';
$_['text_capture_ok']			   = 'Cattura ha avuto successo';
$_['text_capture_ok_order']		   = 'La cattura ha avuto successo, l\'autorizzazione è stata completamente acquisita';
$_['text_refund_ok']			   = 'Il rimborso è stato richiesto con successo';
$_['text_refund_ok_order']		   = 'Il rimborso è stato richiesto con successo, importo completamente rimborsato';
$_['text_cancel_ok']			   = 'La cancellazione è avvenuta con successo, lo stato dell\'ordine è stato annullato';
$_['text_capture_status']		   = 'Pagamento catturato';
$_['text_cancel_status']		   = 'Pagamento annullato';
$_['text_refund_status']		   = 'Pagamento rimborsato';
$_['text_order_ref']			   = 'Ordine rif';
$_['text_order_total']			   = 'Totale autorizzato';
$_['text_total_captured']		   = 'Totale catturato';
$_['text_transactions']			   = 'Le transazioni';
$_['text_column_authorization_id'] = 'ID autorizzazione Amazon';
$_['text_column_capture_id']	   = 'Amazon Capture ID';
$_['text_column_refund_id']		   = 'ID Amazon Refund';
$_['text_column_amount']		   = 'Quantità';
$_['text_column_type']			   = 'genere';
$_['text_column_status']		   = 'Stato';
$_['text_column_date_added']	   = 'Data aggiunta';
$_['text_confirm_cancel']		   = 'Sei sicuro di voler cancellare il pagamento?';
$_['text_confirm_capture']		   = 'Sei sicuro di voler acquisire il pagamento?';
$_['text_confirm_refund']		   = 'Sei sicuro di voler rimborsare il pagamento?';
$_['text_minimum_total']           = 'Totale ordine minimo';
$_['text_geo_zone']                = 'Geo Zone';
$_['text_status']                  = 'Stato';
$_['text_declined_codes']          = 'Prova i codici di rifiuto';
$_['text_sort_order']              = 'Ordinamento';
$_['text_amazon_invalid']          = 'InvalidPaymentMethod';
$_['text_amazon_rejected']         = 'AmazonRejected';
$_['text_amazon_timeout']          = 'transactionTimedOut';
$_['text_amazon_no_declined']      = '--- Nessuna autorizzazione rifiutata automatica ---';
$_['text_amazon_signup']		   = 'Iscriviti ad Amazon Pay';
$_['text_credentials']			   = 'Si prega di incollare le chiavi qui (in formato JSON)';
$_['text_validate_credentials']	   = 'Convalida e utilizza le credenziali';

// Columns
$_['column_status']                = 'Stato';

//entry
$_['entry_merchant_id']            = 'ID Commerciante';
$_['entry_access_key']             = 'Chiave di accesso';
$_['entry_access_secret']          = 'Chiave segreta';
$_['entry_client_id']              = 'Identificativo cliente';
$_['entry_client_secret']          = 'Client Secret';
$_['entry_language']			   = 'linguaggio';
$_['entry_login_pay_test']         = 'Modalità di prova';
$_['entry_login_pay_mode']         = 'Metodo di pagamento';
$_['entry_checkout']			   = 'Modalità di pagamento';
$_['entry_payment_region']		   = 'Regione di pagamento';
$_['entry_capture_status']         = 'Stato di acquisizione automatica';
$_['entry_pending_status']         = 'Stato dell\'ordine in sospeso';
$_['entry_ipn_url']				   = 'IPN \'s URL';
$_['entry_ipn_token']			   = 'Token segreto';
$_['entry_debug']				   = 'Registrazione di debug';

// Help
$_['help_pay_mode']				   = 'Il pagamento è disponibile solo per il mercato statunitense';
$_['help_checkout']				   = 'Il pulsante di pagamento deve anche accedere al cliente';
$_['help_capture_status']		   = 'Scegli lo stato dell\'ordine che attiverà l\'acquisizione automatica di un pagamento autorizzato';
$_['help_ipn_url']				   = 'Imposta questo come URL di merchcant in Amazon Seller Central';
$_['help_ipn_token']			   = 'Rendilo lungo e difficile da indovinare';
$_['help_minimum_total']		   = 'Questo deve essere sopra lo zero';
$_['help_debug']				   = 'L\'abilitazione del debug scriverà i dati sensibili in un file di registro. Dovresti sempre disabilitare se non diversamente indicato';
$_['help_declined_codes']		   = 'Questo è solo a scopo di test';

// Order Info
$_['tab_order_adjustment']         = 'Regolazione dell\'ordine';

// Errors
$_['error_permission']             = 'Non hai i permessi per modificare questo modulo';
$_['error_merchant_id']			   = 'L\'ID del commerciante è richiesto';
$_['error_access_key']			   = 'La chiave di accesso è richiesta';
$_['error_access_secret']		   = 'È richiesta la chiave segreta';
$_['error_client_id']			   = 'È richiesto un ID cliente';
$_['error_client_secret']		   = 'È richiesta la chiave del cliente';
$_['error_pay_mode']			   = 'Il pagamento è disponibile solo per il mercato statunitense';
$_['error_minimum_total']		   = 'Il totale dell\'ordine minimo deve essere superiore a zero';
$_['error_curreny']                = 'Il tuo negozio deve avere la valuta %s installata e abilitata';
$_['error_upload']                 = 'Caricamento fallito';
$_['error_data_missing'] 		   = 'I dati richiesti mancano';
$_['error_credentials'] 		   = 'Si prega di inserire le chiavi in ​​un formato JSON valido';


// Buttons
$_['button_capture']			   = 'Catturare';
$_['button_refund']				   = 'Rimborso';
$_['button_cancel']				   = 'Annulla';
