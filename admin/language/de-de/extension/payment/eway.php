<?php
// Heading
$_['heading_title']				= 'eWAY Zahlung';

// Text
$_['text_extension']			= 'Erweiterungen';
$_['text_success']				= 'Erfolg: Sie haben Ihre eWAY-Details! geändert';
$_['text_edit']					= 'Bearbeite eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Genehmigung';
$_['text_sale']					= 'Verkauf';
$_['text_transparent']			= 'Transparente Weiterleitung (Zahlungsformular vor Ort)';
$_['text_iframe']				= 'IFrame (Zahlungsformular im Fenster)';

// Entry
$_['entry_paymode']				= 'Zahlungsart';
$_['entry_test']				= 'Testmodus';
$_['entry_order_status']		= 'Bestellstatus';
$_['entry_order_status_refund'] = 'Status der Bestellung ohne Rückerstattung';
$_['entry_order_status_auth']	= 'Autorisierter Bestellstatus';
$_['entry_order_status_fraud']	= 'Verdacht auf Betrugsstatus';
$_['entry_status']				= 'Status';
$_['entry_username']			= 'eWAY-API-Schlüssel';
$_['entry_password']			= 'eWAY Passwort';
$_['entry_payment_type']		= 'Zahlungsart';
$_['entry_geo_zone']			= 'Geo-Zone';
$_['entry_sort_order']			= 'Sortierreihenfolge';
$_['entry_transaction_method']	= 'Transaktionsmethode';

// Error
$_['error_permission']			= 'Warnung: Sie sind nicht berechtigt, das eWAY-Zahlungsmodul zu ändern';
$_['error_username']			= 'Der eWAY-API-Schlüssel ist erforderlich!';
$_['error_password']			= 'eWAY Passwort ist erforderlich!';
$_['error_payment_type']		= 'Mindestens eine Zahlungsart ist erforderlich!';

// Help hints
$_['help_testmode']				= 'Wählen Sie Ja, um die eWAY Sandbox zu verwenden.';
$_['help_username']				= 'Dein eWAY API Key von deinem MYeWAY Account.';
$_['help_password']				= 'Dein eWAY API Passwort von deinem MYeWAY Account.';
$_['help_transaction_method']	= 'Die Autorisierung ist nur für australische Banken verfügbar';

// Order page - payment tab
$_['text_payment_info']			= 'Zahlungsinformationen';
$_['text_order_total']			= 'Insgesamt autorisiert';
$_['text_transactions']			= 'Transaktionen';
$_['text_column_transactionid'] = 'eWAY Transaktions-ID';
$_['text_column_amount']		= 'Menge';
$_['text_column_type']			= 'Art';
$_['text_column_created']		= 'Erstellt';
$_['text_total_captured']		= 'Total erfasst';
$_['text_capture_status']		= 'Zahlung erfasst';
$_['text_void_status']			= 'Zahlung storniert';
$_['text_refund_status']		= 'Zahlung zurückerstattet';
$_['text_total_refunded']		= 'Insgesamt zurückerstattet';
$_['text_refund_success']		= 'Rückerstattung succeed!';
$_['text_capture_success']		= 'Erfassung erfolgreich!';
$_['text_refund_failed']		= 'Rückerstattung fehlgeschlagen:';
$_['text_capture_failed']		= 'Erfassung fehlgeschlagen:';
$_['text_unknown_failure']		= 'Ungültige Bestellung oder Betrag';

$_['text_confirm_capture']		= 'Möchten Sie die Zahlung? wirklich erfassen?';
$_['text_confirm_release']		= 'Sind Sie sicher, dass Sie die Zahlung ? freigeben möchten?';
$_['text_confirm_refund']		= 'Möchten Sie die Zahlung? wirklich erstatten?';

$_['text_empty_refund']			= 'Bitte geben Sie einen Betrag ein, der erstattet werden soll';
$_['text_empty_capture']		= 'Bitte geben Sie einen Betrag ein, der erfasst werden soll';

$_['btn_refund']				= 'Rückerstattung';
$_['btn_capture']				= 'Erfassung';

