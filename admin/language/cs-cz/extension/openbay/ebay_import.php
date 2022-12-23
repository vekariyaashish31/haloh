<?php
// Heading
$_['heading_title']              = 'Položka importovat';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'eBay';

// Text
$_['text_sync_import_line1']     = '<strong> Upozornění! </strong> Tímto budete importovat všechny své produkty eBay a budovat strukturu kategorií ve svém obchodě. Před spuštěním této možnosti je doporučeno odstranit všechny kategorie a produkty. <br /> Struktura kategorie pochází z běžných kategorií eBay, ne od kategorií obchodů (pokud máte obchod s eBay). Importované kategorie můžete přejmenovat, odstranit a upravit bez ovlivnění produktů eBay.';
$_['text_sync_import_line3']     = 'Musíte zajistit, aby váš server mohl přijímat a zpracovávat velké velikosti dat POST. 1000 položek eBay má velikost přibližně 40 MB, budete muset vypočítat, co potřebujete. Pokud se vaše volání nezdaří, je pravděpodobné, že vaše nastavení je příliš malé. Limit PHP paměti musí být asi 128Mb.';
$_['text_sync_server_size']      = 'V současné době váš server může akceptovat:';
$_['text_sync_memory_size']      = 'Limit PHP paměti:';
$_['text_import_confirm']		 = 'To bude importovat všechny vaše eBay položky jako nové produkty, jste si jisti? TO NEMÁ být unone! Ujistěte se, že máte zálohu first!';
$_['text_import_notify']		 = 'Požadavek na import byl odeslán ke zpracování. Import trvá asi 1 hodinu na 1000 položek.';
$_['text_import_images_msg1']    = 'obrázky čekají na import /kopírování z eBay. Aktualizujte tuto stránku, pokud se číslo nesníží';
$_['text_import_images_msg2']    = 'klikněte zde';
$_['text_import_images_msg3']    = 'a počkejte. Další informace o tom, proč se tak stalo, najdete <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> zde </a>';

// Entry
$_['entry_import_item_advanced'] = 'Získejte pokročilé údaje';
$_['entry_import_categories']    = 'Importovat kategorie';
$_['entry_import_description']	 = 'Importování popisů položek';
$_['entry_import']				 = 'Import položek eBay';

// Buttons
$_['button_import']				 = 'Import';
$_['button_complete']			 = 'Kompletní';

// Help
$_['help_import_item_advanced']  = 'Při importu položek bude trvat až desetkrát déle. Importuje váhy, velikosti, ISBN a další, je-li k dispozici';
$_['help_import_categories']     = 'Vytváří strukturu kategorie ve vašem obchodě z kategorií eBay';
$_['help_import_description']    = 'To vše bude importovat, včetně HTML, návštěvníků atd';

// Error
$_['error_import']               = 'Nepodařilo se načíst';
$_['error_maintenance']			 = 'Váš obchod je v režimu údržby. Import se nezdaří!';
$_['error_ajax_load']			 = 'Nepodařilo se připojit k serveru';
$_['error_validation']			 = 'Musíte se zaregistrovat pro vaše token API a povolit modul.';