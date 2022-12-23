<?php
// Text
$_['text_new_card']                     = '+ Neue Karte hinzufügen';
$_['text_loading']                      = 'Laden, bitte warten..';
$_['text_card_details']                 = 'Kartendetails';
$_['text_saved_card']                   = 'Gespeicherte Karte verwenden:';
$_['text_card_ends_in']                 = 'Bezahle mit der bestehenden %s-Karte, die auf XXXX XXXX XXXX %s endet';
$_['text_card_number']                  = 'Kartennummer:';
$_['text_card_expiry']                  = 'Kartenablauf (MM /JJ):';
$_['text_card_cvc']                     = 'Kartensicherheitscode (CVC):';
$_['text_card_zip']                     = 'Karte Postleitzahl:';
$_['text_card_save']                    = 'Sparen Sie die Karte für zukünftige Verwendung?';
$_['text_trial']                        = '%s alle %s %s für %s Zahlungen dann';
$_['text_recurring']                    = '%s alle %s %s';
$_['text_length']                       = 'für %s Zahlungen';
$_['text_cron_subject']                 = 'Quadratische CRON-Jobzusammenfassung';
$_['text_cron_message']                 = 'Hier ist eine Liste aller CRON-Aufgaben, die von Ihrer Square-Erweiterung ausgeführt werden:';
$_['text_squareup_profile_suspended']   = 'Ihre wiederkehrenden Zahlungen wurden ausgesetzt. Bitte kontaktieren Sie uns für weitere Details.';
$_['text_squareup_trial_expired']       = 'Ihre Probezeit ist abgelaufen.';
$_['text_squareup_recurring_expired']   = 'Ihre wiederkehrenden Zahlungen sind abgelaufen. Dies war deine letzte Zahlung.';
$_['text_cron_summary_token_heading']   = 'Aktualisierung des Zugriffstokens:';
$_['text_cron_summary_token_updated']   = 'Zugriffstoken wurde erfolgreich aktualisiert!';
$_['text_cron_summary_error_heading']   = 'Transaktionsfehler:';
$_['text_cron_summary_fail_heading']    = 'Fehlgeschlagene Transaktionen (Profile gesperrt):';
$_['text_cron_summary_success_heading'] = 'Erfolgreiche Transaktionen:';
$_['text_cron_fail_charge']             = 'Profil <strong> #%s </strong> konnte nicht mit <strong> %s </strong> aufgeladen werden';
$_['text_cron_success_charge']          = 'Profil <strong> #%s </strong> wurde mit <strong> %s </strong> belastet';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Kredit- /Debitkarte';
$_['text_token_issue_customer_error']   = 'Wir haben einen technischen Ausfall in unserem Bezahlsystem. Bitte versuche es später erneut.';
$_['text_token_revoked_subject']        = 'Ihr Square-Zugriffs-Token wurde widerrufen!';
$_['text_token_revoked_message']        = 'Der Zugriff auf die Square-Zahlungserweiterung auf Ihr Square-Konto wurde über das Square Dashboard widerrufen. Sie müssen Ihre Anmeldeinformationen in den Erweiterungseinstellungen überprüfen und erneut eine Verbindung herstellen.';
$_['text_token_expired_subject']        = 'Ihr Square-Zugriffs-Token ist! abgelaufen';
$_['text_token_expired_message']        = 'Das Zugriffs-Token der Square-Zahlungserweiterung, das es mit Ihrem Square-Konto verbindet, ist abgelaufen. Sie müssen Ihre Anmeldeinformationen und den CRON-Job in den Erweiterungseinstellungen überprüfen und erneut eine Verbindung herstellen.';

// Error
$_['error_browser_not_supported']       = 'Fehler: Das Zahlungssystem unterstützt Ihren Webbrowser nicht mehr. Bitte aktualisieren oder verwenden Sie ein anderes.';
$_['error_card_invalid']                = 'Fehler: Karte ist ungültig!';
$_['error_squareup_cron_token']         = 'Fehler: Zugriffstoken konnte nicht aktualisiert werden. Bitte verbinden Sie Ihre Square Payment Erweiterung über das OpenCart Admin Panel.';

// Warning
$_['warning_test_mode']                 = 'Warnung: Der Sandbox-Modus ist aktiviert! Transaktionen werden anscheinend ausgeführt, aber keine Gebühren werden ausgeführt.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Die Kartentransaktion wurde genehmigt, aber noch nicht erfasst.';
$_['squareup_status_comment_captured']      = 'Die Kartentransaktion wurde autorisiert und anschließend erfasst (d. H. Abgeschlossen).';
$_['squareup_status_comment_voided']        = 'Die Kartentransaktion wurde autorisiert und anschließend ungültig gemacht (d. H. Annulliert).';
$_['squareup_status_comment_failed']        = 'Die Kartentransaktion ist fehlgeschlagen.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Das Land der Zahlungsadresse ist nicht gültig. Bitte modifiziere es und versuche es erneut.';
$_['squareup_override_error_shipping_address.country']      = 'Lieferadresse Land ist nicht gültig. Bitte modifiziere es und versuche es erneut.';
$_['squareup_override_error_email_address']                 = 'Ihre Kunden-E-Mail-Adresse ist nicht gültig. Bitte modifiziere es und versuche es erneut.';
$_['squareup_override_error_phone_number']                  = 'Ihre Kundentelefonnummer ist nicht gültig. Bitte modifiziere es und versuche es erneut.';
$_['squareup_error_field']                                  = 'Feld: %s';