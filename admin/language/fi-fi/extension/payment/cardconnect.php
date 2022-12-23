<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'asetukset';
$_['tab_order_status']              = 'Tilauksen tila';

// Text
$_['text_extension']                = 'laajennukset';
$_['text_success']                  = 'Menestys: Olet modifioinut CardConnect-maksumoduulin!';
$_['text_edit']                     = 'Muokkaa CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'maksu';
$_['text_authorize']                = 'valtuuttaa';
$_['text_live']                     = 'Elää';
$_['text_test']                     = 'Testata';
$_['text_no_cron_time']             = 'Cron ei ole vielä toteutettu';
$_['text_payment_info']             = 'Maksutiedot';
$_['text_payment_method']           = 'Maksutapa';
$_['text_card']                     = 'Kortti';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Viite';
$_['text_update']                   = 'Päivittää';
$_['text_order_total']              = 'Tilaa yhteensä';
$_['text_total_captured']           = 'Yhteensä otettu';
$_['text_capture_payment']          = 'Kaappaa maksu';
$_['text_refund_payment']           = 'Hyvitysmaksu';
$_['text_void']                     = 'mitätön';
$_['text_transactions']             = 'liiketoimet';
$_['text_column_type']              = 'Tyyppi';
$_['text_column_reference']         = 'Viite';
$_['text_column_amount']            = 'Määrä';
$_['text_column_status']            = 'Status';
$_['text_column_date_modified']     = 'Päivämäärä muutettu';
$_['text_column_date_added']        = 'lisäyspäivämäärä';
$_['text_column_update']            = 'Päivittää';
$_['text_column_void']              = 'mitätön';
$_['text_confirm_capture']          = 'Haluatko varmasti tallentaa maksun?';
$_['text_confirm_refund']           = 'Haluatko varmasti palauttaa maksun?';
$_['text_inquire_success']          = 'Kysely onnistui';
$_['text_capture_success']          = 'Kaappauspyyntö onnistui';
$_['text_refund_success']           = 'Hyvityspyyntö onnistui';
$_['text_void_success']             = 'Virheellinen pyyntö onnistui';

// Entry
$_['entry_merchant_id']             = 'Kauppiastunnus';
$_['entry_api_username']            = 'API-käyttäjänimi';
$_['entry_api_password']            = 'API-salasana';
$_['entry_token']                   = 'Salainen Token';
$_['entry_transaction']             = 'liiketoimi';
$_['entry_environment']             = 'ympäristö';
$_['entry_site']                    = 'paikka';
$_['entry_store_cards']             = 'Tallenna kortit';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Kaikki yhteensä';
$_['entry_geo_zone']                = 'Geo Zone';
$_['entry_status']                  = 'Status';
$_['entry_logging']                 = 'Debug-lokin kirjaaminen';
$_['entry_sort_order']              = 'Lajittelujärjestys';
$_['entry_cron_url']                = 'Cron-työn URL';
$_['entry_cron_time']               = 'Cron-työn viimeinen ajo';
$_['entry_order_status_pending']    = 'odotettaessa';
$_['entry_order_status_processing'] = 'käsittely';

// Help
$_['help_merchant_id']              = 'Henkilökohtainen CardConnect-tilisi kauppias-tunnus.';
$_['help_api_username']             = 'Käyttäjätunnussi käyttää CardConnect-sovellusliittymää.';
$_['help_api_password']             = 'Salasanasi käyttää CardConnect-sovellusliittymää.';
$_['help_token']                    = 'Anna satunnaisen tunnuksen suojausta varten tai käytä luotua.';
$_['help_transaction']              = 'Valitse maksuaika \ "Maksu \" tai hyväksyä se \'Authorize \'.';
$_['help_site']                     = 'Tämä määrittää API-URL-osoitteen ensimmäisen osan. Vaihda vain ohjeiden mukaan.';
$_['help_store_cards']              = 'Haluatko tallentaa kortit pelkistämällä.';
$_['help_echeck']                   = 'Haluatko tarjota mahdollisuuden maksaa eCheckin avulla.';
$_['help_total']                    = 'Kassan kokonaismäärä tilauksen on saavuttava ennen tämän maksutavan aktivointia. On oltava arvo, jolla ei ole valuutan merkkiä.';
$_['help_logging']                  = 'Virheenkorjauksen ottaminen käyttöön kirjoittaa arkaluonteisia tietoja lokitiedostoon. Sinun tulisi aina poistaa käytöstä, ellei toisin ole määrätty.';
$_['help_cron_url']                 = 'Aseta cron-työ soittaaksesi tähän URL-osoitteeseen niin, että tilaukset päivittyvät automaattisesti. Se on suunniteltu toimimaan muutaman tunnin kuluttua viimeisen arkipäivän ottamisesta.';
$_['help_cron_time']                = 'Tämä on viimeinen kerta, kun cron-työn URL-osoite suoritettiin.';
$_['help_order_status_pending']     = 'Tilauksen tila, kun kauppias on hyväksynyt tilauksen.';
$_['help_order_status_processing']  = 'Tilaustila, kun tilaus otetaan automaattisesti vastaan.';

// Button
$_['button_inquire_all']            = 'Kysy Kaikki';
$_['button_capture']                = 'Kaapata';
$_['button_refund']                 = 'Maksun palautus';
$_['button_void_all']               = 'Void kaikki';
$_['button_inquire']                = 'Tiedustella';
$_['button_void']                   = 'mitätön';

// Error
$_['error_permission']              = 'Varoitus: Sinulla ei ole lupaa muuttaa maksua CardConnect!';
$_['error_merchant_id']             = 'Kauppiastunnus vaaditaan!';
$_['error_api_username']            = 'API-käyttäjätunnus vaaditaan!';
$_['error_api_password']            = 'API-salasana vaaditaan!';
$_['error_token']                   = 'Salaisen pelimerkin haltija!';
$_['error_site']                    = 'Sivusto on pakollinen!';
$_['error_amount_zero']             = 'Summan on oltava suurempi kuin nolla!';
$_['error_no_order']                = 'Ei sopivaa tilaustietoa!';
$_['error_invalid_response']        = 'Väärä vastaanotettu vastaus!';
$_['error_data_missing']            = 'Tietoja puuttuu!';
$_['error_not_enabled']             = 'Moduuli ei käytössä!';