<?php
// Headings
$_['heading_title']        	   = 'asetukset';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Amazon täyttää';

// Text
$_['text_success']     		   = 'Asetuksesi on tallennettu';
$_['text_status']         	   = 'Status';
$_['text_account_ok']  		   = 'Yhteyden täyttäminen täyttää Amazon OK';
$_['text_api_ok']       	   = 'API-yhteys OK';
$_['text_api_status']          = 'API-yhteys';
$_['text_edit']           	   = 'Muokkaa täyttämistä Amazonin asetuksilla';
$_['text_standard']            = 'standardi';
$_['text_expedited']           = 'nopeutettu';
$_['text_priority']            = 'prioriteetti';
$_['text_fillorkill']          = 'Täytä tai tappaa';
$_['text_fillall']             = 'Täytä kaikki';
$_['text_fillallavailable']    = 'Täytä kaikki käytettävissä';
$_['text_prefix_warning']      = 'Älä muuta tätä asetusta sen jälkeen, kun tilaukset on lähetetty Amazonille, aseta tämä vain asennuksen yhteydessä.';
$_['text_disabled_cancel']     = 'Poissa käytöstä - älä peruuttaa täyttöjä automaattisesti';
$_['text_validate_success']    = 'API-tiedot toimivat oikein! Varmista, että asetukset tallennetaan painamalla Tallenna.';
$_['text_register_banner']     = 'Klikkaa tästä, jos haluat tilata tilin';

// Entry
$_['entry_api_key']            = 'API-merkki';
$_['entry_encryption_key']     = 'Salausavain 1';
$_['entry_encryption_iv']      = 'Salausavain 2';
$_['entry_account_id']         = 'Tilin tunnus';
$_['entry_send_orders']        = 'Lähetä tilaukset automaattisesti';
$_['entry_fulfill_policy']     = 'Täytäntöönpanopolitiikka';
$_['entry_shipping_speed']     = 'Oletuslähetysnopeus';
$_['entry_debug_log']          = 'Ota virheenkorjauspäivitys käyttöön';
$_['entry_new_order_status']   = 'Uusi täyttö laukaisee';
$_['entry_order_id_prefix']    = 'Tilausnumeron etuliite';
$_['entry_only_fill_complete'] = 'Kaikkien kohteiden on oltava FBA';

// Help
$_['help_api_key']             = 'Tämä on sinun API-tunnuksesi, hankkimalla tämä OpenBay Pro -tilisi alueelta';
$_['help_encryption_key']      = 'Tämä on salausavain #1, hankitse tämä OpenBay Pro -tilisi alueelta';
$_['help_encryption_iv']       = 'Tämä on salausavaimesi #2, hankkimalla tämä OpenBay Pro -tilisi alueelta';
$_['help_account_id']          = 'Tämä on tilitunnus, joka vastaa rekisteröityä Amazon-tiliä OpenBay Pro: lle, hankkimalla tämä OpenBay Pro -tilisi alueelta';
$_['help_send_orders']  	   = 'Amazon-tuotteiden vastaavuutta sisältävät tilaukset lähetetään Amazonille automaattisesti';
$_['help_fulfill_policy']  	   = 'Täytä täyttösäännöt (FillAll - Kaikki täytettävät kohteet täyttömääräyksessä lähetetään, täyttömääräys pysyy käsittelyssä, kunnes kaikki tuotteet on joko lähettänyt Amazon tai myyjä peruuttanut.) FillAllAvailable - Kaikki täytettävät kohteet täyttömääräyksessä lähetetään Kaikki Amazon.FillOrKill peruuttaa kaikki tilauksen virheettömät tuotteet. - Jos suoritustilauksen kohde määritetään täyttämättä, ennen kuin tilauksen lähetys siirretään Pending-tilaan (keräilyyksiköiden poistaminen varastosta on alkanut), niin Jos tilausjärjestyksessä lähetetty tuote määritetään täyttämättä, kun tilauksen lähetys siirretään Odottavaan tilaan, Amazon peruuttaa mahdollisen täyttömäärän mahdollisimman paljon.)';
$_['help_shipping_speed']  	   = 'Tämä on oletuslähetysnopeusluokka, jota sovelletaan uusiin tilauksiin, eri palvelutasot saattavat aiheuttaa erilaisia ​​kuluja';
$_['help_debug_log']  		   = 'Debug-lokit tallentavat tiedot lokitiedostoon toiminnoista, joita moduuli tekee. Tämän pitäisi olla sallittu, jotta löydettäisiin mahdolliset ongelmat.';
$_['help_new_order_status']    = 'Tämä on tilaustila, joka käynnistää tilauksen, joka luodaan täyttämiseksi. Varmista, että tämä käyttää tilaa vain sen jälkeen, kun olet saanut maksun.';
$_['help_order_id_prefix']     = 'Tilauksen etuliitteen avulla voit tunnistaa myymälästäsi tulevat tilaukset muista integroiduista palveluista. Tämä on erittäin hyödyllistä, kun kauppiaat myyvät monilla markkinoilla ja käyttävät FBA: ta';
$_['help_only_fill_complete']  = 'Tämä sallii vain tilausten lähettämisen täyttämiseksi, jos kaikki tilauksen kohteet vastaavat Amazon-kohteen täyttymistä. Jos jokin kohde ei ole, koko tilaus jää täyttämättä.';

// Error
$_['error_api_connect']        = 'Sovellusliittymään ei muodostunut yhteyttä';
$_['error_account_info']       = 'API-yhteyttä ei voi tarkistaa Amazonin täyttämiseen';
$_['error_api_key']    		   = 'API-tunniste on virheellinen';
$_['error_api_account_id']     = 'Tilin tunnus on virheellinen';
$_['error_encryption_key']     = 'Salausavain #1 ei kelpaa';
$_['error_encryption_iv']      = 'Salausavain #2 ei kelpaa';
$_['error_validation']    	   = 'Tietosi on vahvistettu virheellisesti';

// Tabs
$_['tab_api_info']             = 'API-tiedot';

// Buttons
$_['button_verify']            = 'Vahvista tiedot';
