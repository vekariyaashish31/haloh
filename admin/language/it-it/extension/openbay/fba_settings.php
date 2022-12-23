<?php
// Headings
$_['heading_title']        	   = 'impostazioni';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Adempimento da parte di Amazon';

// Text
$_['text_success']     		   = 'Le tue impostazioni sono state salvate';
$_['text_status']         	   = 'Stato';
$_['text_account_ok']  		   = 'Connessione ad Adempimento da parte di Amazon OK';
$_['text_api_ok']       	   = 'Connessione API OK';
$_['text_api_status']          = 'Connessione API';
$_['text_edit']           	   = 'Modifica il Fulfillment in base alle impostazioni di Amazon';
$_['text_standard']            = 'Standard';
$_['text_expedited']           = 'Expedited';
$_['text_priority']            = 'Priorità';
$_['text_fillorkill']          = 'Riempi o Uccidi';
$_['text_fillall']             = 'Riempi tutto';
$_['text_fillallavailable']    = 'Riempi tutti disponibili';
$_['text_prefix_warning']      = 'Non modificare questa impostazione dopo che gli ordini sono stati inviati ad Amazon, impostalo solo al momento della prima installazione.';
$_['text_disabled_cancel']     = 'Disabilitato: non annullare automaticamente gli adempimenti';
$_['text_validate_success']    = 'I dettagli dell\'API funzionano correttamente! È necessario premere Salva per garantire che le impostazioni vengano salvate.';
$_['text_register_banner']     = 'Clicca qui se hai bisogno di registrarti per un account';

// Entry
$_['entry_api_key']            = 'Token API';
$_['entry_encryption_key']     = 'Chiave di crittografia 1';
$_['entry_encryption_iv']      = 'Chiave di crittografia 2';
$_['entry_account_id']         = 'Account ID';
$_['entry_send_orders']        = 'Invia ordini automaticamente';
$_['entry_fulfill_policy']     = 'Politica di adempimento';
$_['entry_shipping_speed']     = 'Velocità di spedizione predefinita';
$_['entry_debug_log']          = 'Abilita la registrazione di debug';
$_['entry_new_order_status']   = 'Nuovo trigger di adempimento';
$_['entry_order_id_prefix']    = 'Prefisso ID ordine';
$_['entry_only_fill_complete'] = 'Tutti gli articoli devono essere FBA';

// Help
$_['help_api_key']             = 'Questo è il tuo token API, ottieni questo dalla tua area di account OpenBay Pro';
$_['help_encryption_key']      = 'Questa è la tua chiave di crittografia #1, ottieni questo dalla tua area di account di OpenBay Pro';
$_['help_encryption_iv']       = 'Questa è la tua chiave di crittografia #2, ottieni questo dalla tua area di account di OpenBay Pro';
$_['help_account_id']          = 'Questo è l\'ID account che corrisponde all\'account Amazon registrato per OpenBay Pro, ottenere questo dall\'area del tuo account OpenBay Pro';
$_['help_send_orders']  	   = 'Gli ordini contenenti i prodotti corrispondenti Fulfillment by Amazon verranno inviati automaticamente ad Amazon';
$_['help_fulfill_policy']  	   = 'Il criterio di adempimento predefinito (FillAll - Tutti gli articoli soddisfabili nell\'ordine di evasione vengono spediti.L\'ordine di adempimento rimane in uno stato di elaborazione fino a quando tutti gli articoli non sono spediti da Amazon o annullati dal venditore.CompletaTuttiDisponibili - Tutti gli articoli soddisfabili nell\'ordine di evasione vengono spediti Tutti gli oggetti inutilizzati nell\'ordine vengono annullati da Amazon.FillOrKill - Se un oggetto in un ordine di evasione viene considerato non più eseguibile prima che qualsiasi spedizione nell\'ordine passi allo stato In attesa (il processo di prelievo delle unità dall\'inventario è iniziato), quindi l\'intero ordine è considerato non attuabile, tuttavia, se un articolo in un ordine di evasione viene dichiarato non soddisfacibile dopo che una spedizione nell\'ordine passa allo stato In sospeso, Amazon annulla il maggior numero possibile di ordini di evasione ordini).';
$_['help_shipping_speed']  	   = 'Questa è la categoria di velocità di spedizione predefinita da applicare ai nuovi ordini, i diversi livelli di servizio possono comportare costi diversi';
$_['help_debug_log']  		   = 'I registri di debug registreranno le informazioni in un file di registro sulle azioni eseguite dal modulo. Questo dovrebbe essere lasciato abilitato per aiutare a trovare la causa di eventuali problemi.';
$_['help_new_order_status']    = 'Questo è lo stato dell\'ordine che attiverà l\'ordine da creare per l\'adempimento. Assicurati che questo stia usando uno stato solo dopo aver ricevuto il pagamento.';
$_['help_order_id_prefix']     = 'Avere un prefisso di ordine aiuterà a identificare gli ordini che provengono dal tuo negozio non da altre integrazioni. Questo è molto utile quando i commercianti vendono su molti mercati e usano FBA';
$_['help_only_fill_complete']  = 'Ciò consentirà l\'invio degli ordini per l\'evasione se TUTTI gli articoli nell\'ordine sono abbinati a un oggetto Fulfillment by Amazon. Se qualche articolo non è quindi l\'intero ordine rimarrà non riempito.';

// Error
$_['error_api_connect']        = 'Impossibile connettersi all\'API';
$_['error_account_info']       = 'Impossibile verificare la connessione API ad Adempimento da parte di Amazon';
$_['error_api_key']    		   = 'Il token API non è valido';
$_['error_api_account_id']     = 'L\'ID account non è valido';
$_['error_encryption_key']     = 'Il codice di crittografia #1 non è valido';
$_['error_encryption_iv']      = 'Il codice di crittografia #2 non è valido';
$_['error_validation']    	   = 'Si è verificato un errore durante la convalida dei tuoi dettagli';

// Tabs
$_['tab_api_info']             = 'Dettagli API';

// Buttons
$_['button_verify']            = 'Verifica i dettagli';
