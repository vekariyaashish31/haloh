<?php
// Heading
$_['heading_title']				= 'Platba eWAY';

// Text
$_['text_extension']			= 'Rozšíření';
$_['text_success']				= 'Úspěch: Upravili jste podrobnosti eWAY!';
$_['text_edit']					= 'Upravte eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Oprávnění';
$_['text_sale']					= 'Prodej';
$_['text_transparent']			= 'Transparentní přesměrování (platební formulář na webu)';
$_['text_iframe']				= 'IFrame (platební formulář v okně)';

// Entry
$_['entry_paymode']				= 'Platební režim';
$_['entry_test']				= 'Testovací mód';
$_['entry_order_status']		= 'Stav objednávky';
$_['entry_order_status_refund'] = 'Stav vrácených objednávek';
$_['entry_order_status_auth']	= 'Autorizovaný stav objednávky';
$_['entry_order_status_fraud']	= 'Podezření na stav objednávky podvodů';
$_['entry_status']				= 'Postavení';
$_['entry_username']			= 'Klíč API eWAY';
$_['entry_password']			= 'eWAY heslo';
$_['entry_payment_type']		= 'Způsob platby';
$_['entry_geo_zone']			= 'Geo zóna';
$_['entry_sort_order']			= 'Řazení pořadí';
$_['entry_transaction_method']	= 'Metoda transakce';

// Error
$_['error_permission']			= 'Upozornění: Nemáte oprávnění k úpravě platebního modulu eWAY';
$_['error_username']			= 'Klíč API eWAY je vyžadován!';
$_['error_password']			= 'Je vyžadováno heslo eWAY!';
$_['error_payment_type']		= 'Je vyžadován alespoň jeden typ platby!';

// Help hints
$_['help_testmode']				= 'Nastavte Ano, chcete-li použít eWAY Sandbox.';
$_['help_username']				= 'Klíč vašeho eWAY API z účtu MYeWAY.';
$_['help_password']				= 'Heslo eWAY API z účtu MYeWAY.';
$_['help_transaction_method']	= 'Autorizace je k dispozici pouze pro australské banky';

// Order page - payment tab
$_['text_payment_info']			= 'Informace o platbě';
$_['text_order_total']			= 'Celkem schváleno';
$_['text_transactions']			= 'Transakce';
$_['text_column_transactionid'] = 'ID transakce eWAY';
$_['text_column_amount']		= 'Množství';
$_['text_column_type']			= 'Typ';
$_['text_column_created']		= 'Vytvořeno';
$_['text_total_captured']		= 'Celkem zachyceno';
$_['text_capture_status']		= 'Zaplacená platba';
$_['text_void_status']			= 'Platba byla zrušena';
$_['text_refund_status']		= 'Platba byla vrácena';
$_['text_total_refunded']		= 'Celková částka vrácena';
$_['text_refund_success']		= 'Náhrada se podařilo!';
$_['text_capture_success']		= 'Capture succeeded!';
$_['text_refund_failed']		= 'Refundace selhala:';
$_['text_capture_failed']		= 'Záznam se nezdařil:';
$_['text_unknown_failure']		= 'Neplatná objednávka nebo částka';

$_['text_confirm_capture']		= 'Opravdu chcete zachytit platbu?';
$_['text_confirm_release']		= 'Opravdu chcete uvolnit platbu?';
$_['text_confirm_refund']		= 'Opravdu chcete vrátit platbu?';

$_['text_empty_refund']			= 'Zadejte prosím částku, kterou chcete vrátit';
$_['text_empty_capture']		= 'Zadejte prosím částku, kterou chcete zachytit';

$_['btn_refund']				= 'Vrácení platby';
$_['btn_capture']				= 'Zachyťte';

