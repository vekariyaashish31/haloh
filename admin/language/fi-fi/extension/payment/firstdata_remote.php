<?php
// Heading
$_['heading_title']					 = 'Ensimmäinen Data EMEA -Web-palvelu API';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'laajennukset';
$_['text_success']					 = 'Menestys: Olet muuttanut First Data -tilin tietoja !';
$_['text_edit']                      = 'Muokkaa ensin EMEA-verkkopalvelun API';
$_['text_card_type']				 = 'Korttityyppi';
$_['text_enabled']					 = 'käytössä';
$_['text_merchant_id']				 = 'Store ID';
$_['text_subaccount']				 = 'alatilille';
$_['text_user_id']					 = 'käyttäjätunnus';
$_['text_capture_ok']				 = 'Kaappaus onnistui';
$_['text_capture_ok_order']			 = 'Capture onnistui, tilaustila päivitettiin onnistuneesti';
$_['text_refund_ok']				 = 'Hyvitys onnistui';
$_['text_refund_ok_order']			 = 'Hyvitys onnistui, tilaustila päivitettiin palautetuksi';
$_['text_void_ok']					 = 'Void onnistui, tilaustila päivittyi mitätöitynä';
$_['text_settle_auto']				 = 'myynti';
$_['text_settle_delayed']			 = 'Pre auth';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Maksutiedot';
$_['text_capture_status']			 = 'Maksu on otettu';
$_['text_void_status']				 = 'Maksu mitätöity';
$_['text_refund_status']			 = 'Maksu palautetaan';
$_['text_order_ref']				 = 'Tilausnro';
$_['text_order_total']				 = 'Yhteensä sallittu';
$_['text_total_captured']			 = 'Yhteensä otettu';
$_['text_transactions']				 = 'liiketoimet';
$_['text_column_amount']			 = 'Määrä';
$_['text_column_type']				 = 'Tyyppi';
$_['text_column_date_added']		 = 'Luotu';
$_['text_confirm_void']				 = 'Haluatko varmasti mitätöidä maksun?';
$_['text_confirm_capture']			 = 'Haluatko varmasti tallentaa maksun?';
$_['text_confirm_refund']			 = 'Haluatko varmasti palauttaa maksun?';

// Entry
$_['entry_certificate_path']		 = 'Todennusreitti';
$_['entry_certificate_key_path']	 = 'Yksityinen avainpolku';
$_['entry_certificate_key_pw']		 = 'Yksityisen avaimen salasana';
$_['entry_certificate_ca_path']		 = 'CA-polku';
$_['entry_merchant_id']				 = 'Store ID';
$_['entry_user_id']					 = 'käyttäjätunnus';
$_['entry_password']				 = 'Salasana';
$_['entry_total']					 = 'Kaikki yhteensä';
$_['entry_sort_order']				 = 'Lajittelujärjestys';
$_['entry_geo_zone']				 = 'Geo-alue';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Debug-kirjautumisen';
$_['entry_auto_settle']				 = 'Sovintotyyppi';
$_['entry_status_success_settled']	 = 'Menestys - ratkaistaan';
$_['entry_status_success_unsettled'] = 'Menestys - ei ratkaistu';
$_['entry_status_decline']			 = 'aleneminen';
$_['entry_status_void']				 = 'silöityjen';
$_['entry_status_refund']			 = 'Hyvitetty';
$_['entry_enable_card_store']		 = 'Ota kortin tallennustunnukset käyttöön';
$_['entry_cards_accepted']			 = 'Hyväksytyt korttityypit';

// Help
$_['help_total']					 = 'Kassan kokonaismäärä tilauksen on saavuttava ennen tämän maksutavan aktivointia';
$_['help_certificate']				 = 'Sertifikaatit ja yksityiset avaimet on tallennettava julkisten verkkokansioiden ulkopuolelle';
$_['help_card_select']				 = 'Pyydä käyttäjää valitsemaan korttityypit, ennen kuin ne ohjataan';
$_['help_notification']				 = 'Sinun on toimitettava tämä URL-osoite ensimmäisiin tietoihin saadaksesi maksuilmoitukset';
$_['help_debug']					 = 'Virheenkorjauksen ottaminen käyttöön kirjoittaa arkaluonteisia tietoja lokitiedostoon. Sinun tulisi aina poistaa käytöstä, ellei toisin ole määrätty.';
$_['help_settle']					 = 'Jos käytät ennakkohyväksyntää, sinun on suoritettava valtuutuksen jälkeinen toiminta 3-5 päivän kuluessa. Muuten tapahtuma hylätään';

// Tab
$_['tab_account']					 = 'API-tiedot';
$_['tab_order_status']				 = 'Tilauksen tila';
$_['tab_payment']					 = 'Maksuasetukset';

// Button
$_['button_capture']				 = 'Kaapata';
$_['button_refund']					 = 'Maksun palautus';
$_['button_void']					 = 'mitätön';

// Error
$_['error_merchant_id']				 = 'Store ID on pakollinen';
$_['error_user_id']					 = 'Käyttäjätunnusta tarvitaan';
$_['error_password']				 = 'salasana tarvitaan';
$_['error_certificate']				 = 'Sertifikaatin polku on pakollinen';
$_['error_key']						 = 'Varmenneavainta tarvitaan';
$_['error_key_pw']					 = 'Varmenneavaimen salasana tarvitaan';
$_['error_ca']						 = 'Varmenteen haltija on velvollinen';