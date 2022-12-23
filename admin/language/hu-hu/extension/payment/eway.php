<?php
// Heading
$_['heading_title']				= 'eWAY fizetés';

// Text
$_['text_extension']			= 'Extensions';
$_['text_success']				= 'Siker: Módosítottad az eWAY adatait!';
$_['text_edit']					= 'Az eWAY szerkesztése';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'meghatalmazás';
$_['text_sale']					= 'Eladás';
$_['text_transparent']			= 'Átlátható átirányítás (fizetési űrlap a helyszínen)';
$_['text_iframe']				= 'IFrame (fizetési forma az ablakban)';

// Entry
$_['entry_paymode']				= 'Fizetési mód';
$_['entry_test']				= 'Teszt üzemmódban';
$_['entry_order_status']		= 'Rendelés állapota';
$_['entry_order_status_refund'] = 'Visszatérített megrendelés állapota';
$_['entry_order_status_auth']	= 'Engedélyezett megbízás státusza';
$_['entry_order_status_fraud']	= 'Gyanús csalás megrendelés állapota';
$_['entry_status']				= 'Állapot';
$_['entry_username']			= 'eWAY API kulcs';
$_['entry_password']			= 'eWAY jelszó';
$_['entry_payment_type']		= 'Fizetési mód';
$_['entry_geo_zone']			= 'Geo zóna';
$_['entry_sort_order']			= 'Sorrend';
$_['entry_transaction_method']	= 'Tranzakciós módszer';

// Error
$_['error_permission']			= 'Figyelmeztetés: Önnek nincs engedélye az eWAY fizetési modul módosítására';
$_['error_username']			= 'Az eWAY API kulcs szükséges!';
$_['error_password']			= 'eWAY jelszó szükséges!';
$_['error_payment_type']		= 'Legalább egy fizetési mód szükséges!';

// Help hints
$_['help_testmode']				= 'Állítsa az Igen értéket az eWAY Sandbox használatához.';
$_['help_username']				= 'Az eWAY API kulcsa a MYeWAY fiókodból.';
$_['help_password']				= 'Az eWAY API jelszava a MYeWAY fiókodból.';
$_['help_transaction_method']	= 'Engedély csak az ausztrál bankok számára áll rendelkezésre';

// Order page - payment tab
$_['text_payment_info']			= 'Fizetési információ';
$_['text_order_total']			= 'Teljes engedélyezett';
$_['text_transactions']			= 'tranzakciók';
$_['text_column_transactionid'] = 'eWAY tranzakciós azonosító';
$_['text_column_amount']		= 'Összeg';
$_['text_column_type']			= 'típus';
$_['text_column_created']		= 'Alkotó';
$_['text_total_captured']		= 'Összesen elfogták';
$_['text_capture_status']		= 'Fizetés rögzítve';
$_['text_void_status']			= 'Fizetés elmaradt';
$_['text_refund_status']		= 'A visszatérítés visszatér';
$_['text_total_refunded']		= 'Visszatérítve';
$_['text_refund_success']		= 'A visszatérítés sikerült!';
$_['text_capture_success']		= 'A capture sikerült!';
$_['text_refund_failed']		= 'A visszatérítés sikertelen:';
$_['text_capture_failed']		= 'A rögzítés sikertelen:';
$_['text_unknown_failure']		= 'Érvénytelen megrendelés vagy összeg';

$_['text_confirm_capture']		= 'Biztosan meg akarja ragadni a kifizetést?';
$_['text_confirm_release']		= 'Biztos benne, hogy kiadja a kifizetést?';
$_['text_confirm_refund']		= 'Biztosan visszatérítené a fizetést?';

$_['text_empty_refund']			= 'Kérjük, adja meg a visszatérítés összegét';
$_['text_empty_capture']		= 'Adjon meg egy befogadandó összeget';

$_['btn_refund']				= 'Visszatérítés';
$_['btn_capture']				= 'Elfog';

