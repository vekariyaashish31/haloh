<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Ustawienia';
$_['tab_order_status']              = 'Status zamówienia';

// Text
$_['text_extension']                = 'Rozszerzenia';
$_['text_success']                  = 'Sukces: Zmodyfikowałeś moduł płatności ! CardConnect';
$_['text_edit']                     = 'Edytuj CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Zapłata';
$_['text_authorize']                = 'Autoryzować';
$_['text_live']                     = 'Relacja na żywo';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'Cron nie został jeszcze wykonany';
$_['text_payment_info']             = 'Informacje o płatności';
$_['text_payment_method']           = 'Metoda płatności';
$_['text_card']                     = 'Karta';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Odniesienie';
$_['text_update']                   = 'Aktualizacja';
$_['text_order_total']              = 'Suma zamówienia';
$_['text_total_captured']           = 'Razem schwytani';
$_['text_capture_payment']          = 'Przechwyć płatność';
$_['text_refund_payment']           = 'Zwrot pieniędzy';
$_['text_void']                     = 'Unieważnić';
$_['text_transactions']             = 'Transakcje';
$_['text_column_type']              = 'Rodzaj';
$_['text_column_reference']         = 'Odniesienie';
$_['text_column_amount']            = 'Ilość';
$_['text_column_status']            = 'Status';
$_['text_column_date_modified']     = 'Data modyfikacji';
$_['text_column_date_added']        = 'Data dodania';
$_['text_column_update']            = 'Aktualizacja';
$_['text_column_void']              = 'Unieważnić';
$_['text_confirm_capture']          = 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_refund']           = 'Czy na pewno chcesz zwrócić płatność?';
$_['text_inquire_success']          = 'Zapytanie zakończyło się sukcesem';
$_['text_capture_success']          = 'Żądanie przechwytywania powiodło się';
$_['text_refund_success']           = 'Prośba o zwrot środków została zrealizowana';
$_['text_void_success']             = 'Żądanie pustki zakończyło się powodzeniem';

// Entry
$_['entry_merchant_id']             = 'Identyfikator sprzedawcy';
$_['entry_api_username']            = 'Nazwa użytkownika interfejsu API';
$_['entry_api_password']            = 'Hasło API';
$_['entry_token']                   = 'Tajny token';
$_['entry_transaction']             = 'Transakcja';
$_['entry_environment']             = 'Środowisko';
$_['entry_site']                    = 'Teren';
$_['entry_store_cards']             = 'Przechowuj karty';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Całkowity';
$_['entry_geo_zone']                = 'Strefa geograficzna';
$_['entry_status']                  = 'Status';
$_['entry_logging']                 = 'Debuguj rejestrowanie';
$_['entry_sort_order']              = 'Porządek sortowania';
$_['entry_cron_url']                = 'URL zadania Cron';
$_['entry_cron_time']               = 'Cron Job Last Run';
$_['entry_order_status_pending']    = 'W oczekiwaniu';
$_['entry_order_status_processing'] = 'Przetwarzanie';

// Help
$_['help_merchant_id']              = 'Twój osobisty identyfikator sprzedawcy konta CardConnect.';
$_['help_api_username']             = 'Twoja nazwa użytkownika, aby uzyskać dostęp do interfejsu API CardConnect.';
$_['help_api_password']             = 'Twoje hasło dostępu do interfejsu CardConnect API.';
$_['help_token']                    = 'Wprowadź losowy token dla bezpieczeństwa lub użyj wygenerowanego.';
$_['help_transaction']              = 'Wybierz opcję \ "Płatność \", aby natychmiast pobrać płatność lub \'Autoryzuj \', aby ją zatwierdzić.';
$_['help_site']                     = 'Określa pierwszą część adresu URL interfejsu API. Zmieniaj tylko, jeśli zostaniesz poinstruowany.';
$_['help_store_cards']              = 'Niezależnie od tego, czy chcesz przechowywać karty przy użyciu tokenizacji.';
$_['help_echeck']                   = 'Czy chcesz zaoferować możliwość zapłaty za pomocą eCheck.';
$_['help_total']                    = 'Całkowita suma transakcji zamówienia musi osiągnąć, zanim ta metoda płatności stanie się aktywna. Musi to być wartość bez znaku waluty.';
$_['help_logging']                  = 'Włączenie debugowania spowoduje zapisanie poufnych danych w pliku dziennika. Zawsze należy wyłączać, chyba że podano inaczej.';
$_['help_cron_url']                 = 'Ustaw zadanie cron, aby wywołać ten URL, aby zamówienia były automatycznie aktualizowane. Został zaprojektowany tak, aby działał kilka godzin po ostatnim zarejestrowaniu dnia roboczego.';
$_['help_cron_time']                = 'Jest to ostatni raz, kiedy został uruchomiony URL zadania cron.';
$_['help_order_status_pending']     = 'Status zamówienia, gdy zamówienie musi zostać autoryzowane przez sprzedawcę.';
$_['help_order_status_processing']  = 'Status zamówienia, gdy zamówienie zostanie automatycznie przechwycone.';

// Button
$_['button_inquire_all']            = 'Zapytaj wszystko';
$_['button_capture']                = 'Zdobyć';
$_['button_refund']                 = 'Zwrot';
$_['button_void_all']               = 'Void All';
$_['button_inquire']                = 'Dowiadywać się';
$_['button_void']                   = 'Unieważnić';

// Error
$_['error_permission']              = 'Ostrzeżenie: nie masz uprawnień do modyfikowania płatności CardConnect!';
$_['error_merchant_id']             = 'Wymagany identyfikator sprzedawcy!';
$_['error_api_username']            = 'Wymagana nazwa użytkownika interfejsu API!';
$_['error_api_password']            = 'Wymagane hasło do interfejsu API!';
$_['error_token']                   = 'Wymagany jest tajny token!';
$_['error_site']                    = 'Wymagana witryna!';
$_['error_amount_zero']             = 'Kwota musi być wyższa niż zero!';
$_['error_no_order']                = 'Brak pasujących informacji o zamówieniu!';
$_['error_invalid_response']        = 'Otrzymano niepoprawną odpowiedź!';
$_['error_data_missing']            = 'Brakujące dane!';
$_['error_not_enabled']             = 'Moduł nie jest włączony!';