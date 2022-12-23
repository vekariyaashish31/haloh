<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Nastavení';
$_['tab_order_status']              = 'Stav objednávky';

// Text
$_['text_extension']                = 'Rozšíření';
$_['text_success']                  = 'Úspěšnost: Modifikoval jste platební modul CardConnect!';
$_['text_edit']                     = 'Upravte kartu CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Platba';
$_['text_authorize']                = 'Povolit';
$_['text_live']                     = 'Žít';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'Cron ještě nebyl proveden';
$_['text_payment_info']             = 'Informace o platbě';
$_['text_payment_method']           = 'Způsob platby';
$_['text_card']                     = 'Karta';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Odkaz';
$_['text_update']                   = 'Aktualizace';
$_['text_order_total']              = 'Objednávka celkem';
$_['text_total_captured']           = 'Celkem zachyceno';
$_['text_capture_payment']          = 'Zachycení platby';
$_['text_refund_payment']           = 'Vrácení platby';
$_['text_void']                     = 'Neplatné';
$_['text_transactions']             = 'Transakce';
$_['text_column_type']              = 'Typ';
$_['text_column_reference']         = 'Odkaz';
$_['text_column_amount']            = 'Množství';
$_['text_column_status']            = 'Postavení';
$_['text_column_date_modified']     = 'Datum změny';
$_['text_column_date_added']        = 'datum přidáno';
$_['text_column_update']            = 'Aktualizace';
$_['text_column_void']              = 'Neplatné';
$_['text_confirm_capture']          = 'Opravdu chcete zachytit platbu?';
$_['text_confirm_refund']           = 'Opravdu chcete vrátit platbu?';
$_['text_inquire_success']          = 'Zkouška byla úspěšná';
$_['text_capture_success']          = 'Žádost o zachycení byla úspěšná';
$_['text_refund_success']           = 'Požadavek na vrácení platby byl úspěšný';
$_['text_void_success']             = 'Neplatná žádost byla úspěšná';

// Entry
$_['entry_merchant_id']             = 'ID obchodníka';
$_['entry_api_username']            = 'Uživatelské jméno API';
$_['entry_api_password']            = 'Heslo API';
$_['entry_token']                   = 'Tajný Token';
$_['entry_transaction']             = 'Transakce';
$_['entry_environment']             = 'životní prostředí';
$_['entry_site']                    = 'Stránky';
$_['entry_store_cards']             = 'Ukládejte karty';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Celkový';
$_['entry_geo_zone']                = 'Geo zóna';
$_['entry_status']                  = 'Postavení';
$_['entry_logging']                 = 'Ladění protokolování';
$_['entry_sort_order']              = 'Řadit objednávku';
$_['entry_cron_url']                = 'Adresa URL úlohy Cron';
$_['entry_cron_time']               = 'Cron Job Poslední běh';
$_['entry_order_status_pending']    = 'čekající';
$_['entry_order_status_processing'] = 'zpracovává se';

// Help
$_['help_merchant_id']              = 'Vaše osobní číslo obchodníka účtu CardConnect.';
$_['help_api_username']             = 'Vaše uživatelské jméno pro přístup k API CardConnect.';
$_['help_api_password']             = 'Vaše heslo pro přístup k API CardConnect.';
$_['help_token']                    = 'Zadejte náhodný token pro zabezpečení nebo použijte vygenerovaný.';
$_['help_transaction']              = 'Chcete-li zachytit platbu okamžitě nebo \ "Autorizovat \", zvolte \'Platba \', abyste ji měli schválit.';
$_['help_site']                     = 'To určuje první část adresy URL API. Změna se provádí pouze v případě,';
$_['help_store_cards']              = 'Ať už chcete ukládat karty pomocí tokenizace.';
$_['help_echeck']                   = 'Ať už chcete nabízet možnost platit pomocí eCheck.';
$_['help_total']                    = 'Pokladna celkově musí být před odesláním této platební metody aktivní. Musí být hodnota bez znaménka měny.';
$_['help_logging']                  = 'Povolením ladění budou zapisovány citlivé údaje do souboru protokolu. Vždy byste měli vypnout, pokud nebudete instruován jinak.';
$_['help_cron_url']                 = 'Nastavte úlohu cron pro volání této adresy URL tak, aby se objednávky automaticky aktualizovaly. Je navržen tak, aby byl provozován několik hodin po posledním zachycení pracovního dne.';
$_['help_cron_time']                = 'Toto je poslední čas, kdy byla spuštěna adresa URL úlohy cron.';
$_['help_order_status_pending']     = 'Stav objednávky, když objednávka musí být schválena obchodníkem.';
$_['help_order_status_processing']  = 'Stav objednávky při automatickém zachycení objednávky.';

// Button
$_['button_inquire_all']            = 'Zeptejte se všech';
$_['button_capture']                = 'Zachyťte';
$_['button_refund']                 = 'Vrácení platby';
$_['button_void_all']               = 'Prázdné vše';
$_['button_inquire']                = 'Zeptejte se';
$_['button_void']                   = 'Neplatné';

// Error
$_['error_permission']              = 'Upozornění: Nemáte oprávnění k úpravě platby CardConnect!';
$_['error_merchant_id']             = 'Potřebné ID obchodníka!';
$_['error_api_username']            = 'Požadováno uživatelské jméno API!';
$_['error_api_password']            = 'Požadováno heslo API!';
$_['error_token']                   = 'Tajný požadovaný žeton!';
$_['error_site']                    = 'Místo potřebné!';
$_['error_amount_zero']             = 'Částka musí být vyšší než nula!';
$_['error_no_order']                = 'Žádná odpovídající objednávka info!';
$_['error_invalid_response']        = 'Byla přijata neplatná odpověď!';
$_['error_data_missing']            = 'Chybí data!';
$_['error_not_enabled']             = 'Modul není povolen!';