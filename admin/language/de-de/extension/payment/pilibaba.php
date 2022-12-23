<?php
// Heading
$_['heading_title']         = 'Pilibaba für die chinesische Kasse';

// Tab
$_['tab_register']          = 'Registrieren';
$_['tab_settings']          = 'die Einstellungen';

// Text
$_['text_extension']        = 'Erweiterungen';
$_['text_success']          = 'Erfolg: Sie haben das Pilibaba-Zahlungsmodul! geändert';
$_['text_edit']             = 'Bearbeiten Sie Pilibaba';
$_['text_pilibaba']         = '<a href="http://www.pilibaba.com" target="_blank"><img src="view/image/payment/pilibaba.png" alt="Pilibaba" title="Pilibaba"></a>';
$_['text_live']             = 'Leben';
$_['text_test']             = 'Prüfung';
$_['text_payment_info']     = 'Zahlungsinformationen';
$_['text_order_id']         = 'Auftragsnummer';
$_['text_amount']           = 'Menge';
$_['text_fee']              = 'Gebühr';
$_['text_date_added']       = 'Datum hinzugefügt';
$_['text_tracking']         = 'Verfolgung';
$_['text_barcode']          = 'Barcode';
$_['text_barcode_info']     = '(Drucken Sie diesen einzigartigen Barcode aus und kleben Sie ihn auf die Oberfläche des Pakets)';
$_['text_confirm']          = 'Möchten Sie die Verfolgungsnummer? wirklich aktualisieren?';
$_['text_register_success'] = 'Sie haben sich erfolgreich registriert. Sie sollten in Kürze eine E-Mail erhalten.';
$_['text_tracking_success'] = 'Die Tracking-Nummer wurde erfolgreich aktualisiert.';
$_['text_other']            = 'Andere';
$_['text_email']            = 'Die registrierte E-Mail-Adresse für Ihr Pilibaba-Konto lautet %s';

// Entry
$_['entry_email_address']   = 'E-Mail-Addresse';
$_['entry_password']        = 'Passwort';
$_['entry_currency']        = 'Währung';
$_['entry_warehouse']       = 'Warenhaus';
$_['entry_country']         = 'Land';
$_['entry_merchant_number'] = 'Händlernummer';
$_['entry_secret_key']      = 'Geheimer Schlüssel';
$_['entry_environment']     = 'Umgebung';
$_['entry_shipping_fee']    = 'Versandgebühr';
$_['entry_order_status']    = 'Bestellstatus';
$_['entry_status']          = 'Status';
$_['entry_logging']         = 'Debug Protokollierung';
$_['entry_sort_order']      = 'Sortierreihenfolge';

// Help
$_['help_email_address']    = 'Bitte geben Sie die E-Mail-Adresse für den Inhaber dieses Geschäfts ein.';
$_['help_password']         = 'Bitte geben Sie ein Passwort zwischen 8 und 30 Zeichen ein.';
$_['help_currency']         = 'Wählen Sie die auf Ihrer Website verwendete Währung aus und ziehen Sie sie auf Ihr Bankkonto zurück.';
$_['help_warehouse']        = 'Wählen Sie das nächstgelegene Lagerhaus, zu dem Sie versenden möchten. Wenn Sie Bestellungen von chinesischen Kunden erhalten (via Pilibaba Gateway), können Sie Pakete an dieses Lager liefern.';
$_['help_country']          = 'Sagen Sie uns Ihr Land, und wir informieren Sie sobald ein Lager in diesem Land geöffnet ist.';
$_['help_merchant_number']  = 'Ihre persönliche Pilibaba Kontonummer.';
$_['help_secret_key']       = 'Ihr geheimer Schlüssel zum Zugriff auf die Pilibaba API.';
$_['help_shipping_fee']     = 'Die Versandkosten von Ihrem Lager zum Pilibaba Lager. Verwenden Sie zwei Dezimalstellen.';
$_['help_order_status']     = 'Der Bestellstatus nachdem der Kunde die Bestellung aufgegeben hat.';
$_['help_total']            = 'Die Checkout-Summe, die der Auftrag erreichen muss, bevor diese Zahlungsmethode aktiv wird. Muss ein Wert ohne Währungszeichen sein.';
$_['help_logging']          = 'Wenn Sie Debug aktivieren, werden vertrauliche Daten in eine Protokolldatei geschrieben. Sie sollten immer deaktivieren, wenn Sie nicht anders angewiesen sind.';

// Error
$_['error_warning']         = 'Achtung: Bitte überprüfen Sie das Formular sorgfältig auf Fehler!';
$_['error_permission']      = 'Warnung: Sie sind nicht berechtigt, die Zahlung Pilibaba! zu ändern';
$_['error_merchant_number'] = 'Händlernummer erforderlich!';
$_['error_secret_key']      = 'Geheimschlüssel erforderlich!';
$_['error_shipping_fee']    = 'Versandkosten müssen eine Dezimalzahl! sein';
$_['error_not_enabled']     = 'Modul nicht aktiviert!';
$_['error_data_missing']    = 'Daten fehlen!';
$_['error_tracking_length'] = 'Tracking-Nummer muss zwischen 1 und 50 Zeichen! sein';
$_['error_email_address']   = 'Bitte geben Sie Ihre E-Mail-Adresse! ein';
$_['error_email_invalid']   = 'Die E-Mail-Adresse ist nicht gültig!';
$_['error_password']        = 'Das Passwort muss mindestens 8 Zeichen enthalten!';
$_['error_currency']        = 'Bitte wählen Sie eine Währung!';
$_['error_warehouse']       = 'Bitte wählen Sie ein Lagerhaus!';
$_['error_country']         = 'Bitte wählen Sie ein Land!';
$_['error_weight']          = 'Bitte ändern Sie Ihre Einstellung <a href="%s"> Gewichtsklasse </a> in Gramm. Es befindet sich in \'System -> Einstellungen \' auf der Registerkarte \'Lokal \'.';
$_['error_bad_response']    = 'Eine ungültige Antwort wurde empfangen. Bitte versuche es später erneut.';

// Button
$_['button_register']       = 'Registrieren';
$_['button_tracking']       = 'Tracking-Nummer aktualisieren';
$_['button_barcode']        = 'Barcode generieren';