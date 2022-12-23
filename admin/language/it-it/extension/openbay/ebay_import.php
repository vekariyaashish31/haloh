<?php
// Heading
$_['heading_title']              = 'Importazione dell\'articolo';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'eBay';

// Text
$_['text_sync_import_line1']     = '<strong> Caution! </strong> Ciò importerà tutti i tuoi prodotti eBay e creerà una struttura di categoria nel tuo negozio. Si consiglia di eliminare tutte le categorie e i prodotti prima di eseguire questa opzione. <br /> La struttura della categoria appartiene alle normali categorie eBay, non alle categorie del tuo negozio (se hai un negozio eBay). Puoi rinominare, rimuovere e modificare le categorie importate senza intaccare i tuoi prodotti eBay.';
$_['text_sync_import_line3']     = 'È necessario assicurarsi che il server possa accettare ed elaborare ampie dimensioni di dati POST. 1000 oggetti eBay hanno una dimensione di circa 40 Mb, è necessario calcolare ciò che si richiede. Se la tua chiamata fallisce, è probabile che le tue impostazioni siano troppo piccole. Il limite di memoria PHP deve essere di circa 128 Mb.';
$_['text_sync_server_size']      = 'Attualmente il tuo server può accettare:';
$_['text_sync_memory_size']      = 'Il limite di memoria PHP:';
$_['text_import_confirm']		 = 'Questo importerà tutti i tuoi oggetti eBay come nuovi prodotti, sei sicuro? Questo NON può essere annullato! ASSICURATI di avere un backup prima!';
$_['text_import_notify']		 = 'La tua richiesta di importazione è stata inviata per l\'elaborazione. Un\'importazione richiede circa 1 ora ogni 1000 articoli.';
$_['text_import_images_msg1']    = 'le immagini sono in attesa di importazione /copia da eBay. Aggiorna questa pagina, se il numero non diminuisce allora';
$_['text_import_images_msg2']    = 'clicca qui';
$_['text_import_images_msg3']    = 'e aspetta. Maggiori informazioni sul motivo per cui questo è accaduto possono essere trovati <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> qui </a>';

// Entry
$_['entry_import_item_advanced'] = 'Ottieni dati avanzati';
$_['entry_import_categories']    = 'Importa categorie';
$_['entry_import_description']	 = 'Importa le descrizioni degli oggetti';
$_['entry_import']				 = 'Importa oggetti eBay';

// Buttons
$_['button_import']				 = 'Importare';
$_['button_complete']			 = 'Completare';

// Help
$_['help_import_item_advanced']  = 'Richiederà fino a 10 volte più tempo per importare oggetti. Importa pesi, taglie, ISBN e altro se disponibile';
$_['help_import_categories']     = 'Crea una struttura di categorie nel tuo negozio dalle categorie eBay';
$_['help_import_description']    = 'Questo importerà tutto compreso HTML, contatori visita ecc';

// Error
$_['error_import']               = 'Caricamento fallito';
$_['error_maintenance']			 = 'Il tuo negozio è in modalità manutenzione. L\'importazione fallirà!';
$_['error_ajax_load']			 = 'impossibile connettersi al server';
$_['error_validation']			 = 'Devi registrarti per il tuo token API e abilitare il modulo.';