// Validation Error codes
$_['text_card_message_V6000']	= 'Meghatározatlan érvényesítési hiba';
$_['text_card_message_V6001'] 	= 'Érvénytelen ügyfél IP';
$_['text_card_message_V6002'] 	= 'Érvénytelen eszközazonosító';
$_['text_card_message_V6011'] 	= 'Érvénytelen összeg';
$_['text_card_message_V6012'] 	= 'Érvénytelen számla leírása';
$_['text_card_message_V6013'] 	= 'Érvénytelen számlaszám';
$_['text_card_message_V6014'] 	= 'Érvénytelen számla-hivatkozás';
$_['text_card_message_V6015'] 	= 'Érvénytelen pénznem kód';
$_['text_card_message_V6016'] 	= 'fizetés szükséges';
$_['text_card_message_V6017'] 	= 'Fizetési pénznem Kötelező kód';
$_['text_card_message_V6018'] 	= 'Ismeretlen fizetési pénznem kód';
$_['text_card_message_V6021'] 	= 'Kártyabirtokos neve szükséges';
$_['text_card_message_V6022'] 	= 'Kártya száma szükséges';
$_['text_card_message_V6023'] 	= 'CVN szükséges';
$_['text_card_message_V6031'] 	= 'Érvénytelen kártyaszám';
$_['text_card_message_V6032'] 	= 'Érvénytelen CVN';
$_['text_card_message_V6033'] 	= 'Érvénytelen lejárati dátum';
$_['text_card_message_V6034'] 	= 'Érvénytelen kiadási szám';
$_['text_card_message_V6035'] 	= 'Érvénytelen kezdő dátum';
$_['text_card_message_V6036'] 	= 'Érvénytelen hónap';
$_['text_card_message_V6037'] 	= 'Érvénytelen év';
$_['text_card_message_V6040'] 	= 'Érvénytelen tokennel rendelkező ügyfélazonosító';
$_['text_card_message_V6041'] 	= 'Szükséges vásárló';
$_['text_card_message_V6042'] 	= 'A vásárló neve szükséges';
$_['text_card_message_V6043'] 	= 'Ügyfél vezetéknév szükséges';
$_['text_card_message_V6044'] 	= 'Szükséges az ügyfél országkódja';
$_['text_card_message_V6045'] 	= 'Ügyfélcím szükséges';
$_['text_card_message_V6046'] 	= 'Token ügyfél-azonosító szükséges';
$_['text_card_message_V6047'] 	= 'Átirányítási URL szükséges';
$_['text_card_message_V6051'] 	= 'Érvénytelen elnevezés';
$_['text_card_message_V6052'] 	= 'Érvénytelen vezetéknév';
$_['text_card_message_V6053'] 	= 'Érvénytelen országkód';
$_['text_card_message_V6054'] 	= 'Érvénytelen e-mail';
$_['text_card_message_V6055'] 	= 'Érvénytelen telefon';
$_['text_card_message_V6056'] 	= 'Érvénytelen mobil';
$_['text_card_message_V6057'] 	= 'Érvénytelen fax';
$_['text_card_message_V6058'] 	= 'Érvénytelen cím';
$_['text_card_message_V6059'] 	= 'Átirányítási URL érvénytelen';
$_['text_card_message_V6060'] 	= 'Átirányítási URL érvénytelen';
$_['text_card_message_V6061'] 	= 'Érvénytelen hivatkozás';
$_['text_card_message_V6062'] 	= 'Érvénytelen cégnév';
$_['text_card_message_V6063'] 	= 'Érvénytelen munkaköri leírás';
$_['text_card_message_V6064'] 	= 'Érvénytelen utca1';
$_['text_card_message_V6065'] 	= 'Érvénytelen utca2';
$_['text_card_message_V6066'] 	= 'Érvénytelen város';
$_['text_card_message_V6067'] 	= 'Érvénytelen állapot';
$_['text_card_message_V6068'] 	= 'Érvénytelen irányítószám';
$_['text_card_message_V6069'] 	= 'Érvénytelen e-mail';
$_['text_card_message_V6070'] 	= 'Érvénytelen telefon';
$_['text_card_message_V6071'] 	= 'Érvénytelen mobil';
$_['text_card_message_V6072'] 	= 'Érvénytelen megjegyzések';
$_['text_card_message_V6073'] 	= 'Érvénytelen fax';
$_['text_card_message_V6074'] 	= 'Érvénytelen URL';
$_['text_card_message_V6075'] 	= 'Érvénytelen a szállítási cím első neve';
$_['text_card_message_V6076'] 	= 'Érvénytelen a szállítási cím vezetéknév';
$_['text_card_message_V6077'] 	= 'Érvénytelen szállítási cím utca1';
$_['text_card_message_V6078'] 	= 'Érvénytelen szállítási cím Street2';
$_['text_card_message_V6079'] 	= 'Érvénytelen szállítási cím város';
$_['text_card_message_V6080'] 	= 'Érvénytelen szállítási címállapot';
$_['text_card_message_V6081'] 	= 'Érvénytelen kézbesítési cím PostalCode';
$_['text_card_message_V6082'] 	= 'Érvénytelen a szállítási cím e-mailje';
$_['text_card_message_V6083'] 	= 'Érvénytelen szolgáltató cím telefon';
$_['text_card_message_V6084'] 	= 'Érvénytelen a szállítási cím országa';
$_['text_card_message_V6091'] 	= 'Ismeretlen országkód';
$_['text_card_message_V6100'] 	= 'Érvénytelen kártya neve';
$_['text_card_message_V6101'] 	= 'Érvénytelen kártya lejárati hónapja';
$_['text_card_message_V6102'] 	= 'Érvénytelen kártya lejárati éve';
$_['text_card_message_V6103'] 	= 'Érvénytelen kártya kezdő hónapja';
$_['text_card_message_V6104'] 	= 'Érvénytelen kártya kezdő éve';
$_['text_card_message_V6105'] 	= 'Érvénytelen kártya kiadási száma';
$_['text_card_message_V6106'] 	= 'Érvénytelen kártya CVN';
$_['text_card_message_V6107'] 	= 'Érvénytelen hozzáférési kód';
$_['text_card_message_V6108'] 	= 'Érvénytelen CustomerHostAddress';
$_['text_card_message_V6109'] 	= 'Érvénytelen UserAgent';
$_['text_card_message_V6110'] 	= 'Érvénytelen kártyaszám';
$_['text_card_message_V6111'] 	= 'Jogosulatlan API-hozzáférés, fiók nem PCI-tanúsítvánnyal';
$_['text_card_message_V6112'] 	= 'A lejárati év és hónap kivételével a redundáns kártyák adatai';
$_['text_card_message_V6113'] 	= 'Érvénytelen tranzakció visszatérítésre';
$_['text_card_message_V6114'] 	= 'Átjáró érvényesítési hiba';
$_['text_card_message_V6115'] 	= 'Érvénytelen DirectRefundRequest, tranzakcióazonosító';
$_['text_card_message_V6116'] 	= 'Érvénytelen kártyaadatok az eredeti TransactionID-en';
$_['text_card_message_V6124'] 	= 'Érvénytelen sorok. A sorokat azonban megadták, azonban a teljes összegek nem egyeznek meg a TotalAmount mezővel';
$_['text_card_message_V6125'] 	= 'A kiválasztott fizetési típus nem engedélyezett';
$_['text_card_message_V6126'] 	= 'Érvénytelen titkosított kártya száma, a visszafejtés sikertelen';
$_['text_card_message_V6127'] 	= 'Érvénytelen titkosított cvn, a visszafejtés sikertelen';
$_['text_card_message_V6128'] 	= 'Érvénytelen a fizetési mód típusa';
$_['text_card_message_V6129'] 	= 'A tranzakciót nem engedélyezték a rögzítés /törlés';
$_['text_card_message_V6130'] 	= 'Általános ügyfélinformációs hiba';
$_['text_card_message_V6131'] 	= 'Általános szállítási információ hiba';
$_['text_card_message_V6132'] 	= 'A tranzakció már befejeződött vagy érvénytelen, a művelet nem megengedett';
$_['text_card_message_V6133'] 	= 'A fizetés nem érhető el a fizetési módnál';
$_['text_card_message_V6134'] 	= 'Érvénytelen Auth Transaction ID a Capture /Void számára';
$_['text_card_message_V6135'] 	= 'PayPal hiba feldolgozási visszatérítés';
$_['text_card_message_V6140'] 	= 'A kereskedői fiókot felfüggesztették';
$_['text_card_message_V6141'] 	= 'Érvénytelen PayPal-fiók részletei vagy API-aláírás';
$_['text_card_message_V6142'] 	= 'A felhatalmazás nem áll rendelkezésre a bank /fióktelep számára';
$_['text_card_message_V6150'] 	= 'Érvénytelen visszatérítés összege';
$_['text_card_message_V6151'] 	= 'A visszatérítési összeg nagyobb, mint az eredeti tranzakció';
$_['text_card_message_D4406'] 	= 'Ismeretlen hiba';
$_['text_card_message_S5010'] 	= 'Ismeretlen hiba';