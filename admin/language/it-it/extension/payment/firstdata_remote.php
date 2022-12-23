<?php
// Heading
$_['heading_title']					 = 'Prima API del servizio Web EMEA di dati';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'estensioni';
$_['text_success']					 = 'Operazione riuscita: i dettagli dell\'account First Data sono stati modificati!';
$_['text_edit']                      = 'Modifica l\'API del servizio Web EMEA per i primi dati';
$_['text_card_type']				 = 'Tipo di carta';
$_['text_enabled']					 = 'Abilitato';
$_['text_merchant_id']				 = 'Store ID';
$_['text_subaccount']				 = 'Account secondario';
$_['text_user_id']					 = 'ID utente';
$_['text_capture_ok']				 = 'Cattura ha avuto successo';
$_['text_capture_ok_order']			 = 'La cattura è avvenuta con successo, lo stato dell\'ordine è stato aggiornato con successo';
$_['text_refund_ok']				 = 'Il rimborso ha avuto successo';
$_['text_refund_ok_order']			 = 'Il rimborso è andato a buon fine, lo stato dell\'ordine è stato aggiornato al rimborso';
$_['text_void_ok']					 = 'Void ha avuto successo, lo stato dell\'ordine è stato aggiornato a vuoto';
$_['text_settle_auto']				 = 'saldi';
$_['text_settle_delayed']			 = 'Pre auth';
$_['text_mastercard']				 = 'MasterCard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Informazioni sul pagamento';
$_['text_capture_status']			 = 'Pagamento catturato';
$_['text_void_status']				 = 'Pagamento annullato';
$_['text_refund_status']			 = 'Pagamento rimborsato';
$_['text_order_ref']				 = 'Ordine rif';
$_['text_order_total']				 = 'Totale autorizzato';
$_['text_total_captured']			 = 'Totale catturato';
$_['text_transactions']				 = 'Le transazioni';
$_['text_column_amount']			 = 'Quantità';
$_['text_column_type']				 = 'genere';
$_['text_column_date_added']		 = 'Creato';
$_['text_confirm_void']				 = 'Sei sicuro di voler annullare il pagamento?';
$_['text_confirm_capture']			 = 'Sei sicuro di voler acquisire il pagamento?';
$_['text_confirm_refund']			 = 'Sei sicuro di voler rimborsare il pagamento?';

// Entry
$_['entry_certificate_path']		 = 'Percorso del certificato';
$_['entry_certificate_key_path']	 = 'Percorso della chiave privata';
$_['entry_certificate_key_pw']		 = 'Password della chiave privata';
$_['entry_certificate_ca_path']		 = 'Percorso CA.';
$_['entry_merchant_id']				 = 'Store ID';
$_['entry_user_id']					 = 'ID utente';
$_['entry_password']				 = 'Parola d\'ordine';
$_['entry_total']					 = 'Totale';
$_['entry_sort_order']				 = 'Ordinamento';
$_['entry_geo_zone']				 = 'Zona geografica';
$_['entry_status']					 = 'Stato';
$_['entry_debug']					 = 'Registrazione di debug';
$_['entry_auto_settle']				 = 'Tipo di insediamento';
$_['entry_status_success_settled']	 = 'Successo - risolto';
$_['entry_status_success_unsettled'] = 'Successo - non risolto';
$_['entry_status_decline']			 = 'Declino';
$_['entry_status_void']				 = 'Voided';
$_['entry_status_refund']			 = 'rimborsato';
$_['entry_enable_card_store']		 = 'Abilita i token di archiviazione della carta';
$_['entry_cards_accepted']			 = 'Tipi di carte accettate';

// Help
$_['help_total']					 = 'Il checkout totale dell\'ordine deve arrivare prima che questo metodo di pagamento diventi attivo';
$_['help_certificate']				 = 'Certificati e chiavi private devono essere memorizzati al di fuori delle tue cartelle web pubbliche';
$_['help_card_select']				 = 'Chiedere all\'utente di scegliere il proprio tipo di carta prima di essere reindirizzati';
$_['help_notification']				 = 'Devi fornire questo URL a First Data per ricevere le notifiche di pagamento';
$_['help_debug']					 = 'L\'abilitazione del debug scriverà i dati sensibili in un file di registro. Dovresti sempre disabilitare se non diversamente indicato.';
$_['help_settle']					 = 'Se si utilizza la pre-autorizzazione, è necessario completare un\'azione post-autorizzazione entro 3-5 giorni, altrimenti la transazione verrà interrotta';

// Tab
$_['tab_account']					 = 'Informazioni API';
$_['tab_order_status']				 = 'Lo stato dell\'ordine';
$_['tab_payment']					 = 'Impostazioni di pagamento';

// Button
$_['button_capture']				 = 'Catturare';
$_['button_refund']					 = 'Rimborso';
$_['button_void']					 = 'vuoto';

// Error
$_['error_merchant_id']				 = 'L\'ID del negozio è richiesto';
$_['error_user_id']					 = 'È richiesto un ID utente';
$_['error_password']				 = 'E \'richiesta la password';
$_['error_certificate']				 = 'Il percorso del certificato è richiesto';
$_['error_key']						 = 'La chiave del certificato è richiesta';
$_['error_key_pw']					 = 'È richiesta la password della chiave del certificato';
$_['error_ca']						 = 'È richiesta l\'autorità di certificazione (CA)';