<?php
// Heading
$_['heading_title']				= 'Pagamento eWAY';

// Text
$_['text_extension']			= 'estensioni';
$_['text_success']				= 'Successo: hai modificato i tuoi dettagli eWAY!';
$_['text_edit']					= 'Modifica eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Autorizzazione';
$_['text_sale']					= 'saldi';
$_['text_transparent']			= 'Reindirizzamento trasparente (modulo di pagamento sul sito)';
$_['text_iframe']				= 'IFrame (modulo di pagamento in finestra)';

// Entry
$_['entry_paymode']				= 'Metodo di pagamento';
$_['entry_test']				= 'Modalità di prova';
$_['entry_order_status']		= 'Lo stato dell\'ordine';
$_['entry_order_status_refund'] = 'Stato dell\'ordine rimborsato';
$_['entry_order_status_auth']	= 'Stato dell\'ordine autorizzato';
$_['entry_order_status_fraud']	= 'Stato dell\'ordine sospetto di frode';
$_['entry_status']				= 'Stato';
$_['entry_username']			= 'Chiave API eWAY';
$_['entry_password']			= 'eWAY password';
$_['entry_payment_type']		= 'Modalità di pagamento';
$_['entry_geo_zone']			= 'Geo Zone';
$_['entry_sort_order']			= 'Ordinamento';
$_['entry_transaction_method']	= 'Metodo di transazione';

// Error
$_['error_permission']			= 'Avviso: non si dispone dell\'autorizzazione per modificare il modulo di pagamento eWAY';
$_['error_username']			= 'È richiesta la chiave API eWAY!';
$_['error_password']			= 'EWAY password è richiesta!';
$_['error_payment_type']		= 'È richiesto almeno un tipo di pagamento!';

// Help hints
$_['help_testmode']				= 'Impostare su Sì per usare sandbox eWAY.';
$_['help_username']				= 'La tua chiave API eWAY dal tuo account MYeWAY.';
$_['help_password']				= 'La tua password API eWAY dal tuo account MYeWAY.';
$_['help_transaction_method']	= 'L\'autorizzazione è disponibile solo per le banche australiane';

// Order page - payment tab
$_['text_payment_info']			= 'Informazioni sul pagamento';
$_['text_order_total']			= 'Totale autorizzato';
$_['text_transactions']			= 'Le transazioni';
$_['text_column_transactionid'] = 'ID transazione eWAY';
$_['text_column_amount']		= 'Quantità';
$_['text_column_type']			= 'genere';
$_['text_column_created']		= 'Creato';
$_['text_total_captured']		= 'Totale catturato';
$_['text_capture_status']		= 'Pagamento catturato';
$_['text_void_status']			= 'Pagamento annullato';
$_['text_refund_status']		= 'Pagamento rimborsato';
$_['text_total_refunded']		= 'Totale rimborsato';
$_['text_refund_success']		= 'Rimborso riuscito!';
$_['text_capture_success']		= 'Cattura riuscita !';
$_['text_refund_failed']		= 'Rimborso fallito:';
$_['text_capture_failed']		= 'Cattura fallita:';
$_['text_unknown_failure']		= 'Ordine o importo non valido';

$_['text_confirm_capture']		= 'Sei sicuro di voler acquisire il pagamento?';
$_['text_confirm_release']		= 'Sei sicuro di voler rilasciare il pagamento?';
$_['text_confirm_refund']		= 'Sei sicuro di voler rimborsare il pagamento?';

$_['text_empty_refund']			= 'Si prega di inserire un importo da rimborsare';
$_['text_empty_capture']		= 'Si prega di inserire un importo da catturare';

$_['btn_refund']				= 'Rimborso';
$_['btn_capture']				= 'Catturare';

