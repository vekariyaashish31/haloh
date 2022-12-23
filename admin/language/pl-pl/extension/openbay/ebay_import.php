<?php
// Heading
$_['heading_title']              = 'Import przedmiotu';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'eBay';

// Text
$_['text_sync_import_line1']     = '<strong> Caution! </strong> Spowoduje to zaimportowanie wszystkich produktów serwisu eBay i zbudowanie struktury kategorii w Twoim sklepie. Zaleca się usunięcie wszystkich kategorii i produktów przed uruchomieniem tej opcji. <br /> Struktura kategorii pochodzi z normalnych kategorii eBay, a nie z kategorii twoich sklepów (jeśli masz sklep eBay). Możesz zmieniać nazwy, usuwać i edytować zaimportowane kategorie bez wpływu na produkty eBay.';
$_['text_sync_import_line3']     = 'Musisz upewnić się, że twój serwer może akceptować i przetwarzać duże rozmiary danych POST. 1000 przedmiotów w serwisie eBay ma około 40 MB, musisz obliczyć, czego potrzebujesz. Jeśli połączenie nie powiedzie się, prawdopodobnie Twoje ustawienie jest zbyt małe. Twój limit pamięci PHP musi wynosić około 128 MB.';
$_['text_sync_server_size']      = 'Obecnie twój serwer może zaakceptować:';
$_['text_sync_memory_size']      = 'Twój limit pamięci PHP:';
$_['text_import_confirm']		 = 'Spowoduje to zaimportowanie wszystkich elementów serwisu eBay jako nowych produktów, czy na pewno? NIE MOŻNA tego cofnąć!. ZAPOZNAJ SIĘ z pierwszą kopią!';
$_['text_import_notify']		 = 'Twoje żądanie importu zostało wysłane do przetworzenia. Importowanie zajmuje około 1 godziny na 1000 pozycji.';
$_['text_import_images_msg1']    = 'obrazy oczekują na import /kopiowanie z serwisu eBay. Odśwież tę stronę, jeśli liczba nie zmniejsza się wtedy';
$_['text_import_images_msg2']    = 'Kliknij tutaj';
$_['text_import_images_msg3']    = 'i czekaj. Więcej informacji o tym, dlaczego tak się stało, można znaleźć <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> tutaj </a>';

// Entry
$_['entry_import_item_advanced'] = 'Uzyskaj zaawansowane dane';
$_['entry_import_categories']    = 'Importuj kategorie';
$_['entry_import_description']	 = 'Importuj opisy przedmiotów';
$_['entry_import']				 = 'Importuj przedmioty z serwisu eBay';

// Buttons
$_['button_import']				 = 'Import';
$_['button_complete']			 = 'Kompletny';

// Help
$_['help_import_item_advanced']  = 'Importowanie przedmiotów zajmie do 10 razy więcej czasu. Importuje odważniki, rozmiary, ISBN i więcej, jeśli są dostępne';
$_['help_import_categories']     = 'Tworzy strukturę kategorii w twoim sklepie z kategorii eBay';
$_['help_import_description']    = 'Spowoduje to zaimportowanie wszystkiego, w tym HTML, liczniki odwiedzin itp';

// Error
$_['error_import']               = 'Nie udało się załadować';
$_['error_maintenance']			 = 'Twój sklep jest w trybie konserwacji. Importowanie zakończy się niepowodzeniem!';
$_['error_ajax_load']			 = 'błąd połączenia z serwerem';
$_['error_validation']			 = 'Musisz zarejestrować token API i włączyć moduł.';