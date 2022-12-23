<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Beállítások';
$_['tab_order_status']              = 'Rendelés állapota';

// Text
$_['text_extension']                = 'Extensions';
$_['text_success']                  = 'Siker: módosította a CardConnect fizetési modulot!';
$_['text_edit']                     = 'A CardConnect szerkesztése';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Fizetés';
$_['text_authorize']                = 'engedélyez';
$_['text_live']                     = 'Élő';
$_['text_test']                     = 'Teszt';
$_['text_no_cron_time']             = 'A cron még nem készült el';
$_['text_payment_info']             = 'Fizetési információ';
$_['text_payment_method']           = 'Fizetési mód';
$_['text_card']                     = 'Kártya';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Referencia';
$_['text_update']                   = 'frissítés';
$_['text_order_total']              = 'Rendelés Összesen';
$_['text_total_captured']           = 'Összesen fogvatartott';
$_['text_capture_payment']          = 'Rögzítse a fizetést';
$_['text_refund_payment']           = 'Visszatérítés';
$_['text_void']                     = 'Üres';
$_['text_transactions']             = 'tranzakciók';
$_['text_column_type']              = 'típus';
$_['text_column_reference']         = 'Referencia';
$_['text_column_amount']            = 'Összeg';
$_['text_column_status']            = 'Állapot';
$_['text_column_date_modified']     = 'Módosítás dátuma';
$_['text_column_date_added']        = 'dátum hozzáadva';
$_['text_column_update']            = 'frissítés';
$_['text_column_void']              = 'Üres';
$_['text_confirm_capture']          = 'Biztosan meg akarja ragadni a kifizetést?';
$_['text_confirm_refund']           = 'Biztosan visszatérítené a fizetést?';
$_['text_inquire_success']          = 'A vizsgálat sikeres volt';
$_['text_capture_success']          = 'A felvételi kérelem sikeres volt';
$_['text_refund_success']           = 'A visszatérítési kérelem sikeres volt';
$_['text_void_success']             = 'A érvénytelen kérés sikeres volt';

// Entry
$_['entry_merchant_id']             = 'kereskedőazonosító';
$_['entry_api_username']            = 'API felhasználónév';
$_['entry_api_password']            = 'API jelszó';
$_['entry_token']                   = 'Titkos token';
$_['entry_transaction']             = 'Tranzakció';
$_['entry_environment']             = 'Környezet';
$_['entry_site']                    = 'Webhely';
$_['entry_store_cards']             = 'Tárolja a kártyákat';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Teljes';
$_['entry_geo_zone']                = 'Geo zóna';
$_['entry_status']                  = 'Állapot';
$_['entry_logging']                 = 'Hibakeresési naplózás';
$_['entry_sort_order']              = 'Sorrend';
$_['entry_cron_url']                = 'Cron Munka URL';
$_['entry_cron_time']               = 'Cron állás utolsó futása';
$_['entry_order_status_pending']    = 'Függőben levő';
$_['entry_order_status_processing'] = 'Feldolgozás';

// Help
$_['help_merchant_id']              = 'Az Ön személyes CardConnect fiók kereskedői azonosítója.';
$_['help_api_username']             = 'A felhasználónév elérni a CardConnect API-t.';
$_['help_api_password']             = 'A jelszó a CardConnect API eléréséhez.';
$_['help_token']                    = 'Adjon meg egy véletlenszerű token biztonsági vagy a létrehozott.';
$_['help_transaction']              = 'Válassza a \ "Fizetés \" lehetőséget a fizetés azonnal elfogadásához, vagy \ "Engedélyezés \" ahhoz, hogy jóvá kell hagynia.';
$_['help_site']                     = 'Ez meghatározza az API URL első részét. Csak akkor változtasson, ha utasítást kap.';
$_['help_store_cards']              = 'Akár kártyákat szeretne tárolni a tokenizálással.';
$_['help_echeck']                   = 'Akár fizetni akarsz egy eCheck használatával is.';
$_['help_total']                    = 'A fizetésnek teljesnek kell lennie, mielőtt a fizetési mód aktívvá válna. Értéknek kell lennie pénznemjelzés nélkül.';
$_['help_logging']                  = 'A hibakeresés engedélyezése érzékeny adatokat ír le egy naplófájlba. Mindig le kell tiltani, hacsak másképp nem utasítjuk.';
$_['help_cron_url']                 = 'Állítson be egy cron feladatot, hogy felhívja ezt az URL-t, hogy a megrendelések automatikusan frissüljenek. Úgy tervezték, hogy néhány órával az üzleti nap utolsó befogadása után induljon.';
$_['help_cron_time']                = 'Ez az utolsó alkalom, hogy a cron munka URL-je végrehajtásra került.';
$_['help_order_status_pending']     = 'A megrendelés állapota, amikor a megbízást a kereskedőnek jóvá kell hagynia.';
$_['help_order_status_processing']  = 'A megrendelés állapota, amikor a megrendelést automatikusan rögzíti.';

// Button
$_['button_inquire_all']            = 'Érdeklődjön mindenkinek';
$_['button_capture']                = 'Elfog';
$_['button_refund']                 = 'Visszatérítés';
$_['button_void_all']               = 'Érvénytelen minden';
$_['button_inquire']                = 'Érdeklődik';
$_['button_void']                   = 'Üres';

// Error
$_['error_permission']              = 'Figyelmeztetés: Önnek nincs engedélye a fizetés módosítására CardConnect!';
$_['error_merchant_id']             = 'Merchant ID szükséges!';
$_['error_api_username']            = 'API felhasználónév szükséges!';
$_['error_api_password']            = 'API-jelszó szükséges!';
$_['error_token']                   = 'Titkos token szükséges!';
$_['error_site']                    = 'Szükséges webhely!';
$_['error_amount_zero']             = 'Az összegnek magasabbnak kell lennie, mint a zero! értéknek';
$_['error_no_order']                = 'Nincs megfelelő megrendelési információ!';
$_['error_invalid_response']        = 'Érvénytelen válasz kapott!';
$_['error_data_missing']            = 'Hiányzó adatok!';
$_['error_not_enabled']             = 'A modul nem engedélyezve!';