// Validation Error codes
$_['text_card_message_V6000']	= 'Errore di convalida non definito';
$_['text_card_message_V6001'] 	= 'IP cliente non valido';
$_['text_card_message_V6002'] 	= 'DeviceID non valido';
$_['text_card_message_V6011'] 	= 'Importo non valido';
$_['text_card_message_V6012'] 	= 'Descrizione della fattura non valida';
$_['text_card_message_V6013'] 	= 'Numero di fattura non valido';
$_['text_card_message_V6014'] 	= 'Riferimento fattura invalido';
$_['text_card_message_V6015'] 	= 'Codice valuta non valido';
$_['text_card_message_V6016'] 	= 'Pagamento richiesto';
$_['text_card_message_V6017'] 	= 'Codice di pagamento richiesto';
$_['text_card_message_V6018'] 	= 'Codice valuta di pagamento sconosciuto';
$_['text_card_message_V6021'] 	= 'Nome del titolare della carta richiesto';
$_['text_card_message_V6022'] 	= 'Numero della carta richiesto';
$_['text_card_message_V6023'] 	= 'CVN richiesto';
$_['text_card_message_V6031'] 	= 'Numero di carta non valido';
$_['text_card_message_V6032'] 	= 'CVN non valido';
$_['text_card_message_V6033'] 	= 'Data di scadenza non valida';
$_['text_card_message_V6034'] 	= 'Numero di problema non valido';
$_['text_card_message_V6035'] 	= 'Data di inizio non valida';
$_['text_card_message_V6036'] 	= 'Mese non valido';
$_['text_card_message_V6037'] 	= 'Anno non valido';
$_['text_card_message_V6040'] 	= 'ID cliente token non valido';
$_['text_card_message_V6041'] 	= 'Cliente richiesto';
$_['text_card_message_V6042'] 	= 'Nome del cliente richiesto';
$_['text_card_message_V6043'] 	= 'Cognome richiesto dal cliente';
$_['text_card_message_V6044'] 	= 'Codice Paese Cliente Richiesto';
$_['text_card_message_V6045'] 	= 'Titolo del cliente richiesto';
$_['text_card_message_V6046'] 	= 'ID cliente token richiesto';
$_['text_card_message_V6047'] 	= 'RedirectURL richiesto';
$_['text_card_message_V6051'] 	= 'Nome non valido';
$_['text_card_message_V6052'] 	= 'Cognome non valido';
$_['text_card_message_V6053'] 	= 'Codice Paese non valido';
$_['text_card_message_V6054'] 	= 'E-mail non valido';
$_['text_card_message_V6055'] 	= 'Telefono non valido';
$_['text_card_message_V6056'] 	= 'Mobile non valido';
$_['text_card_message_V6057'] 	= 'Fax non valido';
$_['text_card_message_V6058'] 	= 'Titolo non valido';
$_['text_card_message_V6059'] 	= 'URL di reindirizzamento non valido';
$_['text_card_message_V6060'] 	= 'URL di reindirizzamento non valido';
$_['text_card_message_V6061'] 	= 'Riferimento non valido';
$_['text_card_message_V6062'] 	= 'Nome dell\'azienda non valido';
$_['text_card_message_V6063'] 	= 'Descrizione del lavoro non valida';
$_['text_card_message_V6064'] 	= 'Street1 non valido';
$_['text_card_message_V6065'] 	= 'Street2 non valido';
$_['text_card_message_V6066'] 	= 'Città non valida';
$_['text_card_message_V6067'] 	= 'Stato non valido';
$_['text_card_message_V6068'] 	= 'Codice postale non valido';
$_['text_card_message_V6069'] 	= 'E-mail non valido';
$_['text_card_message_V6070'] 	= 'Telefono non valido';
$_['text_card_message_V6071'] 	= 'Mobile non valido';
$_['text_card_message_V6072'] 	= 'Commenti non validi';
$_['text_card_message_V6073'] 	= 'Fax non valido';
$_['text_card_message_V6074'] 	= 'URL non valido';
$_['text_card_message_V6075'] 	= 'Nome indirizzo di spedizione non valido';
$_['text_card_message_V6076'] 	= 'Cognome per indirizzo di spedizione non valido';
$_['text_card_message_V6077'] 	= 'Indirizzo di spedizione non valido Street1';
$_['text_card_message_V6078'] 	= 'Indirizzo di spedizione non valido Street2';
$_['text_card_message_V6079'] 	= 'Città indirizzo di spedizione non valido';
$_['text_card_message_V6080'] 	= 'Stato dell\'indirizzo di spedizione non valido';
$_['text_card_message_V6081'] 	= 'Codice postale di spedizione non valido';
$_['text_card_message_V6082'] 	= 'Email indirizzo di spedizione non valido';
$_['text_card_message_V6083'] 	= 'Telefono indirizzo di spedizione non valido';
$_['text_card_message_V6084'] 	= 'Paese indirizzo di spedizione non valido';
$_['text_card_message_V6091'] 	= 'Codice paese sconosciuto';
$_['text_card_message_V6100'] 	= 'Nome della carta non valido';
$_['text_card_message_V6101'] 	= 'Mese di scadenza della carta non valida';
$_['text_card_message_V6102'] 	= 'Anno di scadenza della carta non valida';
$_['text_card_message_V6103'] 	= 'Mese di inizio della carta non valida';
$_['text_card_message_V6104'] 	= 'Anno di inizio della carta non valida';
$_['text_card_message_V6105'] 	= 'Numero di emissione della carta non valido';
$_['text_card_message_V6106'] 	= 'CVN non valido';
$_['text_card_message_V6107'] 	= 'Codice d\'accesso invalido';
$_['text_card_message_V6108'] 	= 'CustomerHostAddress non valido';
$_['text_card_message_V6109'] 	= 'UserAgent non valido';
$_['text_card_message_V6110'] 	= 'Numero di carta non valido';
$_['text_card_message_V6111'] 	= 'Accesso API non autorizzato, account non certificato PCI';
$_['text_card_message_V6112'] 	= 'Dati della carta ridondanti diversi dall\'anno di scadenza e dal mese';
$_['text_card_message_V6113'] 	= 'Transazione non valida per il rimborso';
$_['text_card_message_V6114'] 	= 'Errore di convalida del gateway';
$_['text_card_message_V6115'] 	= 'DirectRefundRequest non valido, ID transazione';
$_['text_card_message_V6116'] 	= 'Dati della carta non validi sul TransactionID originale';
$_['text_card_message_V6124'] 	= 'Elementi pubblicitari non validi. Gli elementi pubblicitari sono stati forniti, tuttavia i totali non corrispondono al campo TotalAmount';
$_['text_card_message_V6125'] 	= 'Tipo di pagamento selezionato non abilitato';
$_['text_card_message_V6126'] 	= 'Numero di carta cifrata non valido, decifratura fallita';
$_['text_card_message_V6127'] 	= 'Cvn criptato non valido, decrittografia fallita';
$_['text_card_message_V6128'] 	= 'Metodo non valido per il tipo di pagamento';
$_['text_card_message_V6129'] 	= 'La transazione non è stata autorizzata per Cattura /Annullamento';
$_['text_card_message_V6130'] 	= 'Errore generico di informazione del cliente';
$_['text_card_message_V6131'] 	= 'Errore di spedizione generico';
$_['text_card_message_V6132'] 	= 'La transazione è già stata completata o annullata, operazione non consentita';
$_['text_card_message_V6133'] 	= 'Checkout non disponibile per il tipo di pagamento';
$_['text_card_message_V6134'] 	= 'ID transazione di autenticazione non valido per Capture /Void';
$_['text_card_message_V6135'] 	= 'Rimborso errore elaborazione PayPal';
$_['text_card_message_V6140'] 	= 'L\'account commerciante è sospeso';
$_['text_card_message_V6141'] 	= 'Dettagli dell\'account PayPal o firma API non validi';
$_['text_card_message_V6142'] 	= 'Autorizzazione non disponibile per Banca /Filiale';
$_['text_card_message_V6150'] 	= 'Importo del rimborso non valido';
$_['text_card_message_V6151'] 	= 'Importo del rimborso superiore alla transazione originale';
$_['text_card_message_D4406'] 	= 'Errore sconosciuto';
$_['text_card_message_S5010'] 	= 'Errore sconosciuto';