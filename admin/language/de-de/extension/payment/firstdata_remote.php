<?php
// Heading
$_['heading_title']					 = 'Erste Daten EMEA Web Service API';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Erweiterungen';
$_['text_success']					 = 'Erfolg: Sie haben die Daten des First Data-Kontos! geändert';
$_['text_edit']                      = 'Bearbeiten Sie die EMEA Web Service API für die erste Datenquelle';
$_['text_card_type']				 = 'Speicherkarten-Typ';
$_['text_enabled']					 = 'aktiviert';
$_['text_merchant_id']				 = 'Geschäfts-ID';
$_['text_subaccount']				 = 'Unterkonto';
$_['text_user_id']					 = 'Benutzeridentifikation';
$_['text_capture_ok']				 = 'Die Erfassung war erfolgreich';
$_['text_capture_ok_order']			 = 'Die Erfassung war erfolgreich, der Auftragsstatus wurde zum Erfolg aktualisiert - erledigt';
$_['text_refund_ok']				 = 'Rückerstattung war erfolgreich';
$_['text_refund_ok_order']			 = 'Die Rückerstattung war erfolgreich, der Bestellstatus wurde zurückerstattet';
$_['text_void_ok']					 = 'Void war erfolgreich, Auftragsstatus wurde auf ungültig gesetzt';
$_['text_settle_auto']				 = 'Verkauf';
$_['text_settle_delayed']			 = 'Voraut';
$_['text_mastercard']				 = 'MasterCard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Abendessen';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Zahlungsinformationen';
$_['text_capture_status']			 = 'Zahlung erfasst';
$_['text_void_status']				 = 'Zahlung storniert';
$_['text_refund_status']			 = 'Zahlung zurückerstattet';
$_['text_order_ref']				 = 'Bestell-Nr';
$_['text_order_total']				 = 'Insgesamt autorisiert';
$_['text_total_captured']			 = 'Total erfasst';
$_['text_transactions']				 = 'Transaktionen';
$_['text_column_amount']			 = 'Menge';
$_['text_column_type']				 = 'Art';
$_['text_column_date_added']		 = 'Erstellt';
$_['text_confirm_void']				 = 'Möchten Sie die Zahlung ? wirklich stornieren?';
$_['text_confirm_capture']			 = 'Möchten Sie die Zahlung? wirklich erfassen?';
$_['text_confirm_refund']			 = 'Möchten Sie die Zahlung? wirklich erstatten?';

// Entry
$_['entry_certificate_path']		 = 'Zertifikatspfad';
$_['entry_certificate_key_path']	 = 'Privater Schlüsselpfad';
$_['entry_certificate_key_pw']		 = 'Passwort für privaten Schlüssel';
$_['entry_certificate_ca_path']		 = 'CA-Pfad';
$_['entry_merchant_id']				 = 'Geschäfts-ID';
$_['entry_user_id']					 = 'Benutzeridentifikation';
$_['entry_password']				 = 'Passwort';
$_['entry_total']					 = 'Gesamt';
$_['entry_sort_order']				 = 'Sortierreihenfolge';
$_['entry_geo_zone']				 = 'Geozone';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Debug Protokollierung';
$_['entry_auto_settle']				 = 'Abrechnungsart';
$_['entry_status_success_settled']	 = 'Erfolg - erledigt';
$_['entry_status_success_unsettled'] = 'Erfolg - nicht erledigt';
$_['entry_status_decline']			 = 'Ablehnen';
$_['entry_status_void']				 = 'Entwertet';
$_['entry_status_refund']			 = 'Zurückerstattet';
$_['entry_enable_card_store']		 = 'Aktivieren Sie Kartenspeicherungstokens';
$_['entry_cards_accepted']			 = 'Kartentyp akzeptiert';

// Help
$_['help_total']					 = 'Die Checkout-Summe, die der Auftrag erreichen muss, bevor diese Zahlungsmethode aktiv wird';
$_['help_certificate']				 = 'Zertifikate und private Schlüssel sollten außerhalb Ihrer öffentlichen Webordner gespeichert werden';
$_['help_card_select']				 = 'Bitten Sie den Benutzer, vor der Weiterleitung den Kartentyp auszuwählen';
$_['help_notification']				 = 'Sie müssen diese URL für First Data angeben, um Zahlungsbenachrichtigungen zu erhalten';
$_['help_debug']					 = 'Wenn Sie Debug aktivieren, werden vertrauliche Daten in eine Protokolldatei geschrieben. Sie sollten immer deaktivieren, wenn Sie nicht anders angewiesen sind.';
$_['help_settle']					 = 'Wenn Sie Pre-Auth verwenden, müssen Sie eine Post-Auth-Aktion innerhalb von 3-5 Tagen abschließen, ansonsten wird Ihre Transaktion gelöscht';

// Tab
$_['tab_account']					 = 'API-Informationen';
$_['tab_order_status']				 = 'Bestellstatus';
$_['tab_payment']					 = 'Zahlungseinstellungen';

// Button
$_['button_capture']				 = 'Erfassung';
$_['button_refund']					 = 'Rückerstattung';
$_['button_void']					 = 'Leere';

// Error
$_['error_merchant_id']				 = 'Store-ID ist erforderlich';
$_['error_user_id']					 = 'Benutzer-ID ist erforderlich';
$_['error_password']				 = 'Passwort wird benötigt';
$_['error_certificate']				 = 'Zertifikatspfad ist erforderlich';
$_['error_key']						 = 'Zertifikatschlüssel ist erforderlich';
$_['error_key_pw']					 = 'Das Zertifikatschlüssel-Passwort ist erforderlich';
$_['error_ca']						 = 'Certificate Authority (CA) ist erforderlich';