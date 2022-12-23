<?php
// Heading
$_['heading_title']					 = 'Első adat EMEA webszolgáltatás API';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Extensions';
$_['text_success']					 = 'Siker: Módosította az első adatfiók részletei!';
$_['text_edit']                      = 'Az EMEA webszolgáltatás API első adatainak szerkesztése';
$_['text_card_type']				 = 'Kártyatípus';
$_['text_enabled']					 = 'Bekapcsolt';
$_['text_merchant_id']				 = 'Tárolja az azonosítót';
$_['text_subaccount']				 = 'alszámla';
$_['text_user_id']					 = 'Felhasználói azonosító';
$_['text_capture_ok']				 = 'A felvétel sikeres volt';
$_['text_capture_ok_order']			 = 'A Capture sikeres volt, a megrendelés státusza frissült a sikernek';
$_['text_refund_ok']				 = 'A visszatérítés sikeres volt';
$_['text_refund_ok_order']			 = 'A visszatérítés sikeres volt, a megrendelés állapotának frissítése visszatérítésre került';
$_['text_void_ok']					 = 'A Void sikeres volt, a megrendelés állapotát frissítették';
$_['text_settle_auto']				 = 'Eladás';
$_['text_settle_delayed']			 = 'Pre auth';
$_['text_mastercard']				 = 'MasterCard';
$_['text_visa']						 = 'Vízum';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Mester';
$_['text_payment_info']				 = 'Fizetési információ';
$_['text_capture_status']			 = 'Fizetés rögzítve';
$_['text_void_status']				 = 'Fizetés elmaradt';
$_['text_refund_status']			 = 'A visszatérítés visszatér';
$_['text_order_ref']				 = 'Rendelés ref';
$_['text_order_total']				 = 'Teljes engedélyezett';
$_['text_total_captured']			 = 'Összesen elfogták';
$_['text_transactions']				 = 'tranzakciók';
$_['text_column_amount']			 = 'Összeg';
$_['text_column_type']				 = 'típus';
$_['text_column_date_added']		 = 'Alkotó';
$_['text_confirm_void']				 = 'Biztosan érvényteleníti a kifizetést?';
$_['text_confirm_capture']			 = 'Biztosan meg akarja ragadni a kifizetést?';
$_['text_confirm_refund']			 = 'Biztosan visszatérítené a fizetést?';

// Entry
$_['entry_certificate_path']		 = 'Tanúsítványút';
$_['entry_certificate_key_path']	 = 'Privát kulcspálya';
$_['entry_certificate_key_pw']		 = 'Privát kulcsú jelszó';
$_['entry_certificate_ca_path']		 = 'CA útvonal';
$_['entry_merchant_id']				 = 'Tárolja az azonosítót';
$_['entry_user_id']					 = 'Felhasználói azonosító';
$_['entry_password']				 = 'Jelszó';
$_['entry_total']					 = 'Teljes';
$_['entry_sort_order']				 = 'Sorrend';
$_['entry_geo_zone']				 = 'Geo zóna';
$_['entry_status']					 = 'Állapot';
$_['entry_debug']					 = 'Hibakeresési naplózás';
$_['entry_auto_settle']				 = 'Település típusa';
$_['entry_status_success_settled']	 = 'A siker - rendezte';
$_['entry_status_success_unsettled'] = 'Siker - nem rendezett';
$_['entry_status_decline']			 = 'Hanyatlás';
$_['entry_status_void']				 = 'ürített';
$_['entry_status_refund']			 = 'Visszautalva';
$_['entry_enable_card_store']		 = 'Engedélyezze a kártyák tárolására szolgáló tokeneket';
$_['entry_cards_accepted']			 = 'Kártyatípusok elfogadva';

// Help
$_['help_total']					 = 'A fizetésnek teljesnek kell lennie, mielőtt a fizetési mód aktívvá válna';
$_['help_certificate']				 = 'A tanúsítványokat és a privát kulcsokat a nyilvános webes mappákon kívül kell tárolni';
$_['help_card_select']				 = 'Kérje meg a felhasználót, hogy a kártya típusát válassza át az átirányítás előtt';
$_['help_notification']				 = 'Ezt az URL-t az első adatoknak kell megadnia a fizetési értesítések beérkezéséhez';
$_['help_debug']					 = 'A hibakeresés engedélyezése érzékeny adatokat ír le egy naplófájlba. Mindig le kell tiltani, hacsak másképp nem utasítjuk.';
$_['help_settle']					 = 'Ha előzetesen felveszi a hitelesítést, 3-5 napon belül be kell fejeznie a felhatalmazást követő műveletet, ellenkező esetben a tranzakció leesik';

// Tab
$_['tab_account']					 = 'API információ';
$_['tab_order_status']				 = 'Rendelés állapota';
$_['tab_payment']					 = 'Fizetési beállítások';

// Button
$_['button_capture']				 = 'Elfog';
$_['button_refund']					 = 'Visszatérítés';
$_['button_void']					 = 'Üres';

// Error
$_['error_merchant_id']				 = 'Tárolási azonosító szükséges';
$_['error_user_id']					 = 'Felhasználói azonosító szükséges';
$_['error_password']				 = 'Jelszó szükséges';
$_['error_certificate']				 = 'Tanúsítványút szükséges';
$_['error_key']						 = 'Tanúsítványkulcs szükséges';
$_['error_key_pw']					 = 'A tanúsítvány kulcsának jelszava szükséges';
$_['error_ca']						 = 'Tanúsítvány hatóság (CA) szükséges';