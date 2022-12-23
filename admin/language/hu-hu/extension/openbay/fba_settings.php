<?php
// Headings
$_['heading_title']        	   = 'Beállítások';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Teljesítés az Amazon által';

// Text
$_['text_success']     		   = 'A beállítások mentésre kerültek';
$_['text_status']         	   = 'Állapot';
$_['text_account_ok']  		   = 'Kapcsolódás a teljesítéshez az Amazon OK';
$_['text_api_ok']       	   = 'API kapcsolat OK';
$_['text_api_status']          = 'API kapcsolat';
$_['text_edit']           	   = 'Befejezés végrehajtása az Amazon beállítások szerint';
$_['text_standard']            = 'Alapértelmezett';
$_['text_expedited']           = 'gyorsított';
$_['text_priority']            = 'Kiemelten fontos';
$_['text_fillorkill']          = 'Fill vagy Kill';
$_['text_fillall']             = 'Töltse ki mindent';
$_['text_fillallavailable']    = 'Töltse ki az összes elérhető';
$_['text_prefix_warning']      = 'Ne módosítsa ezt a beállítást, miután elküldte megrendeléseit az Amazon-nak, csak akkor állítsa ezt be, amikor először telepíti.';
$_['text_disabled_cancel']     = 'Letiltva - nem automatikusan törli a teljesítéseket';
$_['text_validate_success']    = 'API-adatai megfelelően működnek! A mentéshez nyomja meg a Mentés gombot.';
$_['text_register_banner']     = 'Kattintson ide, ha regisztrálnia kell egy fiókot';

// Entry
$_['entry_api_key']            = 'API token';
$_['entry_encryption_key']     = 'Titkosítási kulcs 1';
$_['entry_encryption_iv']      = 'Titkosítási kulcs 2';
$_['entry_account_id']         = 'felhasználónév';
$_['entry_send_orders']        = 'Automatikus megrendelés küldése';
$_['entry_fulfill_policy']     = 'Teljesítési politika';
$_['entry_shipping_speed']     = 'Alapértelmezett szállítási sebesség';
$_['entry_debug_log']          = 'Engedélyezze a hibakeresési naplózást';
$_['entry_new_order_status']   = 'Új teljesítési trigger';
$_['entry_order_id_prefix']    = 'Rendelési azonosító előtag';
$_['entry_only_fill_complete'] = 'Minden elemnek FBA-nak kell lennie';

// Help
$_['help_api_key']             = 'Ez az Ön API-jele, szerezze be az OpenBay Pro számláján';
$_['help_encryption_key']      = 'Ez a #1 titkosítási kulcsa, szerezd meg ezt az OpenBay Pro fiókod területén';
$_['help_encryption_iv']       = 'Ez a #2 titkosítási kulcsa, szerezze be az OpenBay Pro fiókjából';
$_['help_account_id']          = 'Ez az a fiókazonosító, amely megegyezik az OpenBay Pro regisztrált Amazon-fiókjával, szerezze be ezt az OpenBay Pro fiók területén';
$_['help_send_orders']  	   = 'Az Amazon termékekkel való megfelelést tartalmazó megrendelések automatikusan elküldenek az Amazon-ba';
$_['help_fulfill_policy']  	   = 'Az alapértelmezett teljesítési szabályzat (FillAll - A teljesítési megbízás teljesítéséhez szükséges elemek szállítása A teljesítési megbízás feldolgozási állapotban marad mindaddig, amíg az Amazon nem szállítja meg az összes elemet, vagy az eladó nem törli azt FillAllAvailable - A teljesítési sorrendben minden teljesítendő elemet szállítanak Az Amazon.FillOrKill törli a megrendelésben szereplő minden nem teljesítendő elemet - Ha a teljesítési sorrendben szereplő elemet nem teljesítik, mielőtt a megrendelés bármely szállítmánya a Függőben lévő állapotba kerül (a készletegységek átvételének folyamata megkezdődött), akkor azonban a teljes megrendelés nem teljesíthető, azonban ha egy megbízási megbízásba tartozó tételt a megbízás egy szállítmányának a Függőben lévő állapotba való áthelyezése után állapítanak meg, akkor az Amazon a lehető legteljesebb mértékben törli a teljesítési megbízást.)';
$_['help_shipping_speed']  	   = 'Ez az alapértelmezett hajózási sebesség kategória az új megrendelésekhez, a különböző szolgáltatási szintek eltérő költségeket vonhatnak maguk után';
$_['help_debug_log']  		   = 'A hibakeresési naplók információkat rögzítenek a naplófájlba a modul által végzett műveletekről. Ezt engedélyezni kell, hogy segítsen megtalálni a probléma okait.';
$_['help_new_order_status']    = 'Ez a sorrendi állapot, amely kiváltja a teljesítéshez létrehozandó sorrendet. Győződjön meg róla, hogy csak a beérkezést követően használja az állapotot.';
$_['help_order_id_prefix']     = 'A megrendelői előtag segít megtalálni az Ön boltjából érkező megrendeléseket nem más integrációktól. Ez nagyon hasznos, ha a kereskedők sok piacon értékesítik az FBA-t';
$_['help_only_fill_complete']  = 'Ez csak akkor teszi lehetővé a megbízások teljesítését, ha a megrendelésben szereplő összes elemet egy Amazon-elemhez teljesíti. Ha nincs olyan tétel, akkor az egész megrendelés kitöltetlen marad.';

// Error
$_['error_api_connect']        = 'Nem sikerült csatlakozni az API-hoz';
$_['error_account_info']       = 'Nem sikerült ellenőrizni az API kapcsolatát az Amazon teljesítésével';
$_['error_api_key']    		   = 'Az API-token érvénytelen';
$_['error_api_account_id']     = 'A Fiókazonosító érvénytelen';
$_['error_encryption_key']     = 'A #1 titkosítási kulcs érvénytelen';
$_['error_encryption_iv']      = 'A #2 titkosítási kulcs érvénytelen';
$_['error_validation']    	   = 'Hiba történt a részletek érvényesítésében';

// Tabs
$_['tab_api_info']             = 'API részletek';

// Buttons
$_['button_verify']            = 'A részletek ellenőrzése';
