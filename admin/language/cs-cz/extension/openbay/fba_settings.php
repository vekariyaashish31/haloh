<?php
// Headings
$_['heading_title']        	   = 'Nastavení';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Plnění Amazonem';

// Text
$_['text_success']     		   = 'Vaše nastavení bylo uloženo';
$_['text_status']         	   = 'Postavení';
$_['text_account_ok']  		   = 'Připojení k plnění Amazonem OK';
$_['text_api_ok']       	   = 'Připojení API OK';
$_['text_api_status']          = 'Připojení API';
$_['text_edit']           	   = 'Upravit plnění podle nastavení služby Amazon';
$_['text_standard']            = 'Standard';
$_['text_expedited']           = 'Rychlejší';
$_['text_priority']            = 'Přednost';
$_['text_fillorkill']          = 'Naplnit nebo zabít';
$_['text_fillall']             = 'Vyplňte vše';
$_['text_fillallavailable']    = 'Vyplňte vše dostupné';
$_['text_prefix_warning']      = 'Toto nastavení neměňte po odeslání objednávek do Amazonu, nastavte jej pouze při první instalaci.';
$_['text_disabled_cancel']     = 'Zakázáno - nevypínejte automaticky plnění';
$_['text_validate_success']    = 'Podrobnosti o rozhraní API pracují správně! Musíte stisknout tlačítko Save (Uložit) pro zajištění uložení nastavení.';
$_['text_register_banner']     = 'Klikněte zde, pokud potřebujete zaregistrovat účet';

// Entry
$_['entry_api_key']            = 'API tokenu';
$_['entry_encryption_key']     = 'Šifrovací klíč 1';
$_['entry_encryption_iv']      = 'Šifrovací klíč 2';
$_['entry_account_id']         = 'Číslo účtu';
$_['entry_send_orders']        = 'Odeslání objednávek automaticky';
$_['entry_fulfill_policy']     = 'Politika plnění';
$_['entry_shipping_speed']     = 'Výchozí rychlost přepravy';
$_['entry_debug_log']          = 'Povolit protokolování ladění';
$_['entry_new_order_status']   = 'Nový spouštěcí spouštěč';
$_['entry_order_id_prefix']    = 'Předpony ID objednávky';
$_['entry_only_fill_complete'] = 'Všechny položky musí být FBA';

// Help
$_['help_api_key']             = 'Toto je váš token API, získáte to z oblasti účtu OpenBay Pro';
$_['help_encryption_key']      = 'Jedná se o šifrovací klíč #1, který získáte v oblasti účtu OpenBay Pro';
$_['help_encryption_iv']       = 'Jedná se o šifrovací klíč #2, který získáte v oblasti účtu OpenBay Pro';
$_['help_account_id']          = 'Toto je ID účtu, který odpovídá registrovanému účtu Amazon pro OpenBay Pro, získáte jej z oblasti účtu OpenBay Pro';
$_['help_send_orders']  	   = 'Objednávky obsahující produkty vyhovující firmě Amazon Fulfillment budou automaticky zasílány společnosti Amazon';
$_['help_fulfill_policy']  	   = 'Výchozí podmínky pro plnění (FillAll - Všechny splněné položky v objednávce na plnění jsou dodávány.) Objednávka plnění zůstává ve stavu zpracování, dokud nebudou všechny položky odeslány společností Amazon nebo zrušeny prodejcem FillAllAvailable - Všechny splněné položky v objednávce pro plnění jsou odeslány Všechny nevyřízené položky v objednávce jsou zrušeny společností Amazon.FillOrKill - Pokud je položka v objednávce plnění určena jako nevyplněná předtím, než se jakákoliv zásilka v objednávce přesune do stavu Pending (proces vychystávání jednotek z inventáře byl zahájen), pak celá objednávka je považována za nedosažitelnou, avšak pokud je položka v objednávce na plnění považována za nedosažitelnou po odeslání zásilky v objednávce do stavu Pending, Amazon zruší co nejvíce objednávky plnění.)';
$_['help_shipping_speed']  	   = 'Toto je předvolená kategorie rychlosti přepravy, která se vztahuje na nové objednávky, různé úrovně služeb mohou mít různé náklady';
$_['help_debug_log']  		   = 'Debug protokoly zaznamenávají informace do souboru protokolu o akcích, které modul provádí. To by mělo zůstat povoleno, aby pomohla najít příčinu jakýchkoli problémů.';
$_['help_new_order_status']    = 'Jedná se o stav objednávky, který vyvolá objednávku, která má být vytvořena k naplnění. Ujistěte se, že tento stav používáte až poté, co jste obdrželi platbu.';
$_['help_order_id_prefix']     = 'S předponou objednávky pomůžete identifikovat objednávky, které pocházejí z vašeho obchodu, nikoliv z jiných integrací. To je velmi užitečné, když obchodníci prodávají na mnoha tržištích a používají FBA';
$_['help_only_fill_complete']  = 'To umožní pouze odeslání příkazů k plnění, pokud jsou všechny položky v pořadí shodné s položkou Fulfillment by Amazon. Není-li nějaká položka, zůstane celá objednávka prázdná.';

// Error
$_['error_api_connect']        = 'Nepodařilo se připojit k rozhraní API';
$_['error_account_info']       = 'Nepodařilo se ověřit připojení API k programu Fulfillment by Amazon';
$_['error_api_key']    		   = 'Token rozhraní API je neplatný';
$_['error_api_account_id']     = 'ID účtu je neplatné';
$_['error_encryption_key']     = 'Kriptovací klíč #1 je neplatný';
$_['error_encryption_iv']      = 'Kriptovací klíč #2 je neplatný';
$_['error_validation']    	   = 'Při ověřování vašich údajů došlo k chybě';

// Tabs
$_['tab_api_info']             = 'Podrobnosti o rozhraní API';

// Buttons
$_['button_verify']            = 'Ověřte podrobnosti';
