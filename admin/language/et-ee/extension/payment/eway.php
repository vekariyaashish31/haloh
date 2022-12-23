<?php
// Heading
$_['heading_title']				= 'EWAY makse';

// Text
$_['text_extension']			= 'Laiendused';
$_['text_success']				= 'Edu: olete muutnud oma eWAY-i üksikasju!';
$_['text_edit']					= 'Muuda eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Autoriseerimine';
$_['text_sale']					= 'Müük';
$_['text_transparent']			= 'Läbipaistev ümber suunamine (makseviis kohapeal)';
$_['text_iframe']				= 'IFrame (makseviis aknas)';

// Entry
$_['entry_paymode']				= 'Makse režiim';
$_['entry_test']				= 'Testirežiim';
$_['entry_order_status']		= 'Telli olek';
$_['entry_order_status_refund'] = 'Tagasimakse järjekorra olek';
$_['entry_order_status_auth']	= 'Tellitud olek';
$_['entry_order_status_fraud']	= 'Oletatav pettusekäskude staatus';
$_['entry_status']				= 'Olek';
$_['entry_username']			= 'EWAY API-võti';
$_['entry_password']			= 'eWAY parool';
$_['entry_payment_type']		= 'Makseviis';
$_['entry_geo_zone']			= 'Geo tsoon';
$_['entry_sort_order']			= 'Sorteeri järjestus';
$_['entry_transaction_method']	= 'Tehingumeetod';

// Error
$_['error_permission']			= 'Hoiatus: Teil ei ole õigust eWAY makse mooduli muutmiseks';
$_['error_username']			= 'EWAY API-kood on nõutav!';
$_['error_password']			= 'eWAY parool on kohustuslik!';
$_['error_payment_type']		= 'Vähemalt üks makse tüüp on nõutav!';

// Help hints
$_['help_testmode']				= 'Määrake Yes, et kasutada eWAY liivakasti.';
$_['help_username']				= 'Sinu EWAY API-klahv MYeWAY-i kontolt.';
$_['help_password']				= 'Teie eWAY API-parool teie MYeWAY-kontolt.';
$_['help_transaction_method']	= 'Luba on saadaval ainult Austraalia pankade jaoks';

// Order page - payment tab
$_['text_payment_info']			= 'Makseteave';
$_['text_order_total']			= 'Kokku lubatud';
$_['text_transactions']			= 'Tehingud';
$_['text_column_transactionid'] = 'eWAY tehingu ID';
$_['text_column_amount']		= 'Summa';
$_['text_column_type']			= 'Tüüp';
$_['text_column_created']		= 'Loodud';
$_['text_total_captured']		= 'Kokku püütud';
$_['text_capture_status']		= 'Makse on registreeritud';
$_['text_void_status']			= 'Maksmine on tühistatud';
$_['text_refund_status']		= 'Makse tagastatakse';
$_['text_total_refunded']		= 'Tagastatud summa kokku';
$_['text_refund_success']		= 'Tagasimakse sai !';
$_['text_capture_success']		= 'Pildistamine õnnestus!';
$_['text_refund_failed']		= 'Tagasimaksmine ebaõnnestus:';
$_['text_capture_failed']		= 'Pildistamine ebaõnnestus:';
$_['text_unknown_failure']		= 'Kehtetu tellimus või summa';

$_['text_confirm_capture']		= 'Kas olete kindel, et tahate salvestada makse?';
$_['text_confirm_release']		= 'Kas olete kindel, et soovite makset ? vabastada?';
$_['text_confirm_refund']		= 'Kas olete kindel, et soovite makset ? tagasi maksta';

$_['text_empty_refund']			= 'Palun sisestage tagasimaksmisele kuuluv summa';
$_['text_empty_capture']		= 'Palun sisestage kogus, mida soovite salvestada';

$_['btn_refund']				= 'Tagasimaksed';
$_['btn_capture']				= 'Lüüa';

