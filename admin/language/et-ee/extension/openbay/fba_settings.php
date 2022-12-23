<?php
// Headings
$_['heading_title']        	   = 'Seaded';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Amazon täitmine';

// Text
$_['text_success']     		   = 'Teie seaded on salvestatud';
$_['text_status']         	   = 'Olek';
$_['text_account_ok']  		   = 'Amazoni poolt täidetav ühendus OK';
$_['text_api_ok']       	   = 'API-ühendus OK';
$_['text_api_status']          = 'API-ühendus';
$_['text_edit']           	   = 'Muuda täitmist Amazoni seadetes';
$_['text_standard']            = 'Standard';
$_['text_expedited']           = 'Kiirendatud';
$_['text_priority']            = 'Prioriteet';
$_['text_fillorkill']          = 'Täida või tapa';
$_['text_fillall']             = 'Täitke kõik';
$_['text_fillallavailable']    = 'Täitke kõik saadaval';
$_['text_prefix_warning']      = 'Ärge muutke seda seadet pärast tellimuste saatmist Amazonile, seadke see ainult esmakordsel installimisel.';
$_['text_disabled_cancel']     = 'Keelatud - ärge täitke automaatselt';
$_['text_validate_success']    = 'Teie API-andmed töötavad õigesti!. Seadete salvestamiseks peate vajutama salvestamist.';
$_['text_register_banner']     = 'Klõpsake siin, kui peate kontole registreeruma';

// Entry
$_['entry_api_key']            = 'API-tunnus';
$_['entry_encryption_key']     = 'Krüptimisvõti 1';
$_['entry_encryption_iv']      = 'Krüptimisvõti 2';
$_['entry_account_id']         = 'Konto ID';
$_['entry_send_orders']        = 'Saada tellimusi automaatselt';
$_['entry_fulfill_policy']     = 'Täitmispoliitika';
$_['entry_shipping_speed']     = 'Laadimise vaikimisi kiirus';
$_['entry_debug_log']          = 'Keela logimise lubamine';
$_['entry_new_order_status']   = 'Uus täitmise käivitus';
$_['entry_order_id_prefix']    = 'Telli ID prefiks';
$_['entry_only_fill_complete'] = 'Kõik esemed peavad olema FBA';

// Help
$_['help_api_key']             = 'See on teie API-märgis, saate see oma OpenBay Pro konto piirkonnast';
$_['help_encryption_key']      = 'See on teie krüpteerimisvõti #1, saate see oma OpenBay Pro konto alalt';
$_['help_encryption_iv']       = 'See on teie krüpteerimisvõti #2, hankige see OpenBay Pro konto piirkonnast';
$_['help_account_id']          = 'See on konto ID, mis sobib avatud Amazon konto OpenBay Pro, saada see oma OpenBay Pro konto ala';
$_['help_send_orders']  	   = 'Amazoni toodete vastav täitmisega tellimused saadetakse Amazonile automaatselt';
$_['help_fulfill_policy']  	   = 'Vaikimisi täitmise poliitika (FillAll - kõik täidetavad elemendid täitmise järjekorras saadetakse. Täitmisjärjekord jääb töötlemise olekusse, kuni kõik kaubad tarnitakse kas Amazon või tühistatakse müüja poolt. FillAllAvailable - kõik täidetavad kirjed täitmiskorrikus saadetakse Amazon.FillOrKill tühistab kõik tellimuse täitmata jäetud esemed - kui täitmiskorralduses olev toode on täitmata enne, kui ükskõik milline saadetis järjekorras liigub ootel olekusse (lahtris olevate üksuste kogumise protsess on alanud), siis siis loetakse kogu tellimust täitmata. Kui aga täitmise järjekorras olev toode osutub võimatuks pärast tellimuse saatmist ootel olekusse, tühistab Amazon nii palju täitmismäärust kui võimalik.)';
$_['help_shipping_speed']  	   = 'See on uute tellimuste suhtes kohaldatav laevanduskiiruse kategooria, mis erineval tasemel võib põhjustada erinevaid kulusid';
$_['help_debug_log']  		   = 'Määramislogid salvestavad andmed toimingu mooduli logifaili kohta. Seda tuleks jätta lubatud, et aidata leida probleemide põhjuseid.';
$_['help_new_order_status']    = 'See on tellimuse olek, mis käivitab täitmise jaoks loodud korralduse. Veenduge, et see kasutab staatust alles pärast makse saamist.';
$_['help_order_id_prefix']     = 'Tellimuse eesliide aitab tuvastada teie poest tulevad tellimusi mitte teistest integratsioonidest. See on väga kasulik, kui kaupmehed müüvad paljudel turgudel ja kasutavad FBA-d';
$_['help_only_fill_complete']  = 'See lubab tellimuste täitmiseks saata ainult siis, kui tellimuse kõik üksused on sobitatud Amazoni kirje täitmisega. Kui mõni toode pole, jääb kogu tellimus täidetuks.';

// Error
$_['error_api_connect']        = 'API-ga ühenduse loomine ebaõnnestus';
$_['error_account_info']       = 'Amazoni poolt täidetavat API-ühendust ei saa kinnitada';
$_['error_api_key']    		   = 'API-tunnus on kehtetu';
$_['error_api_account_id']     = 'Konto ID on kehtetu';
$_['error_encryption_key']     = 'Krüpteerimisvõti #1 on kehtetu';
$_['error_encryption_iv']      = 'Krüpteerimisvõti #2 on kehtetu';
$_['error_validation']    	   = 'Teie andmete õigsuse kontrollimisel ilmnes viga';

// Tabs
$_['tab_api_info']             = 'API üksikasjad';

// Buttons
$_['button_verify']            = 'Kinnitage üksikasjad';
