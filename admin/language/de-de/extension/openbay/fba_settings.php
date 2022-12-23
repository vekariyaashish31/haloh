<?php
// Headings
$_['heading_title']        	   = 'die Einstellungen';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Abwicklung durch Amazon';

// Text
$_['text_success']     		   = 'Deine Einstellungen wurden gespeichert';
$_['text_status']         	   = 'Status';
$_['text_account_ok']  		   = 'Verbindung zu Fulfillment von Amazon OK';
$_['text_api_ok']       	   = 'API-Verbindung OK';
$_['text_api_status']          = 'API-Verbindung';
$_['text_edit']           	   = 'Bearbeiten Sie die Erfüllung durch Amazon-Einstellungen';
$_['text_standard']            = 'Standard';
$_['text_expedited']           = 'Beschleunigt';
$_['text_priority']            = 'Priorität';
$_['text_fillorkill']          = 'Füllen oder töten';
$_['text_fillall']             = 'Fülle alle aus';
$_['text_fillallavailable']    = 'Füllen Sie alle verfügbaren aus';
$_['text_prefix_warning']      = 'Ändern Sie diese Einstellung nicht, nachdem Bestellungen an Amazon gesendet wurden, sondern nur bei der Erstinstallation.';
$_['text_disabled_cancel']     = 'Deaktiviert - Erledigungen nicht automatisch stornieren';
$_['text_validate_success']    = 'Ihre API-Details funktionieren ordnungsgemäß! Sie müssen speichern drücken, um sicherzustellen, dass die Einstellungen gespeichert werden.';
$_['text_register_banner']     = 'Klicken Sie hier, wenn Sie sich für ein Konto registrieren müssen';

// Entry
$_['entry_api_key']            = 'API-Token';
$_['entry_encryption_key']     = 'Verschlüsselungsschlüssel 1';
$_['entry_encryption_iv']      = 'Verschlüsselungsschlüssel 2';
$_['entry_account_id']         = 'Konto-ID';
$_['entry_send_orders']        = 'Senden Sie Bestellungen automatisch';
$_['entry_fulfill_policy']     = 'Erfüllungspolitik';
$_['entry_shipping_speed']     = 'Standardversandgeschwindigkeit';
$_['entry_debug_log']          = 'Aktivieren Sie die Debugprotokollierung';
$_['entry_new_order_status']   = 'Neuer Erfüllungstrigger';
$_['entry_order_id_prefix']    = 'Bestell-ID-Präfix';
$_['entry_only_fill_complete'] = 'Alle Gegenstände müssen FBA sein';

// Help
$_['help_api_key']             = 'Dies ist Ihr API-Token, erhalten Sie dies in Ihrem OpenBay Pro-Kontobereich';
$_['help_encryption_key']      = 'Dies ist Ihr Verschlüsselungsschlüssel #1, den Sie über Ihren OpenBay Pro-Kontobereich erhalten';
$_['help_encryption_iv']       = 'Dies ist Ihr Verschlüsselungscode #2, den Sie über Ihren OpenBay Pro-Kontobereich erhalten';
$_['help_account_id']          = 'Dies ist die Konto-ID, die mit dem registrierten Amazon-Konto für OpenBay Pro übereinstimmt, erhalten Sie diese in Ihrem OpenBay Pro-Kontobereich';
$_['help_send_orders']  	   = 'Bestellungen, die übereinstimmende Fulfillment-Produkte von Amazon enthalten, werden automatisch an Amazon gesendet';
$_['help_fulfill_policy']  	   = 'Die Standard-Erfüllungsrichtlinie (FillAll - Alle erfüllbaren Artikel in der Fulfillment-Bestellung werden versandt. Die Fulfillment-Bestellung verbleibt in einem Bearbeitungsstatus, bis alle Artikel entweder von Amazon versandt oder vom Verkäufer storniert wurden. FillAllAvailable - Alle erfüllbaren Artikel in der Fulfillment-Bestellung werden versandt Alle nicht erfüllbaren Artikel in der Bestellung werden durch Amazon.FillOrKill storniert - Wenn ein Artikel in einer Fulfillment-Bestellung als nicht erfüllbar erkannt wird, bevor eine Sendung in der Bestellung in den Status Ausstehend wechselt (der Prozess der Kommissionierung von Einheiten aus dem Inventar hat begonnen), dann Der gesamte Auftrag gilt als nicht erfüllbar.Wenn jedoch ein Artikel in einem Fulfillment-Auftrag als nicht erfüllbar ermittelt wird, nachdem eine Lieferung in den Status "Ausstehend" verschoben wurde, storniert Amazon so viel wie möglich vom Erfüllungsauftrag.';
$_['help_shipping_speed']  	   = 'Dies ist die Standardkategorie für die Versandgeschwindigkeit, die für neue Bestellungen gilt. Unterschiedliche Service-Levels können unterschiedliche Kosten verursachen';
$_['help_debug_log']  		   = 'Debug-Protokolle protokollieren Informationen zu Aktionen des Moduls in einer Protokolldatei. Dies sollte aktiviert bleiben, um die Ursache von Problemen zu finden.';
$_['help_new_order_status']    = 'Dies ist der Auftragsstatus, der den Auftrag zur Erfüllung auslöst. Stellen Sie sicher, dass ein Status nur verwendet wird, nachdem Sie die Zahlung erhalten haben.';
$_['help_order_id_prefix']     = 'Mit einem Bestell-Präfix können Sie Bestellungen identifizieren, die aus Ihrem Geschäft stammen, nicht aus anderen Integrationen. Dies ist sehr hilfreich, wenn Händler auf vielen Marktplätzen verkaufen und FBA verwenden';
$_['help_only_fill_complete']  = 'Dadurch können nur Bestellungen zur Erfüllung gesendet werden, wenn ALLE Artikel in der Bestellung mit einem Artikel von Fulfillment by Amazon übereinstimmen. Wenn ein Artikel nicht vorhanden ist, bleibt die gesamte Bestellung ungefüllt.';

// Error
$_['error_api_connect']        = 'Fehler beim Verbinden mit der API';
$_['error_account_info']       = 'Die API-Verbindung zu Fulfillment by Amazon konnte nicht überprüft werden';
$_['error_api_key']    		   = 'Das API-Token ist ungültig';
$_['error_api_account_id']     = 'Die Konto-ID ist ungültig';
$_['error_encryption_key']     = 'Der Verschlüsselungsschlüssel #1 ist ungültig';
$_['error_encryption_iv']      = 'Der Verschlüsselungsschlüssel #2 ist ungültig';
$_['error_validation']    	   = 'Beim Überprüfen Ihrer Daten ist ein Fehler aufgetreten';

// Tabs
$_['tab_api_info']             = 'API-Details';

// Buttons
$_['button_verify']            = 'Überprüfen Sie die Details';
