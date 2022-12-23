<?php
// Heading
$_['heading_title']				= 'Płatność eWAY';

// Text
$_['text_extension']			= 'Rozszerzenia';
$_['text_success']				= 'Sukces: Zmodyfikowałeś dane EWAY!';
$_['text_edit']					= 'Edytuj eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Upoważnienie';
$_['text_sale']					= 'Sprzedaż';
$_['text_transparent']			= 'Przejrzyste przekierowanie (formularz płatności na stronie)';
$_['text_iframe']				= 'IFrame (forma płatności w oknie)';

// Entry
$_['entry_paymode']				= 'Sposób płatności';
$_['entry_test']				= 'Tryb testowania';
$_['entry_order_status']		= 'Status zamówienia';
$_['entry_order_status_refund'] = 'Status zwrotu pieniędzy';
$_['entry_order_status_auth']	= 'Status autoryzowanego zamówienia';
$_['entry_order_status_fraud']	= 'Podejrzenie statusu zlecenia oszustwa';
$_['entry_status']				= 'Status';
$_['entry_username']			= 'Klucz API eWAY';
$_['entry_password']			= 'hasło eWAY';
$_['entry_payment_type']		= 'Typ płatności';
$_['entry_geo_zone']			= 'Strefa geograficzna';
$_['entry_sort_order']			= 'Porządek sortowania';
$_['entry_transaction_method']	= 'Metoda transakcji';

// Error
$_['error_permission']			= 'Ostrzeżenie: Nie masz uprawnień do modyfikowania modułu płatności eWAY';
$_['error_username']			= 'Klucz API eWAY jest wymagany!';
$_['error_password']			= 'wymagane jest hasło eWAY!';
$_['error_payment_type']		= 'Wymagany jest co najmniej jeden rodzaj płatności!';

// Help hints
$_['help_testmode']				= 'Wybierz Tak, aby korzystać z piaskownicy eWAY.';
$_['help_username']				= 'Twój klucz API eWAY ze swojego konta MYeWAY.';
$_['help_password']				= 'Twoje hasło do interfejsu eWAY API z konta MYeWAY.';
$_['help_transaction_method']	= 'Autoryzacja jest dostępna tylko dla banków australijskich';

// Order page - payment tab
$_['text_payment_info']			= 'Informacje o płatności';
$_['text_order_total']			= 'Suma autoryzowana';
$_['text_transactions']			= 'Transakcje';
$_['text_column_transactionid'] = 'Identyfikator transakcji eWAY';
$_['text_column_amount']		= 'Ilość';
$_['text_column_type']			= 'Rodzaj';
$_['text_column_created']		= 'Stworzony';
$_['text_total_captured']		= 'Całkowite przechwycone';
$_['text_capture_status']		= 'Płatność przechwycona';
$_['text_void_status']			= 'Płatność unieważniona';
$_['text_refund_status']		= 'Płatność zwrócona';
$_['text_total_refunded']		= 'Całkowita kwota zwrócona';
$_['text_refund_success']		= 'Zwrot środków udało !';
$_['text_capture_success']		= 'Przechwytywanie powiodło się!';
$_['text_refund_failed']		= 'Zwrot środków nie powiódł się';
$_['text_capture_failed']		= 'Nieudane przechwytywanie:';
$_['text_unknown_failure']		= 'Nieprawidłowa kolejność lub kwota';

$_['text_confirm_capture']		= 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_release']		= 'Czy na pewno chcesz zwolnić płatność?';
$_['text_confirm_refund']		= 'Czy na pewno chcesz zwrócić płatność?';

$_['text_empty_refund']			= 'Wprowadź kwotę do zwrotu';
$_['text_empty_capture']		= 'Wprowadź kwotę do przechwycenia';

$_['btn_refund']				= 'Zwrot';
$_['btn_capture']				= 'Zdobyć';

