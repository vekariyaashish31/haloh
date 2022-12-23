<?php
// Heading
$_['heading_title']				= 'eWAY Maksu';

// Text
$_['text_extension']			= 'laajennukset';
$_['text_success']				= 'Menestys: Olet muokannut eWAY-tietoja !';
$_['text_edit']					= 'Muokkaa eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'valtuutus';
$_['text_sale']					= 'myynti';
$_['text_transparent']			= 'Läpinäkyvä uudelleenohjaus (maksutapa paikan päällä)';
$_['text_iframe']				= 'IFrame (maksukortti ikkunassa)';

// Entry
$_['entry_paymode']				= 'Maksutapa';
$_['entry_test']				= 'Testitila';
$_['entry_order_status']		= 'Tilauksen tila';
$_['entry_order_status_refund'] = 'Palautettu tilaustila';
$_['entry_order_status_auth']	= 'Valtuutettu tilaustila';
$_['entry_order_status_fraud']	= 'Epäillyn petoksen tilaustila';
$_['entry_status']				= 'Status';
$_['entry_username']			= 'eWAY API -avain';
$_['entry_password']			= 'eWAY-salasana';
$_['entry_payment_type']		= 'Maksutapa';
$_['entry_geo_zone']			= 'Geo Zone';
$_['entry_sort_order']			= 'Lajittelujärjestys';
$_['entry_transaction_method']	= 'Tapahtumamenetelmä';

// Error
$_['error_permission']			= 'Varoitus: Sinulla ei ole lupaa muuttaa eWAY-maksumoduulia';
$_['error_username']			= 'eWAY-API-avainta tarvitaan!';
$_['error_password']			= 'eWAY-salasanaa tarvitaan!';
$_['error_payment_type']		= 'Vähintään yksi maksutyyppi vaaditaan!';

// Help hints
$_['help_testmode']				= 'Aseta Kyllä, jos haluat käyttää eWAY-hiekkalaatikkoa.';
$_['help_username']				= 'EWAY-sovellusliittymän avain MYeWAY-tilistä.';
$_['help_password']				= 'EWAY-API-salasanasi MYeWAY-tililtäsi.';
$_['help_transaction_method']	= 'Valtuutus on käytettävissä vain Australian pankkeihin';

// Order page - payment tab
$_['text_payment_info']			= 'Maksutiedot';
$_['text_order_total']			= 'Yhteensä sallittu';
$_['text_transactions']			= 'liiketoimet';
$_['text_column_transactionid'] = 'eWAY-tapahtumien tunnus';
$_['text_column_amount']		= 'Määrä';
$_['text_column_type']			= 'Tyyppi';
$_['text_column_created']		= 'Luotu';
$_['text_total_captured']		= 'Yhteensä otettu';
$_['text_capture_status']		= 'Maksu on otettu';
$_['text_void_status']			= 'Maksu mitätöity';
$_['text_refund_status']		= 'Maksu palautetaan';
$_['text_total_refunded']		= 'Palautetaan yhteensä';
$_['text_refund_success']		= 'Hyvitys onnistui!';
$_['text_capture_success']		= 'Kaappaus onnistui!';
$_['text_refund_failed']		= 'Hyvitys epäonnistui:';
$_['text_capture_failed']		= 'Sieppaus epäonnistui:';
$_['text_unknown_failure']		= 'Virheellinen tilaus tai määrä';

$_['text_confirm_capture']		= 'Haluatko varmasti tallentaa maksun?';
$_['text_confirm_release']		= 'Haluatko varmasti vapauttaa payment?';
$_['text_confirm_refund']		= 'Haluatko varmasti palauttaa maksun?';

$_['text_empty_refund']			= 'Anna hyvitysmäärä';
$_['text_empty_capture']		= 'Syötä tallennettava määrä';

$_['btn_refund']				= 'Maksun palautus';
$_['btn_capture']				= 'Kaapata';

