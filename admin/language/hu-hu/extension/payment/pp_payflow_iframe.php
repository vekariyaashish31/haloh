<?php
// Heading
$_['heading_title']					 = 'PayPal Payflow Pro iFrame';
$_['heading_refund']				 = 'Visszatérítés';

// Text
$_['text_extension']				 = 'Extensions';
$_['text_success']					 = 'Siker: módosították a PayPal Payflow Pro iFrame fiók részletei!-et';
$_['text_edit']                      = 'A PayPal Payflow Pro iFrame szerkesztése';
$_['text_pp_payflow_iframe']		 = '<a target="_BLANK" href="https://www.paypal.com/uk/mrb/pal=V4T754QB63XXL"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro" title="PayPal Website Payment Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			 = 'meghatalmazás';
$_['text_sale']						 = 'Eladás';
$_['text_authorise']				 = 'engedélyez';
$_['text_capture']					 = 'Késleltetett felvétel';
$_['text_void']						 = 'Üres';
$_['text_payment_info']				 = 'Fizetési információ';
$_['text_complete']					 = 'teljes';
$_['text_incomplete']				 = 'Befejezetlen';
$_['text_transaction']				 = 'Tranzakció';
$_['text_confirm_void']				 = 'Ha érvénytelenné válik, nem kaphat további pénzeszközöket';
$_['text_refund']					 = 'Visszatérítés';
$_['text_refund_issued']			 = 'A visszatérítés sikeres volt';
$_['text_redirect']					 = 'Átirányítás';
$_['text_iframe']					 = 'iframe';
$_['help_checkout_method']			 = 'Kérjük, használja az átirányítási módszert, ha nincs telepítve SSL vagy ha nincs PayPal-fizetési opciója, amelyet letiltott a befogadott fizetési oldalon.';

// Column
$_['column_transaction_id']			 = 'Tranzakció azonosítója';
$_['column_transaction_type']		 = 'Tranzakció Típusa';
$_['column_amount']					 = 'Összeg';
$_['column_time']					 = 'Idő';
$_['column_actions']				 = 'Hozzászólások';

// Tab
$_['tab_settings']					 = 'Beállítások';
$_['tab_order_status']				 = 'Rendelés állapota';
$_['tab_checkout_customisation']	 = 'Megrendelés testreszabása';

// Entry
$_['entry_vendor']					 = 'Eladó';
$_['entry_user']					 = 'használó';
$_['entry_password']				 = 'Jelszó';
$_['entry_partner']					 = 'Partner';
$_['entry_test']					 = 'Teszt üzemmódban';
$_['entry_transaction']				 = 'Tranzakciós módszer';
$_['entry_total']					 = 'Teljes';
$_['entry_order_status']			 = 'Rendelés állapota';
$_['entry_geo_zone']				 = 'Geo zóna';
$_['entry_status']					 = 'Állapot';
$_['entry_sort_order']				 = 'Sorrend';
$_['entry_transaction_id']			 = 'Tranzakció azonosítója';
$_['entry_full_refund']				 = 'Teljes visszatérítést';
$_['entry_amount']					 = 'Összeg';
$_['entry_message']					 = 'Üzenet';
$_['entry_ipn_url']					 = 'IPN URL';
$_['entry_checkout_method']			 = 'Checkout módszer';
$_['entry_debug']					 = 'Debug mód';
$_['entry_transaction_reference']	 = 'Tranzakciós hivatkozás';
$_['entry_transaction_amount']		 = 'Tranzakció összege';
$_['entry_refund_amount']			 = 'Visszatérítési összeg';
$_['entry_capture_status']			 = 'Felvételi állapot';
$_['entry_void']					 = 'Üres';
$_['entry_capture']					 = 'Elfog';
$_['entry_transactions']			 = 'tranzakciók';
$_['entry_complete_capture']		 = 'Teljes Capture';
$_['entry_canceled_reversal_status'] = 'Megszakított visszavonási állapot:';
$_['entry_completed_status']		 = 'Befejezett állapot:';
$_['entry_denied_status']			 = 'Tiltott állapot:';
$_['entry_expired_status']			 = 'Lejárt állapot:';
$_['entry_failed_status']			 = 'Sikertelen állapot:';
$_['entry_pending_status']			 = 'Függőben lévő állapot:';
$_['entry_processed_status']		 = 'Feldolgozott állapot:';
$_['entry_refunded_status']			 = 'Visszatérített állapot:';
$_['entry_reversed_status']			 = 'Megfordított állapot:';
$_['entry_voided_status']			 = 'Érvénytelen státusz:';
$_['entry_cancel_url']				 = 'URL visszavonása:';
$_['entry_error_url']				 = 'Hiba URL:';
$_['entry_return_url']				 = 'Visszatérési URL:';
$_['entry_post_url']				 = 'Néma POST URL:';

// Help
$_['help_vendor']					 = 'Az Ön kereskedői bejelentkezési azonosítója, amelyet akkor hoztál létre, amikor regisztrálta a Website Payments Pro számlát';
$_['help_user']						 = 'Ha egy vagy több további felhasználót állít be a fiókba, akkor ez az érték a tranzakciók feldolgozására jogosult felhasználó azonosítója. Ha azonban nem állít be további felhasználókat a fiókban, az USER ugyanolyan értékű, mint a VENDOR';
$_['help_password']					 = 'A 6 és 32 karakteres jelszó, amelyet a fiók regisztrálása során definiált';
$_['help_partner']					 = 'A PayPal viszonteladótól kapott azonosítási azonosító, amely a Payflow SDK-ra regisztrált. Ha közvetlenül a PayPal-tól vásárolta meg a számláját, használja a PayPal Pro programot';
$_['help_test']						 = 'Használja az élő vagy tesztelő (homokozó) átjáró kiszolgálót a tranzakciók feldolgozásához?';
$_['help_total']					 = 'A fizetésnek teljesnek kell lennie, mielőtt a fizetési mód aktívvá válna';
$_['help_debug']					 = 'Naplózza a kiegészítő információkat';

// Button
$_['button_refund']					 = 'Visszatérítés';
$_['button_void']					 = 'Üres';
$_['button_capture']				 = 'Elfog';

// Error
$_['error_permission']				 = 'Figyelmeztetés: Önnek nincs engedélye a PayPal Website Payment Pro iFrame (UK) ! fizetési mód módosítására';
$_['error_vendor']					 = 'Szükséges szállító!';
$_['error_user']					 = 'Felhasználó szükséges!';
$_['error_password']				 = 'Jelszó szükséges!';
$_['error_partner']					 = 'Partner szükséges!';
$_['error_missing_data']			 = 'Hiányzó adatok';
$_['error_missing_order']			 = 'Nem sikerült megtalálni a rendelést';
$_['error_general']					 = 'Hiba történt';
$_['error_capture']				     = 'Adjon meg egy befogadandó összeget';