// Validation Error codes
$_['text_card_message_V6000']	= 'Nicht definierter Validierungsfehler';
$_['text_card_message_V6001'] 	= 'Ungültige Kunden-IP';
$_['text_card_message_V6002'] 	= 'Ungültige Geräte-ID';
$_['text_card_message_V6011'] 	= 'Ungültige Menge';
$_['text_card_message_V6012'] 	= 'Ungültige Rechnungsbeschreibung';
$_['text_card_message_V6013'] 	= 'Ungültige Rechnungsnummer';
$_['text_card_message_V6014'] 	= 'Ungültige Rechnungsreferenz';
$_['text_card_message_V6015'] 	= 'Ungültiger Währungscode';
$_['text_card_message_V6016'] 	= 'Bezahlung erforderlich';
$_['text_card_message_V6017'] 	= 'Zahlungswährung Code erforderlich';
$_['text_card_message_V6018'] 	= 'Unbekannter Währungscode';
$_['text_card_message_V6021'] 	= 'Name des Karteninhabers erforderlich';
$_['text_card_message_V6022'] 	= 'Kartennummer erforderlich';
$_['text_card_message_V6023'] 	= 'CVN erforderlich';
$_['text_card_message_V6031'] 	= 'Ungültige Kartennummer';
$_['text_card_message_V6032'] 	= 'Ungültiger CVN';
$_['text_card_message_V6033'] 	= 'Ungültiges Ablaufdatum';
$_['text_card_message_V6034'] 	= 'Ungültige Ausgabenummer';
$_['text_card_message_V6035'] 	= 'Ungültiges Startdatum';
$_['text_card_message_V6036'] 	= 'Ungültiger Monat';
$_['text_card_message_V6037'] 	= 'Ungültiges Jahr';
$_['text_card_message_V6040'] 	= 'Ungültige Token-Kundennummer';
$_['text_card_message_V6041'] 	= 'Kunde benötigt';
$_['text_card_message_V6042'] 	= 'Kunden Vorname erforderlich';
$_['text_card_message_V6043'] 	= 'Nachname des Kunden erforderlich';
$_['text_card_message_V6044'] 	= 'Ländercode des Kunden erforderlich';
$_['text_card_message_V6045'] 	= 'Kundentitel erforderlich';
$_['text_card_message_V6046'] 	= 'Token Kundennummer erforderlich';
$_['text_card_message_V6047'] 	= 'RedirectURL Erforderlich';
$_['text_card_message_V6051'] 	= 'Ungültiger Vorname';
$_['text_card_message_V6052'] 	= 'Ungültiger Nachname';
$_['text_card_message_V6053'] 	= 'Ungültiger Ländercode';
$_['text_card_message_V6054'] 	= 'Ungültige E-Mail';
$_['text_card_message_V6055'] 	= 'Ungültiges Telefon';
$_['text_card_message_V6056'] 	= 'Ungültiges Mobilgerät';
$_['text_card_message_V6057'] 	= 'Ungültiges Fax';
$_['text_card_message_V6058'] 	= 'Ungültiger Titel';
$_['text_card_message_V6059'] 	= 'Weiterleitungs-URL ungültig';
$_['text_card_message_V6060'] 	= 'Weiterleitungs-URL ungültig';
$_['text_card_message_V6061'] 	= 'Ungültige Referenz';
$_['text_card_message_V6062'] 	= 'Ungültiger Firmenname';
$_['text_card_message_V6063'] 	= 'Ungültige Jobbeschreibung';
$_['text_card_message_V6064'] 	= 'Ungültige Straße1';
$_['text_card_message_V6065'] 	= 'Ungültige Street2';
$_['text_card_message_V6066'] 	= 'Ungültige Stadt';
$_['text_card_message_V6067'] 	= 'ungültiger Status';
$_['text_card_message_V6068'] 	= 'Ungültige Postleitzahl';
$_['text_card_message_V6069'] 	= 'Ungültige E-Mail';
$_['text_card_message_V6070'] 	= 'Ungültiges Telefon';
$_['text_card_message_V6071'] 	= 'Ungültiges Mobilgerät';
$_['text_card_message_V6072'] 	= 'Ungültige Kommentare';
$_['text_card_message_V6073'] 	= 'Ungültiges Fax';
$_['text_card_message_V6074'] 	= 'Ungültige URL';
$_['text_card_message_V6075'] 	= 'Ungültiger Lieferadressen-Vorname';
$_['text_card_message_V6076'] 	= 'Ungültiger Lieferanschrift Nachname';
$_['text_card_message_V6077'] 	= 'Ungültige Lieferadresse Street1';
$_['text_card_message_V6078'] 	= 'Ungültige Lieferadresse Street2';
$_['text_card_message_V6079'] 	= 'Ungültige Lieferadresse Stadt';
$_['text_card_message_V6080'] 	= 'Ungültiger Lieferanschrift-Status';
$_['text_card_message_V6081'] 	= 'Ungültige Lieferadresse PostalCode';
$_['text_card_message_V6082'] 	= 'Ungültige Lieferadresse E-Mail';
$_['text_card_message_V6083'] 	= 'Ungültige Versandadresse Telefonnummer';
$_['text_card_message_V6084'] 	= 'Ungültiges Lieferanschrift-Land';
$_['text_card_message_V6091'] 	= 'Unbekannter Ländercode';
$_['text_card_message_V6100'] 	= 'Ungültiger Kartenname';
$_['text_card_message_V6101'] 	= 'Ungültiger Kartenablaufmonat';
$_['text_card_message_V6102'] 	= 'Ungültiges Kartengültigkeitsjahr';
$_['text_card_message_V6103'] 	= 'Ungültiger Kartenstartmonat';
$_['text_card_message_V6104'] 	= 'Ungültiges Kartenstartjahr';
$_['text_card_message_V6105'] 	= 'Ungültige Kartenausgabenummer';
$_['text_card_message_V6106'] 	= 'Ungültige Karten CVN';
$_['text_card_message_V6107'] 	= 'Ungültiger Zugangscode';
$_['text_card_message_V6108'] 	= 'Ungültige CustomerHostAddress';
$_['text_card_message_V6109'] 	= 'Ungültiger Benutzeragent';
$_['text_card_message_V6110'] 	= 'Ungültige Kartennummer';
$_['text_card_message_V6111'] 	= 'Unautorisierter API-Zugriff, Konto nicht PCI-zertifiziert';
$_['text_card_message_V6112'] 	= 'Redundante Kartendetails außer Ablaufdatum und -monat';
$_['text_card_message_V6113'] 	= 'Ungültige Transaktion für die Erstattung';
$_['text_card_message_V6114'] 	= 'Gateway-Validierungsfehler';
$_['text_card_message_V6115'] 	= 'Ungültiger DirectRefundRequest, Transaktions-ID';
$_['text_card_message_V6116'] 	= 'Ungültige Kartendaten für die ursprüngliche TransactionID';
$_['text_card_message_V6124'] 	= 'Ungültige Werbebuchungen Die Werbebuchungen wurden bereitgestellt, die Summen stimmen jedoch nicht mit dem Feld TotalAmount überein';
$_['text_card_message_V6125'] 	= 'Der ausgewählte Zahlungstyp ist nicht aktiviert';
$_['text_card_message_V6126'] 	= 'Ungültige verschlüsselte Kartennummer, Entschlüsselung fehlgeschlagen';
$_['text_card_message_V6127'] 	= 'Ungültiges verschlüsseltes CVN, Entschlüsselung fehlgeschlagen';
$_['text_card_message_V6128'] 	= 'Ungültige Methode für die Zahlungsart';
$_['text_card_message_V6129'] 	= 'Die Transaktion wurde nicht für die Erfassung /Stornierung autorisiert';
$_['text_card_message_V6130'] 	= 'Generischer Kundeninformationsfehler';
$_['text_card_message_V6131'] 	= 'Generischer Versandinformationenfehler';
$_['text_card_message_V6132'] 	= 'Transaktion ist bereits abgeschlossen oder ungültig, Operation nicht erlaubt';
$_['text_card_message_V6133'] 	= 'Checkout ist für die Zahlungsart nicht verfügbar';
$_['text_card_message_V6134'] 	= 'Ungültige Auth-Transaktions-ID für Capture /Void';
$_['text_card_message_V6135'] 	= 'PayPal Error Processing Rückerstattung';
$_['text_card_message_V6140'] 	= 'Händlerkonto ist gesperrt';
$_['text_card_message_V6141'] 	= 'Ungültige PayPal-Kontodetails oder API-Signatur';
$_['text_card_message_V6142'] 	= 'Autorisieren nicht verfügbar für Bank /Filiale';
$_['text_card_message_V6150'] 	= 'Ungültiger Rückerstattungsbetrag';
$_['text_card_message_V6151'] 	= 'Erstattungsbetrag größer als die ursprüngliche Transaktion';
$_['text_card_message_D4406'] 	= 'Unbekannter Fehler';
$_['text_card_message_S5010'] 	= 'Unbekannter Fehler';