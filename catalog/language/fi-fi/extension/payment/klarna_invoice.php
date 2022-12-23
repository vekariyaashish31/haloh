<?php
// Text
$_['text_title']				= 'Klarna-lasku - maksaa 14 päivän sisällä';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna-lasku vaatii joitain lisätietoja, ennen kuin he voivat suorittaa tilauksesi.';
$_['text_male']					= 'Uros';
$_['text_female']				= 'Nainen';
$_['text_year']					= 'vuosi';
$_['text_month']				= 'Kuukausi';
$_['text_day']					= 'Päivä';
$_['text_comment']				= 'Klarnan laskutunnus: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'sukupuoli';
$_['entry_pno']					= 'Henkilökohtainen numero';
$_['entry_dob']					= 'Syntymäaika';
$_['entry_phone_no']			= 'Puhelinnumero';
$_['entry_street']				= 'katu';
$_['entry_house_no']			= 'Talo nro';
$_['entry_house_ext']			= 'House Ext.';
$_['entry_company']				= 'Y-tunnus';

// Help
$_['help_pno']					= 'Anna tähän sosiaaliturvatunnus.';
$_['help_phone_no']				= 'Ole hyvä ja anna puhelinnumerosi.';
$_['help_street']				= 'Huomaa, että toimitus voi tapahtua vain rekisteröidylle osoitteelle maksaessasi Klarnaa.';
$_['help_house_no']				= 'Anna talon numero.';
$_['help_house_ext']			= 'Lähetä talon laajennus täältä. Esim. A, B, C, Punainen, Sininen ect.';
$_['help_company']				= 'Anna yrityksen rekisteröintinumero';

// Error
$_['error_deu_terms']			= 'Sinun on hyväksyttävä Klarna-tietosuojakäytäntö (Datenschutz)';
$_['error_address_match']		= 'Laskutus- ja toimitusosoitteet on sovitettava, jos haluat käyttää Klarna-laskua';
$_['error_network']				= 'Klarna-yhteyden aikana tapahtui virhe. Yritä uudelleen myöhemmin.';