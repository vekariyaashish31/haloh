<?php
// Heading
$_['heading_title']              = 'Elem importálása';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'eBay';

// Text
$_['text_sync_import_line1']     = '<strong> Caution! </strong> Ez az összes eBay termékét importálja és egy kategóriarendszert épít ki az üzletében. Javasoljuk, hogy törölje az összes kategóriát és terméket, mielőtt futtatná ezt az opciót. <br /> A kategória szerkezete az eBay szokásos kategóriáitól, nem pedig üzletkategóriáitól (ha van eBay-boltja). Az importált kategóriákat átnevezheti, törölheti és szerkesztheti anélkül, hogy befolyásolná az eBay termékeit.';
$_['text_sync_import_line3']     = 'Biztosítania kell, hogy a kiszolgáló elfogadja és feldolgozza a nagy POST adatméreteket. 1000 eBay elem körülbelül 40 MB méretű, akkor kell kiszámítani, amit igényel. Ha a hívása sikertelen, akkor valószínűleg túl alacsony a beállítása. A PHP memória limitjének körülbelül 128 MB-nak kell lennie.';
$_['text_sync_server_size']      = 'Jelenleg a kiszolgáló elfogadhatja a következőket:';
$_['text_sync_memory_size']      = 'A PHP memória korlátja:';
$_['text_import_confirm']		 = 'Ez importálja az összes eBay tárgyát új termékként, biztos vagy benne? Ez NEM lehet undone! Biztosítani van egy backup first!';
$_['text_import_notify']		 = 'Az importkérés feldolgozásra került. Az import körülbelül 1 órát vesz 1000 tételenként.';
$_['text_import_images_msg1']    = 'a képek importra /másolásra várnak az eBay-től. Frissítse ezt az oldalt, ha a szám nem csökken';
$_['text_import_images_msg2']    = 'kattints ide';
$_['text_import_images_msg3']    = 'és várj. További információ arról, hogy miért történt ez a cikk <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> itt </a>';

// Entry
$_['entry_import_item_advanced'] = 'Részletes adatok beszerzése';
$_['entry_import_categories']    = 'Import kategóriák';
$_['entry_import_description']	 = 'Elemdeírások importálása';
$_['entry_import']				 = 'Importálhat eBay-t';

// Buttons
$_['button_import']				 = 'import';
$_['button_complete']			 = 'teljes';

// Help
$_['help_import_item_advanced']  = 'A tételek behozatalához akár tízszer hosszabb ideig is eltarthat. Importálhat súlyokat, méreteket, ISBN-t és többet, ha rendelkezésre áll';
$_['help_import_categories']     = 'Az eBay kategóriáktól egy kategóriastruktúrát hoz létre a boltban';
$_['help_import_description']    = 'Ez importál mindent, beleértve a HTML-t, látogasson el a számlálókhoz stb';

// Error
$_['error_import']               = 'Nem sikerült betölteni';
$_['error_maintenance']			 = 'Az áruház karbantartási módban van. Az importálás sikertelen lesz!';
$_['error_ajax_load']			 = 'Nem sikerült csatlakozni a szerverhez';
$_['error_validation']			 = 'Regisztrálnia kell API API-jához, és engedélyeznie kell a modult.';