// Validation Error codes
$_['text_card_message_V6000']	= 'Undefined Validation Error';
$_['text_card_message_V6001'] 	= 'Kehtetu kliendi IP-aadress';
$_['text_card_message_V6002'] 	= 'Kehtetu DeviceID';
$_['text_card_message_V6011'] 	= 'Kehtetu summa';
$_['text_card_message_V6012'] 	= 'Kehtetu arve kirjeldus';
$_['text_card_message_V6013'] 	= 'Kehtetu arve number';
$_['text_card_message_V6014'] 	= 'Kehtetu arve viide';
$_['text_card_message_V6015'] 	= 'Kehtetu valuuta kood';
$_['text_card_message_V6016'] 	= 'Maksmine on kohustuslik';
$_['text_card_message_V6017'] 	= 'Makse valuuta kood on nõutav';
$_['text_card_message_V6018'] 	= 'Tundmatu maksevaluuta kood';
$_['text_card_message_V6021'] 	= 'Kaardiomaniku nimi on kohustuslik';
$_['text_card_message_V6022'] 	= 'Kaardi number on nõutav';
$_['text_card_message_V6023'] 	= 'CVN Nõutav';
$_['text_card_message_V6031'] 	= 'Vigane kaardinumber';
$_['text_card_message_V6032'] 	= 'CVN on kehtetu';
$_['text_card_message_V6033'] 	= 'Kehtetu aegumiskuupäev';
$_['text_card_message_V6034'] 	= 'Kehtetu veakood';
$_['text_card_message_V6035'] 	= 'Kehtetu alguskuupäev';
$_['text_card_message_V6036'] 	= 'Kehtetu kuu';
$_['text_card_message_V6037'] 	= 'Kehtetu aasta';
$_['text_card_message_V6040'] 	= 'Kehtetu Token Kliendi Id';
$_['text_card_message_V6041'] 	= 'Klient on kohustatud';
$_['text_card_message_V6042'] 	= 'Kliendi eesnimi on kohustuslik';
$_['text_card_message_V6043'] 	= 'Kliendi perekonnanimi on nõutav';
$_['text_card_message_V6044'] 	= 'Kliendi riigi kood on kohustuslik';
$_['text_card_message_V6045'] 	= 'Kliendi pealkiri on kohustuslik';
$_['text_card_message_V6046'] 	= 'Tokeni kliendi ID on nõutav';
$_['text_card_message_V6047'] 	= 'RedirectURL on nõutav';
$_['text_card_message_V6051'] 	= 'Kehtetu eesnimi';
$_['text_card_message_V6052'] 	= 'Kehtetu perekonnanimi';
$_['text_card_message_V6053'] 	= 'Kehtetu riigi kood';
$_['text_card_message_V6054'] 	= 'Kehtetu e-kiri';
$_['text_card_message_V6055'] 	= 'Kehtetu telefon';
$_['text_card_message_V6056'] 	= 'Kehtetu mobiilne';
$_['text_card_message_V6057'] 	= 'Kehtetu faks';
$_['text_card_message_V6058'] 	= 'Kehtetu tiit';
$_['text_card_message_V6059'] 	= 'Redigeeri URL on vale';
$_['text_card_message_V6060'] 	= 'Redigeeri URL on vale';
$_['text_card_message_V6061'] 	= 'Kehtetu viide';
$_['text_card_message_V6062'] 	= 'Kehtetu ettevõtte nimi';
$_['text_card_message_V6063'] 	= 'Töö kirjelduse kehtetu';
$_['text_card_message_V6064'] 	= 'Kehtetu Street1';
$_['text_card_message_V6065'] 	= 'Kehtetu Street2';
$_['text_card_message_V6066'] 	= 'Kehtetu linn';
$_['text_card_message_V6067'] 	= 'Kehtetu olek';
$_['text_card_message_V6068'] 	= 'Kehtetu postiindeks';
$_['text_card_message_V6069'] 	= 'Kehtetu e-kiri';
$_['text_card_message_V6070'] 	= 'Kehtetu telefon';
$_['text_card_message_V6071'] 	= 'Kehtetu mobiilne';
$_['text_card_message_V6072'] 	= 'Kehtetu kommentaarid';
$_['text_card_message_V6073'] 	= 'Kehtetu faks';
$_['text_card_message_V6074'] 	= 'Vigane URL';
$_['text_card_message_V6075'] 	= 'Kehtetu kohaletoimetamise aadress e-kiri';
$_['text_card_message_V6076'] 	= 'Kehtetu kohaletoimetamise aadress perekonnanimi';
$_['text_card_message_V6077'] 	= 'Kehtetu kohaletoimetamise aadress Street1';
$_['text_card_message_V6078'] 	= 'Kehtetu kohaletoimetamise aadress Street2';
$_['text_card_message_V6079'] 	= 'Kehtetu kohaletoimetamise aadress';
$_['text_card_message_V6080'] 	= 'Kehtetu kohaletoimetamise aadress';
$_['text_card_message_V6081'] 	= 'Kehtetu kohaletoimetamise aadress PostalCode';
$_['text_card_message_V6082'] 	= 'Kehtetu saatmisaadressi e-post';
$_['text_card_message_V6083'] 	= 'Kehtetu kohaletoimetamise aadress Telefon';
$_['text_card_message_V6084'] 	= 'Kehtetu kohaletoimetamise aadress';
$_['text_card_message_V6091'] 	= 'Tundmatu riigikood';
$_['text_card_message_V6100'] 	= 'Kehtetu kaardinimi';
$_['text_card_message_V6101'] 	= 'Kehtetu kaardi kehtivusaeg';
$_['text_card_message_V6102'] 	= 'Kehtetu kaardi kehtivusaeg';
$_['text_card_message_V6103'] 	= 'Kehtetu kaardi alguskuupäev';
$_['text_card_message_V6104'] 	= 'Kehtetu kaardi algusaasta';
$_['text_card_message_V6105'] 	= 'Kehtetu kaardinumbri number';
$_['text_card_message_V6106'] 	= 'Kehtetu kaardi CVN';
$_['text_card_message_V6107'] 	= 'Kehtetu juurdepääsukood';
$_['text_card_message_V6108'] 	= 'Kehtetu KlientHostAddress';
$_['text_card_message_V6109'] 	= 'Kehtetu kasutajaagent';
$_['text_card_message_V6110'] 	= 'Vigane kaardinumber';
$_['text_card_message_V6111'] 	= 'Volitamata API-juurdepääs, konto pole PCI-sertifikaat';
$_['text_card_message_V6112'] 	= 'Liigne kaarditeated, va aegumiskuupäev ja kuu';
$_['text_card_message_V6113'] 	= 'Toetuse jaoks sobimatu tehing';
$_['text_card_message_V6114'] 	= 'Gateway valideerimise viga';
$_['text_card_message_V6115'] 	= 'Kehtetu DirectRefundRequest, Tehingu ID';
$_['text_card_message_V6116'] 	= 'Kehtetu kaarditeave originaal TransactionID';
$_['text_card_message_V6124'] 	= 'Kehtetu reaelemendid. Ridaartiklid on esitatud, kuid kogusummad ei vasta väljale TotalAmount';
$_['text_card_message_V6125'] 	= 'Valitud makseviis pole lubatud';
$_['text_card_message_V6126'] 	= 'Kehtetu krüptitud kaardi number, dekrüptimine ebaõnnestus';
$_['text_card_message_V6127'] 	= 'Kehtetu krüptitud cvn, dekrüpteerimine ebaõnnestus';
$_['text_card_message_V6128'] 	= 'Makse tüübi vale meetod';
$_['text_card_message_V6129'] 	= 'Tehing ei ole litsentsimise /tühistamise jaoks lubatud';
$_['text_card_message_V6130'] 	= 'Üldine kliendiinfo viga';
$_['text_card_message_V6131'] 	= 'Üldine veateave';
$_['text_card_message_V6132'] 	= 'Tehing on juba lõpetatud või tühistatud, toiming ei ole lubatud';
$_['text_card_message_V6133'] 	= 'Checkout pole makseviisi jaoks saadaval';
$_['text_card_message_V6134'] 	= 'Kehtetu auth-tehingu ID kaadri salvestamiseks /tühiseks';
$_['text_card_message_V6135'] 	= 'PayPal viga töötlemise tagasimaksed';
$_['text_card_message_V6140'] 	= 'Kaupmehe konto on peatatud';
$_['text_card_message_V6141'] 	= 'Kehtetu PayPali konto andmed või API-allkiri';
$_['text_card_message_V6142'] 	= 'Luba ei ole Panga /filiaali jaoks saadaval';
$_['text_card_message_V6150'] 	= 'Kehtetu tagasimaksmise summa';
$_['text_card_message_V6151'] 	= 'Tagasimakse summa on suurem kui esialgne tehing';
$_['text_card_message_D4406'] 	= 'Tundmatu viga';
$_['text_card_message_S5010'] 	= 'Tundmatu viga';