// Validation Error codes
$_['text_card_message_V6000']	= 'Niezdefiniowany błąd sprawdzania poprawności';
$_['text_card_message_V6001'] 	= 'Nieprawidłowy adres IP klienta';
$_['text_card_message_V6002'] 	= 'Nieprawidłowy identyfikator urządzenia';
$_['text_card_message_V6011'] 	= 'Nieprawidłowa kwota';
$_['text_card_message_V6012'] 	= 'Nieprawidłowy opis faktury';
$_['text_card_message_V6013'] 	= 'Nieprawidłowy numer faktury';
$_['text_card_message_V6014'] 	= 'Nieprawidłowe odniesienie do faktury';
$_['text_card_message_V6015'] 	= 'Nieprawidłowy kod waluty';
$_['text_card_message_V6016'] 	= 'Płatność wymagana';
$_['text_card_message_V6017'] 	= 'Wymagany jest kod waluty płatności';
$_['text_card_message_V6018'] 	= 'Nieznany kod waluty płatności';
$_['text_card_message_V6021'] 	= 'Wymagana nazwa użytkownika karty';
$_['text_card_message_V6022'] 	= 'Wymagany numer karty';
$_['text_card_message_V6023'] 	= 'Wymagany CVN';
$_['text_card_message_V6031'] 	= 'Nieprawidłowy numer karty';
$_['text_card_message_V6032'] 	= 'Nieprawidłowy numer CVN';
$_['text_card_message_V6033'] 	= 'Nieprawidłowa data ważności';
$_['text_card_message_V6034'] 	= 'Nieprawidłowy numer wydania';
$_['text_card_message_V6035'] 	= 'Nieprawidłowa data rozpoczęcia';
$_['text_card_message_V6036'] 	= 'Nieprawidłowy miesiąc';
$_['text_card_message_V6037'] 	= 'Nieprawidłowy rok';
$_['text_card_message_V6040'] 	= 'Nieprawidłowy identyfikator klienta tokenu';
$_['text_card_message_V6041'] 	= 'Wymagany klient';
$_['text_card_message_V6042'] 	= 'Wymagane imię i nazwisko klienta';
$_['text_card_message_V6043'] 	= 'Wymagane nazwisko klienta';
$_['text_card_message_V6044'] 	= 'Wymagany kod kraju klienta';
$_['text_card_message_V6045'] 	= 'Wymagany tytuł klienta';
$_['text_card_message_V6046'] 	= 'Wymagany identyfikator klienta tokenu';
$_['text_card_message_V6047'] 	= 'Wymagane RedirectURL';
$_['text_card_message_V6051'] 	= 'Nieprawidłowe imię';
$_['text_card_message_V6052'] 	= 'Nieprawidłowe nazwisko';
$_['text_card_message_V6053'] 	= 'Nieprawidłowy kod kraju';
$_['text_card_message_V6054'] 	= 'Niepoprawny email';
$_['text_card_message_V6055'] 	= 'Nieprawidłowy telefon';
$_['text_card_message_V6056'] 	= 'Nieprawidłowy telefon komórkowy';
$_['text_card_message_V6057'] 	= 'Nieprawidłowy faks';
$_['text_card_message_V6058'] 	= 'Nieprawidłowy tytuł';
$_['text_card_message_V6059'] 	= 'Przekierowanie URL jest nieprawidłowe';
$_['text_card_message_V6060'] 	= 'Przekierowanie URL jest nieprawidłowe';
$_['text_card_message_V6061'] 	= 'Nieprawidłowy odniesienie';
$_['text_card_message_V6062'] 	= 'Nieprawidłowa nazwa firmy';
$_['text_card_message_V6063'] 	= 'Nieprawidłowy opis stanowiska';
$_['text_card_message_V6064'] 	= 'Nieprawidłowy Street1';
$_['text_card_message_V6065'] 	= 'Nieprawidłowa ulica 2';
$_['text_card_message_V6066'] 	= 'Nieprawidłowe miasto';
$_['text_card_message_V6067'] 	= 'Nieprawidłowy stan';
$_['text_card_message_V6068'] 	= 'Nieprawidłowy kod pocztowy';
$_['text_card_message_V6069'] 	= 'Niepoprawny email';
$_['text_card_message_V6070'] 	= 'Nieprawidłowy telefon';
$_['text_card_message_V6071'] 	= 'Nieprawidłowy telefon komórkowy';
$_['text_card_message_V6072'] 	= 'Nieprawidłowe komentarze';
$_['text_card_message_V6073'] 	= 'Nieprawidłowy faks';
$_['text_card_message_V6074'] 	= 'Nieprawidłowy URL';
$_['text_card_message_V6075'] 	= 'Nieprawidłowy adres wysyłki';
$_['text_card_message_V6076'] 	= 'Nieprawidłowy adres wysyłki Nazwisko';
$_['text_card_message_V6077'] 	= 'Nieprawidłowy adres wysyłki Street1';
$_['text_card_message_V6078'] 	= 'Nieprawidłowy adres wysyłkowy Street2';
$_['text_card_message_V6079'] 	= 'Nieprawidłowy adres wysyłki Miasto';
$_['text_card_message_V6080'] 	= 'Nieprawidłowy adres dostawy';
$_['text_card_message_V6081'] 	= 'Nieprawidłowy adres pocztowy kod pocztowy';
$_['text_card_message_V6082'] 	= 'Nieprawidłowy adres e-mail wysyłki';
$_['text_card_message_V6083'] 	= 'Nieprawidłowy telefon adresu dostawy';
$_['text_card_message_V6084'] 	= 'Nieprawidłowy adres wysyłki';
$_['text_card_message_V6091'] 	= 'Nieznany kod kraju';
$_['text_card_message_V6100'] 	= 'Nieprawidłowa nazwa karty';
$_['text_card_message_V6101'] 	= 'Nieprawidłowy miesiąc ważności karty';
$_['text_card_message_V6102'] 	= 'Nieprawidłowy rok ważności karty';
$_['text_card_message_V6103'] 	= 'Nieprawidłowy miesiąc rozpoczęcia karty';
$_['text_card_message_V6104'] 	= 'Nieprawidłowy rok rozpoczęcia karty';
$_['text_card_message_V6105'] 	= 'Nieprawidłowy numer wydania karty';
$_['text_card_message_V6106'] 	= 'Nieprawidłowy CVN karty';
$_['text_card_message_V6107'] 	= 'Nieprawidłowy kod dostępu';
$_['text_card_message_V6108'] 	= 'Nieprawidłowy adres CustomerHostAddress';
$_['text_card_message_V6109'] 	= 'Nieprawidłowa UserAgent';
$_['text_card_message_V6110'] 	= 'Nieprawidłowy numer karty';
$_['text_card_message_V6111'] 	= 'Nieautoryzowany dostęp API, konto nie jest certyfikowane przez PCI';
$_['text_card_message_V6112'] 	= 'Nadmiarowe dane karty inne niż rok wygaśnięcia i miesiąc';
$_['text_card_message_V6113'] 	= 'Nieprawidłowa transakcja do zwrotu';
$_['text_card_message_V6114'] 	= 'Błąd sprawdzania bramki';
$_['text_card_message_V6115'] 	= 'Nieprawidłowy DirectRefundRequest, identyfikator transakcji';
$_['text_card_message_V6116'] 	= 'Nieprawidłowe dane karty na oryginalnym identyfikatorze TransactionID';
$_['text_card_message_V6124'] 	= 'Nieprawidłowe elementy zamówienia. Podano elementy zamówienia, jednak sumy nie są zgodne z polem Łączna kwota';
$_['text_card_message_V6125'] 	= 'Wybrany typ płatności nie jest włączony';
$_['text_card_message_V6126'] 	= 'Nieprawidłowy numer zaszyfrowanej karty, odszyfrowanie nie powiodło się';
$_['text_card_message_V6127'] 	= 'Nieprawidłowy zaszyfrowany cvn, deszyfrowanie nie powiodło się';
$_['text_card_message_V6128'] 	= 'Nieprawidłowa metoda dla typu płatności';
$_['text_card_message_V6129'] 	= 'Transakcja nie została autoryzowana do przechwytywania /anulowania';
$_['text_card_message_V6130'] 	= 'Ogólny błąd informacji o klientach';
$_['text_card_message_V6131'] 	= 'Ogólny błąd informacji o dostawie';
$_['text_card_message_V6132'] 	= 'Transakcja została już zakończona lub unieważniona, operacja niedozwolona';
$_['text_card_message_V6133'] 	= 'Zamówienie nie jest dostępne dla typu płatności';
$_['text_card_message_V6134'] 	= 'Nieprawidłowy identyfikator transakcji autoryzacji dla Capture /Void';
$_['text_card_message_V6135'] 	= 'Błąd zwrotu kosztów w systemie PayPal';
$_['text_card_message_V6140'] 	= 'Konto sprzedawcy zostało zawieszone';
$_['text_card_message_V6141'] 	= 'Nieprawidłowe dane konta PayPal lub podpis API';
$_['text_card_message_V6142'] 	= 'Autoryzuj niedostępne dla banku /oddziału';
$_['text_card_message_V6150'] 	= 'Nieprawidłowa kwota zwrotu';
$_['text_card_message_V6151'] 	= 'Kwota zwrotu większa niż oryginalna transakcja';
$_['text_card_message_D4406'] 	= 'Nieznany błąd';
$_['text_card_message_S5010'] 	= 'Nieznany błąd';