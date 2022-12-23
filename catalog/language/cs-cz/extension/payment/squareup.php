<?php
// Text
$_['text_new_card']                     = '+ Přidat novou kartu';
$_['text_loading']                      = 'Načítání prosím čekejte..';
$_['text_card_details']                 = 'Podrobnosti o kartě';
$_['text_saved_card']                   = 'Použít uloženou kartu:';
$_['text_card_ends_in']                 = 'Platíte kartou %, která končí dnem XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Číslo karty:';
$_['text_card_expiry']                  = 'Vypršení platnosti karty (MM /YY):';
$_['text_card_cvc']                     = 'Bezpečnostní kód karty (CVC):';
$_['text_card_zip']                     = 'PSČ PSČ:';
$_['text_card_save']                    = 'Uložte kartu pro budoucí použití?';
$_['text_trial']                        = '%s každý %s %s za %s platby pak';
$_['text_recurring']                    = '%s každých %s %s';
$_['text_length']                       = 'za platby za %';
$_['text_cron_subject']                 = 'Úplné shrnutí pracovních míst CRON';
$_['text_cron_message']                 = 'Zde je seznam všech úkolů CRON prováděných vaším čtvercovým rozšířením:';
$_['text_squareup_profile_suspended']   = 'Vaše opakované platby byly pozastaveny. Pro více podrobností nás kontaktujte.';
$_['text_squareup_trial_expired']       = 'Zkušební doba vypršela.';
$_['text_squareup_recurring_expired']   = 'Vaše opakované platby vypršely. To byla vaše poslední platba.';
$_['text_cron_summary_token_heading']   = 'Obnovení tokenu přístupu:';
$_['text_cron_summary_token_updated']   = 'Access token byl úspěšně aktualizován!';
$_['text_cron_summary_error_heading']   = 'Chyby transakcí:';
$_['text_cron_summary_fail_heading']    = 'Zlyhané transakce (pozastavené profily):';
$_['text_cron_summary_success_heading'] = 'Úspěšné transakce:';
$_['text_cron_fail_charge']             = 'Profil <strong> #%s </strong> se nemohl obvinit <strong> %s </strong>';
$_['text_cron_success_charge']          = 'Profil <strong> #%s </strong> byl obviněn z <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Kreditní /Debetní karta';
$_['text_token_issue_customer_error']   = 'V našem platebním systému dochází k technickému výpadku. Prosím zkuste to znovu později.';
$_['text_token_revoked_subject']        = 'Váš přístupový token Square byl zrušen!';
$_['text_token_revoked_message']        = 'Přístup platobního rozšíření Square na přístup k vašemu účtu Square byl zrušen prostřednictvím panelu Square Dashboard. Potřebujete ověřit pověření svých aplikací v nastavení rozšíření a znovu se připojit.';
$_['text_token_expired_subject']        = 'Váš přístupový token Square má platnost!';
$_['text_token_expired_message']        = 'Doplňkový token platobního rozšíření násobku Platba, který je připojen k vašemu účtu Square, vypršel. Potřebujete ověřit pověření aplikace a úlohu CRON v nastavení rozšíření a znovu připojit.';

// Error
$_['error_browser_not_supported']       = 'Chyba: Platobní systém již nepodporuje váš webový prohlížeč. Aktualizujte prosím nebo použijte jiný.';
$_['error_card_invalid']                = 'Chyba: karta je neplatná!';
$_['error_squareup_cron_token']         = 'Chyba: Token přístupu nelze obnovit. Prosíme, připojte rozšíření Platební platba prostřednictvím administrátorského panelu OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Upozornění: Je povolen režim Sandbox! Transakce se budou zobrazovat, ale nebudou provedeny žádné poplatky.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Karta transakce byla schválena, ale dosud nebyla zachycena.';
$_['squareup_status_comment_captured']      = 'Karta transakce byla schválena a následně zachycena (tj. Dokončena).';
$_['squareup_status_comment_voided']        = 'Karta transakce byla schválena a následně zrušena (tj. Zrušena).';
$_['squareup_status_comment_failed']        = 'Karta transakce se nezdařila.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Země platební adresy není platná. Upravte jej a zkuste to znovu.';
$_['squareup_override_error_shipping_address.country']      = 'Země odeslání adresy není platná. Upravte jej a zkuste to znovu.';
$_['squareup_override_error_email_address']                 = 'Vaše e-mailová adresa zákazníka není platná. Upravte jej a zkuste to znovu.';
$_['squareup_override_error_phone_number']                  = 'Vaše telefonní číslo zákazníka není platné. Upravte jej a zkuste to znovu.';
$_['squareup_error_field']                                  = 'Pole: %s';