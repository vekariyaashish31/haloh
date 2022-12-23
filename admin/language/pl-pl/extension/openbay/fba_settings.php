<?php
// Headings
$_['heading_title']        	   = 'Ustawienia';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Spełnienie przez Amazon';

// Text
$_['text_success']     		   = 'Twoje ustawienia zostały zapisane';
$_['text_status']         	   = 'Status';
$_['text_account_ok']  		   = 'Połączenie z Fulfillment przez Amazon OK';
$_['text_api_ok']       	   = 'Połączenie API OK';
$_['text_api_status']          = 'Połączenie API';
$_['text_edit']           	   = 'Edycja ustawień Fulfillment by Amazon';
$_['text_standard']            = 'Standard';
$_['text_expedited']           = 'Przyspieszony';
$_['text_priority']            = 'Priorytet';
$_['text_fillorkill']          = 'Wypełnij lub zabij';
$_['text_fillall']             = 'Wypełnij wszystko';
$_['text_fillallavailable']    = 'Wypełnij wszystkie dostępne';
$_['text_prefix_warning']      = 'Nie zmieniaj tego ustawienia po wysłaniu zamówień do Amazon, ustawiaj to tylko podczas pierwszej instalacji.';
$_['text_disabled_cancel']     = 'Wyłączone - nie anuluje automatycznie spełnień';
$_['text_validate_success']    = 'Twoje dane API działają poprawnie! Musisz zapisać, aby upewnić się, że ustawienia zostały zapisane.';
$_['text_register_banner']     = 'Kliknij tutaj, jeśli chcesz zarejestrować konto';

// Entry
$_['entry_api_key']            = 'Token API';
$_['entry_encryption_key']     = 'Klucz szyfrowania 1';
$_['entry_encryption_iv']      = 'Klucz szyfrowania 2';
$_['entry_account_id']         = 'ID konta';
$_['entry_send_orders']        = 'Wysyłaj zamówienia automatycznie';
$_['entry_fulfill_policy']     = 'Polityka realizacji';
$_['entry_shipping_speed']     = 'Domyślna prędkość wysyłki';
$_['entry_debug_log']          = 'Włącz rejestrowanie debugowania';
$_['entry_new_order_status']   = 'Nowy wyzwalacz spełnienia';
$_['entry_order_id_prefix']    = 'Prefiks identyfikatora zamówienia';
$_['entry_only_fill_complete'] = 'Wszystkie elementy muszą być FBA';

// Help
$_['help_api_key']             = 'To jest Twój token API, uzyskaj go z obszaru konta OpenBay Pro';
$_['help_encryption_key']      = 'To jest Twój klucz szyfrowania #1, uzyskaj to z obszaru konta OpenBay Pro';
$_['help_encryption_iv']       = 'To jest Twój klucz szyfrowania #2, uzyskaj to z obszaru konta OpenBay Pro';
$_['help_account_id']          = 'To jest identyfikator konta, który pasuje do zarejestrowanego konta Amazon dla OpenBay Pro, uzyskaj to z obszaru konta OpenBay Pro';
$_['help_send_orders']  	   = 'Zamówienia zawierające pasujące produkty Fulfillment przez Amazon będą automatycznie wysyłane do Amazon';
$_['help_fulfill_policy']  	   = 'Domyślna zasada spełnienia (FillAll - wszystkie możliwe do zrealizowania pozycje w zleceniu realizacji są wysyłane.) Zlecenie realizacji pozostaje w stanie przetwarzania, dopóki wszystkie produkty nie zostaną wysłane przez Amazon lub anulowane przez sprzedającego. FillAllAvailable - wszystkie spełniające się elementy w zamówieniu są wysyłane Wszystkie nieopłacalne pozycje w zamówieniu są anulowane przez Amazon.FillOrKill - Jeśli pozycja w zamówieniu zostanie uznana za nieopłacalną, zanim jakakolwiek przesyłka w zamówieniu przejdzie do statusu Oczekiwanie (proces zbierania jednostek z inwentarza się rozpoczął), całe zamówienie jest uważane za nie do zniesienia. Jeśli jednak pozycja w zamówieniu zostanie uznana za nie nadającą się do wypełnienia po tym, jak przesyłka w zamówieniu przejdzie do statusu Oczekiwanie, Amazon anuluje tak dużą część zamówienia, jak to możliwe).';
$_['help_shipping_speed']  	   = 'Jest to domyślna kategoria prędkości dostawy, która ma zastosowanie do nowych zamówień, a różne poziomy usług mogą powodować różne koszty';
$_['help_debug_log']  		   = 'Dzienniki debugowania będą rejestrować informacje w pliku dziennika dotyczące czynności wykonywanych przez moduł. To powinno być włączone, aby pomóc znaleźć przyczynę jakichkolwiek problemów.';
$_['help_new_order_status']    = 'Jest to status zamówienia, który spowoduje, że zamówienie zostanie utworzone do realizacji. Upewnij się, że używa statusu tylko po otrzymaniu płatności.';
$_['help_order_id_prefix']     = 'Posiadanie prefiksu zamówienia pomoże zidentyfikować zamówienia, które pochodzą z Twojego sklepu, a nie z innych integracji. Jest to bardzo pomocne, gdy sprzedawcy sprzedają na wielu rynkach i używają FBA';
$_['help_only_fill_complete']  = 'Umożliwi to wysyłanie zamówień do realizacji tylko wtedy, gdy WSZYSTKIE pozycje w zamówieniu zostaną dopasowane do elementu Wypełniaj według Amazon. Jeśli jakikolwiek element nie jest, całe zamówienie pozostanie niewypełnione.';

// Error
$_['error_api_connect']        = 'Nie można połączyć się z interfejsem API';
$_['error_account_info']       = 'Nie można zweryfikować połączenia API z usługą Fulfillment przez Amazon';
$_['error_api_key']    		   = 'Token interfejsu API jest nieprawidłowy';
$_['error_api_account_id']     = 'Identyfikator konta jest nieprawidłowy';
$_['error_encryption_key']     = 'Klucz szyfrowania #1 jest nieprawidłowy';
$_['error_encryption_iv']      = 'Klucz szyfrowania #2 jest nieprawidłowy';
$_['error_validation']    	   = 'Wystąpił błąd podczas sprawdzania poprawności Twoich danych';

// Tabs
$_['tab_api_info']             = 'Szczegóły interfejsu API';

// Buttons
$_['button_verify']            = 'Zweryfikuj szczegóły';
