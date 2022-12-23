<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Seaded';
$_['tab_order_status']              = 'Telli olek';

// Text
$_['text_extension']                = 'Laiendused';
$_['text_success']                  = 'Edu: olete muutnud CardConnecti makse moodulit!';
$_['text_edit']                     = 'Redigeeri CardConnecti';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Makse';
$_['text_authorize']                = 'Volitatud';
$_['text_live']                     = 'Elada';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'Cronit ei ole veel täidetud';
$_['text_payment_info']             = 'Makseteave';
$_['text_payment_method']           = 'Makseviis';
$_['text_card']                     = 'Kaart';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Viide';
$_['text_update']                   = 'Uuenda';
$_['text_order_total']              = 'Kokku';
$_['text_total_captured']           = 'Kokku kinni püütud';
$_['text_capture_payment']          = 'Tasku võtmine';
$_['text_refund_payment']           = 'Tagasimakse';
$_['text_void']                     = 'Kehtetu';
$_['text_transactions']             = 'Tehingud';
$_['text_column_type']              = 'Tüüp';
$_['text_column_reference']         = 'Viide';
$_['text_column_amount']            = 'Summa';
$_['text_column_status']            = 'Olek';
$_['text_column_date_modified']     = 'Muudetud kuupäev';
$_['text_column_date_added']        = 'kuupäev lisatud';
$_['text_column_update']            = 'Uuenda';
$_['text_column_void']              = 'Kehtetu';
$_['text_confirm_capture']          = 'Kas olete kindel, et tahate salvestada makse?';
$_['text_confirm_refund']           = 'Kas olete kindel, et soovite makset ? tagasi maksta';
$_['text_inquire_success']          = 'Päring oli edukas';
$_['text_capture_success']          = 'Pildistamise taotlus oli edukas';
$_['text_refund_success']           = 'Tagasimakse taotlus oli edukas';
$_['text_void_success']             = 'Void taotlus oli edukas';

// Entry
$_['entry_merchant_id']             = 'Kaupmehe ID';
$_['entry_api_username']            = 'API-i kasutajatunnus';
$_['entry_api_password']            = 'API-parool';
$_['entry_token']                   = 'Secret Token';
$_['entry_transaction']             = 'Tehing';
$_['entry_environment']             = 'Keskkond';
$_['entry_site']                    = 'Saidi';
$_['entry_store_cards']             = 'Kaupluste kaardid';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Kokku';
$_['entry_geo_zone']                = 'Geo tsoon';
$_['entry_status']                  = 'Olek';
$_['entry_logging']                 = 'Silumine metsaraie';
$_['entry_sort_order']              = 'Sorteeri järjestus';
$_['entry_cron_url']                = 'Croni töö URL-id';
$_['entry_cron_time']               = 'Cron Job viimane käik';
$_['entry_order_status_pending']    = 'Ootel';
$_['entry_order_status_processing'] = 'Töötlemine';

// Help
$_['help_merchant_id']              = 'Teie isiklik CardConnecti konto kaupmehe ID.';
$_['help_api_username']             = 'Teie kasutajanimi, et pääseda juurde CardConnect API-le.';
$_['help_api_password']             = 'Teie parool, et pääseda CardConnecti API-le.';
$_['help_token']                    = 'Sisestage turvaline juhuslik jutt või kasutage genereeritud.';
$_['help_transaction']              = 'Valige maksekorraldus \'Makse \', et kohe maksta või \'autoriseerida \', et seda kinnitada.';
$_['help_site']                     = 'See määrab API-i URL-i esimese osa. Muuda ainult siis, kui õpetatakse.';
$_['help_store_cards']              = 'Kas soovite salvestada kaarte kasutades tokeniseerimist.';
$_['help_echeck']                   = 'Kas soovite pakkuda eChecki abil maksevõimalust?';
$_['help_total']                    = 'Tellimuse kogu tellimus peab jõudma enne selle makseviisi aktiveerimist. Peab olema väärtus ilma valuuta märketa.';
$_['help_logging']                  = 'Vigade lubamine salvestab tundlikke andmeid logifaili. Peaksite alati keelama, kui pole teisiti ette nähtud.';
$_['help_cron_url']                 = 'Seadista cron-ülesanne, et helistada sellele URL-le, nii et tellimusi värskendatakse automaatselt. See on kavandatud töötama mõni tund pärast tööpäeva viimast püüdmist.';
$_['help_cron_time']                = 'See on viimane cron-i töökoha URL-i täitmise aeg.';
$_['help_order_status_pending']     = 'Tellimuse staatus, kui kaupmees peab tellimuse saatma.';
$_['help_order_status_processing']  = 'Tellimuse staatus, kui tellimus on automaatselt salvestatud.';

// Button
$_['button_inquire_all']            = 'Küsige kõik';
$_['button_capture']                = 'Lüüa';
$_['button_refund']                 = 'Tagasimaksed';
$_['button_void_all']               = 'Void Kõik';
$_['button_inquire']                = 'Küsi';
$_['button_void']                   = 'Kehtetu';

// Error
$_['error_permission']              = 'Hoiatus. Teil pole luba muuta makse CardConnect!';
$_['error_merchant_id']             = 'Kaupmehe ID nõutav!';
$_['error_api_username']            = 'API kasutajanimi Required!';
$_['error_api_password']            = 'API Password Required!';
$_['error_token']                   = 'Secret Token Required!';
$_['error_site']                    = 'Saidi vaja on!';
$_['error_amount_zero']             = 'Summa peab olema suurem kui null!';
$_['error_no_order']                = 'Vastav tellimuse info! puudub';
$_['error_invalid_response']        = 'Kehtetu vastuvõetud vastus!';
$_['error_data_missing']            = 'Andmed puuduvad!';
$_['error_not_enabled']             = 'Moodul pole lubatud!';