// Validation Error codes
$_['text_card_message_V6000']	= 'Nedefinovaná chyba ověření';
$_['text_card_message_V6001'] 	= 'Neplatná adresa IP zákazníka';
$_['text_card_message_V6002'] 	= 'Neplatné ID zařízení';
$_['text_card_message_V6011'] 	= 'Neplatná částka';
$_['text_card_message_V6012'] 	= 'Neplatný popis faktury';
$_['text_card_message_V6013'] 	= 'Neplatné číslo faktury';
$_['text_card_message_V6014'] 	= 'Neplatná reference faktury';
$_['text_card_message_V6015'] 	= 'Neplatný měnový kód';
$_['text_card_message_V6016'] 	= 'platba vyžadována';
$_['text_card_message_V6017'] 	= 'Potřebný kód měny platby';
$_['text_card_message_V6018'] 	= 'Neznámý měnový kód platby';
$_['text_card_message_V6021'] 	= 'Vyžadováno jméno držitele karty';
$_['text_card_message_V6022'] 	= 'Číslo karty požadováno';
$_['text_card_message_V6023'] 	= 'CVN Požadováno';
$_['text_card_message_V6031'] 	= 'Neplatné číslo karty';
$_['text_card_message_V6032'] 	= 'Neplatný CVN';
$_['text_card_message_V6033'] 	= 'Neplatný den vypršení platnosti';
$_['text_card_message_V6034'] 	= 'Neplatné číslo vydání';
$_['text_card_message_V6035'] 	= 'Neplatný počáteční datum';
$_['text_card_message_V6036'] 	= 'Neplatný měsíc';
$_['text_card_message_V6037'] 	= 'Neplatný rok';
$_['text_card_message_V6040'] 	= 'Neplatné ID zákazníka tokenu';
$_['text_card_message_V6041'] 	= 'Zákazník požadován';
$_['text_card_message_V6042'] 	= 'Vyžaduje se první jméno zákazníka';
$_['text_card_message_V6043'] 	= 'Vyžaduje se příjmení zákazníka';
$_['text_card_message_V6044'] 	= 'Kód země zákazníka je vyžadován';
$_['text_card_message_V6045'] 	= 'Požadovaný název zákazníka';
$_['text_card_message_V6046'] 	= 'Potřebné ID zákazníka tokenu';
$_['text_card_message_V6047'] 	= 'RedirectURL Požadováno';
$_['text_card_message_V6051'] 	= 'Neplatné jméno';
$_['text_card_message_V6052'] 	= 'Neplatné příjmení';
$_['text_card_message_V6053'] 	= 'Neplatný kód země';
$_['text_card_message_V6054'] 	= 'Neplatný e-mail';
$_['text_card_message_V6055'] 	= 'Neplatný telefon';
$_['text_card_message_V6056'] 	= 'Neplatný mobil';
$_['text_card_message_V6057'] 	= 'Neplatný fax';
$_['text_card_message_V6058'] 	= 'Neplatný název';
$_['text_card_message_V6059'] 	= 'Adresa URL přesměrování je neplatná';
$_['text_card_message_V6060'] 	= 'Adresa URL přesměrování je neplatná';
$_['text_card_message_V6061'] 	= 'Neplatná reference';
$_['text_card_message_V6062'] 	= 'Neplatné jméno společnosti';
$_['text_card_message_V6063'] 	= 'Neplatný popis úlohy';
$_['text_card_message_V6064'] 	= 'Neplatná ulice1';
$_['text_card_message_V6065'] 	= 'Neplatná ulice2';
$_['text_card_message_V6066'] 	= 'Neplatné město';
$_['text_card_message_V6067'] 	= 'Neplatný stav';
$_['text_card_message_V6068'] 	= 'Neplatný PSČ';
$_['text_card_message_V6069'] 	= 'Neplatný e-mail';
$_['text_card_message_V6070'] 	= 'Neplatný telefon';
$_['text_card_message_V6071'] 	= 'Neplatný mobil';
$_['text_card_message_V6072'] 	= 'Neplatné komentáře';
$_['text_card_message_V6073'] 	= 'Neplatný fax';
$_['text_card_message_V6074'] 	= 'Neplatná URL';
$_['text_card_message_V6075'] 	= 'Neplatná adresa pro první adresu';
$_['text_card_message_V6076'] 	= 'Neplatná příjmení adresy odeslání';
$_['text_card_message_V6077'] 	= 'Neplatná adresa pro odesílání Street1';
$_['text_card_message_V6078'] 	= 'Neplatná adresa pro odesílání Street2';
$_['text_card_message_V6079'] 	= 'Město neplatné adresy odeslání';
$_['text_card_message_V6080'] 	= 'Neplatný stav adresy odeslání';
$_['text_card_message_V6081'] 	= 'Neplatná poštovní adresa PostalCode';
$_['text_card_message_V6082'] 	= 'Neplatný e-mail s adresou odeslání';
$_['text_card_message_V6083'] 	= 'Neplatný adresní telefon';
$_['text_card_message_V6084'] 	= 'Země neplatné adresy odeslání';
$_['text_card_message_V6091'] 	= 'Neznámý kód země';
$_['text_card_message_V6100'] 	= 'Neplatné jméno karty';
$_['text_card_message_V6101'] 	= 'Neplatný měsíc vypršení platnosti karty';
$_['text_card_message_V6102'] 	= 'Neplatný rok vypršení platnosti karty';
$_['text_card_message_V6103'] 	= 'Neplatný měsíc zahájení karty';
$_['text_card_message_V6104'] 	= 'Neplatný rok zahájení karty';
$_['text_card_message_V6105'] 	= 'Neplatné číslo vydání karty';
$_['text_card_message_V6106'] 	= 'Neplatná karta CVN';
$_['text_card_message_V6107'] 	= 'Neplatný přístupový kód';
$_['text_card_message_V6108'] 	= 'Neplatná adresa zákazníkaHostAddress';
$_['text_card_message_V6109'] 	= 'Neplatné UserAgent';
$_['text_card_message_V6110'] 	= 'Neplatné číslo karty';
$_['text_card_message_V6111'] 	= 'Neoprávněný přístup k API, účet není certifikován podle PCI';
$_['text_card_message_V6112'] 	= 'Redundantní údaje o kartě jiné než rok a měsíc uplynutí platnosti';
$_['text_card_message_V6113'] 	= 'Neplatná transakce pro vrácení peněz';
$_['text_card_message_V6114'] 	= 'Chyba ověření brány';
$_['text_card_message_V6115'] 	= 'Neplatná adresa DirectRefundRequest, ID transakce';
$_['text_card_message_V6116'] 	= 'Neplatné údaje o kartě na původní ID transakce';
$_['text_card_message_V6124'] 	= 'Neplatné řádkové položky. Byly poskytnuty řádkové položky, ale součty neodpovídají pole TotalAmount';
$_['text_card_message_V6125'] 	= 'Vybraný typ platby není povolen';
$_['text_card_message_V6126'] 	= 'Neplatné šifrované číslo karty, dešifrování se nezdařilo';
$_['text_card_message_V6127'] 	= 'Neplatná šifrovaná cvn, dešifrování se nezdařilo';
$_['text_card_message_V6128'] 	= 'Neplatná metoda pro typ platby';
$_['text_card_message_V6129'] 	= 'Transakce nebyla schválena pro zachycení /zrušení';
$_['text_card_message_V6130'] 	= 'Chyba obecných informací o zákaznících';
$_['text_card_message_V6131'] 	= 'Chyba obecné informace o odeslání';
$_['text_card_message_V6132'] 	= 'Transakce již byla dokončena nebo zrušena, provoz není povolen';
$_['text_card_message_V6133'] 	= 'Pokladna není k dispozici pro typ platby';
$_['text_card_message_V6134'] 	= 'Neplatné ID transakce Auth pro Capture /Void';
$_['text_card_message_V6135'] 	= 'Zpracování vrácených chyb na PayPal';
$_['text_card_message_V6140'] 	= 'Účet obchodníka je pozastaven';
$_['text_card_message_V6141'] 	= 'Neplatné podrobnosti o účtu PayPal nebo podpis API';
$_['text_card_message_V6142'] 	= 'Autorizace není k dispozici pro Banku /Pobočku';
$_['text_card_message_V6150'] 	= 'Neplatná částka vrácení peněz';
$_['text_card_message_V6151'] 	= 'Výše náhrady vyšší než původní transakce';
$_['text_card_message_D4406'] 	= 'Neznámá chyba';
$_['text_card_message_S5010'] 	= 'Neznámá chyba';