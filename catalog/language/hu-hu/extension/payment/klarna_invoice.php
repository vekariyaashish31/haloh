<?php
// Text
$_['text_title']				= 'Klarna számla - Fizetés 14 napon belül';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'A Klarna számla további információra van szüksége, mielőtt meg tudná szerezni a rendelését.';
$_['text_male']					= 'Férfi';
$_['text_female']				= 'Női';
$_['text_year']					= 'Év';
$_['text_month']				= 'Hónap';
$_['text_day']					= 'Nap';
$_['text_comment']				= 'Klarna számlája azonosító: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'nem';
$_['entry_pno']					= 'Személyi szám';
$_['entry_dob']					= 'Születési dátum';
$_['entry_phone_no']			= 'Telefonszám';
$_['entry_street']				= 'utca';
$_['entry_house_no']			= 'House No.';
$_['entry_house_ext']			= 'House Ext.';
$_['entry_company']				= 'Cégjegyzékszám';

// Help
$_['help_pno']					= 'Kérjük, ide írja be a társadalombiztosítási számát.';
$_['help_phone_no']				= 'Kérlek add meg a telefonszámod.';
$_['help_street']				= 'Kérjük, vegye figyelembe, hogy a kézbesítés csak a regisztrált címre történhet, ha Klarnával fizet.';
$_['help_house_no']				= 'Kérjük, adja meg házszámát.';
$_['help_house_ext']			= 'Kérjük, küldje be ház kiterjesztését itt. Például. A, B, C, Vörös, Kék stb.';
$_['help_company']				= 'Kérjük, adja meg cégének regisztrációs számát';

// Error
$_['error_deu_terms']			= 'Meg kell felelnie a Klarna adatvédelmi politikájának (Datenschutz)';
$_['error_address_match']		= 'A számlázási és szállítási címeknek meg kell egyezniük, ha a Klarna számlát szeretné használni';
$_['error_network']				= 'Hiba történt a Klarna csatlakozásakor. Kérlek, próbáld újra később.';