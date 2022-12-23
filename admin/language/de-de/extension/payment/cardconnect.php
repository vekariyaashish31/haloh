<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'die Einstellungen';
$_['tab_order_status']              = 'Bestellstatus';

// Text
$_['text_extension']                = 'Erweiterungen';
$_['text_success']                  = 'Erfolg: Sie haben das CardConnect-Zahlungsmodul! geändert';
$_['text_edit']                     = 'Bearbeiten Sie CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Zahlung';
$_['text_authorize']                = 'Autorisieren';
$_['text_live']                     = 'Leben';
$_['text_test']                     = 'Prüfung';
$_['text_no_cron_time']             = 'Der Cron wurde noch nicht ausgeführt';
$_['text_payment_info']             = 'Zahlungsinformationen';
$_['text_payment_method']           = 'Bezahlverfahren';
$_['text_card']                     = 'Karte';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Referenz';
$_['text_update']                   = 'Aktualisieren';
$_['text_order_total']              = 'Bestellsumme';
$_['text_total_captured']           = 'Insgesamt erfasst';
$_['text_capture_payment']          = 'Erfassen Sie die Zahlung';
$_['text_refund_payment']           = 'Zahlung zurückerstatten';
$_['text_void']                     = 'Leere';
$_['text_transactions']             = 'Transaktionen';
$_['text_column_type']              = 'Art';
$_['text_column_reference']         = 'Referenz';
$_['text_column_amount']            = 'Menge';
$_['text_column_status']            = 'Status';
$_['text_column_date_modified']     = 'Datum geändert';
$_['text_column_date_added']        = 'Datum hinzugefügt';
$_['text_column_update']            = 'Aktualisieren';
$_['text_column_void']              = 'Leere';
$_['text_confirm_capture']          = 'Möchten Sie die Zahlung? wirklich erfassen?';
$_['text_confirm_refund']           = 'Möchten Sie die Zahlung? wirklich erstatten?';
$_['text_inquire_success']          = 'Anfrage war erfolgreich';
$_['text_capture_success']          = 'Capture-Anfrage war erfolgreich';
$_['text_refund_success']           = 'Rückerstattungsantrag war erfolgreich';
$_['text_void_success']             = 'Void-Anfrage war erfolgreich';

// Entry
$_['entry_merchant_id']             = 'Händler-ID';
$_['entry_api_username']            = 'API-Benutzername';
$_['entry_api_password']            = 'API-Passwort';
$_['entry_token']                   = 'Geheimes Token';
$_['entry_transaction']             = 'Transaktion';
$_['entry_environment']             = 'Umgebung';
$_['entry_site']                    = 'Seite? ˅';
$_['entry_store_cards']             = 'Speicherkarten';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Gesamt';
$_['entry_geo_zone']                = 'Geo-Zone';
$_['entry_status']                  = 'Status';
$_['entry_logging']                 = 'Debug Protokollierung';
$_['entry_sort_order']              = 'Sortierreihenfolge';
$_['entry_cron_url']                = 'Cron-Job-URL';
$_['entry_cron_time']               = 'Cron Job letzten Lauf';
$_['entry_order_status_pending']    = 'steht aus';
$_['entry_order_status_processing'] = 'wird bearbeitet';

// Help
$_['help_merchant_id']              = 'Ihre persönliche CardConnect-Account-Händler-ID.';
$_['help_api_username']             = 'Ihr Benutzername für den Zugriff auf die CardConnect API.';
$_['help_api_password']             = 'Ihr Passwort für den Zugriff auf die CardConnect API.';
$_['help_token']                    = 'Geben Sie ein zufälliges Token für die Sicherheit ein oder verwenden Sie das generierte.';
$_['help_transaction']              = 'Wählen Sie \ "Zahlung \", um die Zahlung sofort zu erfassen, oder \ "Autorisieren \", um sie zu genehmigen.';
$_['help_site']                     = 'Dies bestimmt den ersten Teil der API-URL. Ändern Sie nur, wenn Sie angewiesen werden.';
$_['help_store_cards']              = 'Ob Sie Karten mit Tokenization speichern möchten.';
$_['help_echeck']                   = 'Ob Sie die Möglichkeit bieten möchten, mit einem eCheck zu bezahlen.';
$_['help_total']                    = 'Die Checkout-Summe, die der Auftrag erreichen muss, bevor diese Zahlungsmethode aktiv wird. Muss ein Wert ohne Währungszeichen sein.';
$_['help_logging']                  = 'Wenn Sie Debug aktivieren, werden vertrauliche Daten in eine Protokolldatei geschrieben. Sie sollten immer deaktivieren, wenn Sie nicht anders angewiesen sind.';
$_['help_cron_url']                 = 'Legen Sie einen Cron-Job fest, um diese URL aufzurufen, damit die Aufträge automatisch aktualisiert werden. Es wurde entwickelt, um ein paar Stunden nach der letzten Erfassung eines Geschäftstages ausgeführt zu werden.';
$_['help_cron_time']                = 'Dies ist das letzte Mal, dass die Cron-Job-URL ausgeführt wurde.';
$_['help_order_status_pending']     = 'Der Bestellstatus, wenn die Bestellung vom Händler genehmigt werden muss.';
$_['help_order_status_processing']  = 'Der Bestellstatus, wenn der Auftrag automatisch erfasst wird.';

// Button
$_['button_inquire_all']            = 'Alle anfragen';
$_['button_capture']                = 'Erfassung';
$_['button_refund']                 = 'Rückerstattung';
$_['button_void_all']               = 'Alles ungültig machen';
$_['button_inquire']                = 'Anfragen';
$_['button_void']                   = 'Leere';

// Error
$_['error_permission']              = 'Warnung: Sie sind nicht berechtigt, die Zahlung CardConnect! zu ändern';
$_['error_merchant_id']             = 'Händler-ID erforderlich!';
$_['error_api_username']            = 'API Benutzername Erforderlich!';
$_['error_api_password']            = 'API-Passwort erforderlich!';
$_['error_token']                   = 'Geheimer Token erforderlich!';
$_['error_site']                    = 'Website erforderlich!';
$_['error_amount_zero']             = 'Der Betrag muss höher als null! sein';
$_['error_no_order']                = 'Keine passende Bestellung info!';
$_['error_invalid_response']        = 'Ungültige Antwort erhalten!';
$_['error_data_missing']            = 'Fehlende Daten!';
$_['error_not_enabled']             = 'Modul nicht aktiviert!';