// Validation Error codes
$_['text_card_message_V6000']	= 'Määrittelemätön vahvistusvirhe';
$_['text_card_message_V6001'] 	= 'Virheellinen asiakkaan IP-osoite';
$_['text_card_message_V6002'] 	= 'Virheellinen DeviceID';
$_['text_card_message_V6011'] 	= 'Virheellinen määrä';
$_['text_card_message_V6012'] 	= 'Virheellinen laskutuksen kuvaus';
$_['text_card_message_V6013'] 	= 'Virheilmoitusnumero';
$_['text_card_message_V6014'] 	= 'Virheellinen laskuohje';
$_['text_card_message_V6015'] 	= 'Valuutan koodi on virheellinen';
$_['text_card_message_V6016'] 	= 'maksua vaaditaan';
$_['text_card_message_V6017'] 	= 'Maksuvaluutan koodi vaaditaan';
$_['text_card_message_V6018'] 	= 'Tuntematon maksuvaluutan koodi';
$_['text_card_message_V6021'] 	= 'Kortinhaltijan nimi vaaditaan';
$_['text_card_message_V6022'] 	= 'Vaadittu kortin numero';
$_['text_card_message_V6023'] 	= 'CVN vaaditaan';
$_['text_card_message_V6031'] 	= 'Kortin numero ei kelpaa';
$_['text_card_message_V6032'] 	= 'Virheellinen CVN';
$_['text_card_message_V6033'] 	= 'Virheellinen vanhentumispäivä';
$_['text_card_message_V6034'] 	= 'Virheellinen numero numero';
$_['text_card_message_V6035'] 	= 'Virheellinen alkamispäivä';
$_['text_card_message_V6036'] 	= 'Virheellinen kuukausi';
$_['text_card_message_V6037'] 	= 'Virheellinen vuosi';
$_['text_card_message_V6040'] 	= 'Virheellinen token asiakastunnus';
$_['text_card_message_V6041'] 	= 'Asiakas on pakollinen';
$_['text_card_message_V6042'] 	= 'Asiakkaan etunimi vaaditaan';
$_['text_card_message_V6043'] 	= 'Asiakkaan sukunimi on pakollinen';
$_['text_card_message_V6044'] 	= 'Asiakkaan maatunnus vaaditaan';
$_['text_card_message_V6045'] 	= 'Asiakkaan otsikko vaaditaan';
$_['text_card_message_V6046'] 	= 'Token asiakastunnus vaaditaan';
$_['text_card_message_V6047'] 	= 'UudelleenohjausURL vaaditaan';
$_['text_card_message_V6051'] 	= 'Virheellinen etunimi';
$_['text_card_message_V6052'] 	= 'Virheellinen sukunimi';
$_['text_card_message_V6053'] 	= 'Virheellinen maakoodi';
$_['text_card_message_V6054'] 	= 'Virheellinen sähköpostiosoite';
$_['text_card_message_V6055'] 	= 'Virheellinen puhelin';
$_['text_card_message_V6056'] 	= 'Virheellinen mobiili';
$_['text_card_message_V6057'] 	= 'Virheellinen faksi';
$_['text_card_message_V6058'] 	= 'Virheellinen otsikko';
$_['text_card_message_V6059'] 	= 'Uudelleenohjaus URL-osoite ei kelpaa';
$_['text_card_message_V6060'] 	= 'Uudelleenohjaus URL-osoite ei kelpaa';
$_['text_card_message_V6061'] 	= 'Virheellinen viite';
$_['text_card_message_V6062'] 	= 'Virheellinen yrityksen nimi';
$_['text_card_message_V6063'] 	= 'Virheellinen työnkuva';
$_['text_card_message_V6064'] 	= 'Virheellinen katu1';
$_['text_card_message_V6065'] 	= 'Virheellinen katu2';
$_['text_card_message_V6066'] 	= 'Virheellinen kaupunki';
$_['text_card_message_V6067'] 	= 'Virheellinen tila';
$_['text_card_message_V6068'] 	= 'Virheellinen postinumero';
$_['text_card_message_V6069'] 	= 'Virheellinen sähköpostiosoite';
$_['text_card_message_V6070'] 	= 'Virheellinen puhelin';
$_['text_card_message_V6071'] 	= 'Virheellinen mobiili';
$_['text_card_message_V6072'] 	= 'Virheelliset kommentit';
$_['text_card_message_V6073'] 	= 'Virheellinen faksi';
$_['text_card_message_V6074'] 	= 'Virheellinen URL';
$_['text_card_message_V6075'] 	= 'Virheellinen toimitusosoitteen etunimi';
$_['text_card_message_V6076'] 	= 'Virheellinen toimitusosoite sukunimi';
$_['text_card_message_V6077'] 	= 'Virheellinen toimitusosoite Street1';
$_['text_card_message_V6078'] 	= 'Virheellinen toimitusosoite Street2';
$_['text_card_message_V6079'] 	= 'Virheellinen toimitusosoitteen kaupunki';
$_['text_card_message_V6080'] 	= 'Virheellinen toimitusosoitteen tila';
$_['text_card_message_V6081'] 	= 'Virheellinen postitusosoite postikoodi';
$_['text_card_message_V6082'] 	= 'Virheellinen toimitusosoitteen sähköpostiosoite';
$_['text_card_message_V6083'] 	= 'Virheellinen toimitusosoitteen puhelin';
$_['text_card_message_V6084'] 	= 'Virheellinen toimitusosoitteen maa';
$_['text_card_message_V6091'] 	= 'Tuntematon maakoodi';
$_['text_card_message_V6100'] 	= 'Virheellinen kortin nimi';
$_['text_card_message_V6101'] 	= 'Virheellinen kortin vanhentumiskuukausi';
$_['text_card_message_V6102'] 	= 'Virheellinen kortin päättymisvuosi';
$_['text_card_message_V6103'] 	= 'Virheellinen kortin aloituskuukausi';
$_['text_card_message_V6104'] 	= 'Virheellinen kortin aloitusvuosi';
$_['text_card_message_V6105'] 	= 'Virheellinen kortin numero';
$_['text_card_message_V6106'] 	= 'Virheellinen kortti CVN';
$_['text_card_message_V6107'] 	= 'Virheellinen AccessCode-koodi';
$_['text_card_message_V6108'] 	= 'Virheellinen CustomerHostAddress';
$_['text_card_message_V6109'] 	= 'Virheellinen UserAgent';
$_['text_card_message_V6110'] 	= 'Kortin numero ei kelpaa';
$_['text_card_message_V6111'] 	= 'Luvaton API-käyttöoikeus, tili ei PCI-sertifioitu';
$_['text_card_message_V6112'] 	= 'Redundantin kortin tiedot muuhun kuin päättymisvuoteen ja kuukauteen verrattuna';
$_['text_card_message_V6113'] 	= 'Virheellinen maksutapahtuma';
$_['text_card_message_V6114'] 	= 'Yhdyskäytävän validointivirhe';
$_['text_card_message_V6115'] 	= 'Virheellinen DirectRefundRequest, tapahtumien tunnus';
$_['text_card_message_V6116'] 	= 'Virheellinen korttitieto alkuperäisessä Tapahtumakoodissa';
$_['text_card_message_V6124'] 	= 'Virheelliset rivikohdat. Rivikohtia on annettu, mutta summat eivät vastaa TotalAmount-kenttään';
$_['text_card_message_V6125'] 	= 'Valittu maksutyyppi ei ole käytössä';
$_['text_card_message_V6126'] 	= 'Virheellinen salattu kortin numero, salauksen purku epäonnistui';
$_['text_card_message_V6127'] 	= 'Virheellinen salattu cvn, salauksen purku epäonnistui';
$_['text_card_message_V6128'] 	= 'Virheellinen maksutavan tyyppi';
$_['text_card_message_V6129'] 	= 'Tapahtumalle ei ole myönnetty lupaa Capture /Cancel';
$_['text_card_message_V6130'] 	= 'Generic customer information error';
$_['text_card_message_V6131'] 	= 'Yleinen toimitustietovirhe';
$_['text_card_message_V6132'] 	= 'Tapahtuma on jo päättynyt tai mitätöity, käyttö ei ole sallittua';
$_['text_card_message_V6133'] 	= 'Maksutapa ei ole käytettävissä Maksutapa';
$_['text_card_message_V6134'] 	= 'Virheellinen Auth -transaktiotunnus Capture /Voidille';
$_['text_card_message_V6135'] 	= 'PayPal-virheenkorjausprosentti';
$_['text_card_message_V6140'] 	= 'Kauppiastili on keskeytetty';
$_['text_card_message_V6141'] 	= 'Virheelliset PayPal-tilin tiedot tai API-allekirjoitus';
$_['text_card_message_V6142'] 	= 'Valtuutus ei ole käytettävissä Pankille /sivuliikkeelle';
$_['text_card_message_V6150'] 	= 'Virheellinen hyvitysmäärä';
$_['text_card_message_V6151'] 	= 'Palautusmäärä ylittää alkuperäisen tapahtuman';
$_['text_card_message_D4406'] 	= 'Tuntematon virhe';
$_['text_card_message_S5010'] 	= 'Tuntematon virhe';