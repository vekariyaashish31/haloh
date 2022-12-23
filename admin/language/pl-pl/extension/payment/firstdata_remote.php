<?php
// Heading
$_['heading_title']					 = 'Interfejs API usług internetowych First Data EMEA';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Rozszerzenia';
$_['text_success']					 = 'Sukces: Zmodyfikowano dane konta First Data!';
$_['text_edit']                      = 'Edycja pierwszego interfejsu API usług internetowych EMEA';
$_['text_card_type']				 = 'Typ karty';
$_['text_enabled']					 = 'Włączone';
$_['text_merchant_id']				 = 'Identyfikator sklepu';
$_['text_subaccount']				 = 'Subkonto';
$_['text_user_id']					 = 'Identyfikator użytkownika';
$_['text_capture_ok']				 = 'Przechwytywanie przebiegło pomyślnie';
$_['text_capture_ok_order']			 = 'Przechwytywanie powiodło się, status zamówienia zaktualizowany do sukcesu - rozliczony';
$_['text_refund_ok']				 = 'Zwrot kosztów się udało';
$_['text_refund_ok_order']			 = 'Zwrot zakończył się powodzeniem, status zamówienia został zaktualizowany i zwrócone';
$_['text_void_ok']					 = 'Void powiodło się, status zamówienia zaktualizowany do unieważnionego';
$_['text_settle_auto']				 = 'Sprzedaż';
$_['text_settle_delayed']			 = 'Pre auth';
$_['text_mastercard']				 = 'Karta MasterCard';
$_['text_visa']						 = 'Wiza';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Informacje o płatności';
$_['text_capture_status']			 = 'Płatność przechwycona';
$_['text_void_status']				 = 'Płatność unieważniona';
$_['text_refund_status']			 = 'Płatność zwrócona';
$_['text_order_ref']				 = 'Zamów ref';
$_['text_order_total']				 = 'Suma autoryzowana';
$_['text_total_captured']			 = 'Całkowite przechwycone';
$_['text_transactions']				 = 'Transakcje';
$_['text_column_amount']			 = 'Ilość';
$_['text_column_type']				 = 'Rodzaj';
$_['text_column_date_added']		 = 'Stworzony';
$_['text_confirm_void']				 = 'Czy na pewno chcesz anulować płatność?';
$_['text_confirm_capture']			 = 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_refund']			 = 'Czy na pewno chcesz zwrócić płatność?';

// Entry
$_['entry_certificate_path']		 = 'Ścieżka certyfikatu';
$_['entry_certificate_key_path']	 = 'Ścieżka klucza prywatnego';
$_['entry_certificate_key_pw']		 = 'Hasło klucza prywatnego';
$_['entry_certificate_ca_path']		 = 'Ścieżka CA.';
$_['entry_merchant_id']				 = 'Identyfikator sklepu';
$_['entry_user_id']					 = 'Identyfikator użytkownika';
$_['entry_password']				 = 'Hasło';
$_['entry_total']					 = 'Całkowity';
$_['entry_sort_order']				 = 'Porządek sortowania';
$_['entry_geo_zone']				 = 'Strefa geograficzna';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Debuguj logowanie';
$_['entry_auto_settle']				 = 'Rodzaj rozliczenia';
$_['entry_status_success_settled']	 = 'Sukces - rozstrzygnięty';
$_['entry_status_success_unsettled'] = 'Sukces - nie rozstrzygnięty';
$_['entry_status_decline']			 = 'Upadek';
$_['entry_status_void']				 = 'Voided';
$_['entry_status_refund']			 = 'Zwrócono środki';
$_['entry_enable_card_store']		 = 'Włącz tokeny przechowywania karty';
$_['entry_cards_accepted']			 = 'Przyjmowane typy kart';

// Help
$_['help_total']					 = 'Całkowita suma transakcji zamówienia musi osiągnąć, zanim ta metoda płatności stanie się aktywna';
$_['help_certificate']				 = 'Certyfikaty i klucze prywatne powinny być przechowywane poza publicznymi folderami sieciowymi';
$_['help_card_select']				 = 'Poproś użytkownika, aby wybrał jego rodzaj, zanim zostaną przekierowani';
$_['help_notification']				 = 'Musisz podać ten adres URL do First Data, aby otrzymać powiadomienia o płatności';
$_['help_debug']					 = 'Włączenie debugowania spowoduje zapisanie poufnych danych w pliku dziennika. Zawsze należy wyłączać, chyba że podano inaczej.';
$_['help_settle']					 = 'Jeśli korzystasz z pre-auth, musisz wykonać akcję autoodzyskiwania w ciągu 3-5 dni, w przeciwnym razie transakcja zostanie usunięta';

// Tab
$_['tab_account']					 = 'Informacje o interfejsie API';
$_['tab_order_status']				 = 'Status zamówienia';
$_['tab_payment']					 = 'Ustawienia płatności';

// Button
$_['button_capture']				 = 'Zdobyć';
$_['button_refund']					 = 'Zwrot';
$_['button_void']					 = 'Unieważnić';

// Error
$_['error_merchant_id']				 = 'Identyfikator sklepu jest wymagany';
$_['error_user_id']					 = 'Identyfikator użytkownika jest wymagany';
$_['error_password']				 = 'Wymagane jest hasło';
$_['error_certificate']				 = 'Ścieżka certyfikatu jest wymagana';
$_['error_key']						 = 'Klucz certyfikatu jest wymagany';
$_['error_key_pw']					 = 'Klucz klucza certyfikatu jest wymagany';
$_['error_ca']						 = 'Urząd certyfikacji (CA) jest wymagany';