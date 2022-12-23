<?php
// Headings
$_['heading_title']        	   = 'inställningar';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Uppfyllelse av Amazon';

// Text
$_['text_success']     		   = 'Dina inställningar har sparats';
$_['text_status']         	   = 'Status';
$_['text_account_ok']  		   = 'Anslutning till uppföljning av Amazon OK';
$_['text_api_ok']       	   = 'API-anslutning OK';
$_['text_api_status']          = 'API-anslutning';
$_['text_edit']           	   = 'Redigera Uppfyllning genom Amazon inställningar';
$_['text_standard']            = 'Standard';
$_['text_expedited']           = 'Förenklat';
$_['text_priority']            = 'Prioritet';
$_['text_fillorkill']          = 'Fyll eller döda';
$_['text_fillall']             = 'Fyll alla';
$_['text_fillallavailable']    = 'Fyll alla tillgängliga';
$_['text_prefix_warning']      = 'Ändra inte denna inställning när beställningar har skickats till Amazon, ställ bara in det här när du installerar först.';
$_['text_disabled_cancel']     = 'Inaktiverad - avbryta inte automatiskt uppfyllelser';
$_['text_validate_success']    = 'Din API-information fungerar korrekt! Du måste trycka på spara så att inställningarna sparas.';
$_['text_register_banner']     = 'Klicka här om du behöver registrera dig för ett konto';

// Entry
$_['entry_api_key']            = 'API-token';
$_['entry_encryption_key']     = 'Krypteringsnyckel 1';
$_['entry_encryption_iv']      = 'Krypteringsnyckel 2';
$_['entry_account_id']         = 'konto-id';
$_['entry_send_orders']        = 'Skicka beställningar automatiskt';
$_['entry_fulfill_policy']     = 'Uppfyllande politik';
$_['entry_shipping_speed']     = 'Standard fraktfart';
$_['entry_debug_log']          = 'Aktivera felsökningsloggning';
$_['entry_new_order_status']   = 'Ny uppfyllningsutlösare';
$_['entry_order_id_prefix']    = 'Order ID Prefix';
$_['entry_only_fill_complete'] = 'Alla objekt måste vara FBA';

// Help
$_['help_api_key']             = 'Detta är din API-token, hämta detta från ditt OpenBay Pro-kontoområde';
$_['help_encryption_key']      = 'Detta är din krypteringsnyckel #1, skaffa det här från ditt OpenBay Pro-kontoområde';
$_['help_encryption_iv']       = 'Detta är din krypteringsnyckel #2, skaffa det här från ditt OpenBay Pro-kontoområde';
$_['help_account_id']          = 'Detta är konto-ID som matchar det registrerade Amazon-kontot för OpenBay Pro, få det här från ditt OpenBay Pro-kontoområde';
$_['help_send_orders']  	   = 'Beställningar som innehåller matchande Uppfyllning av Amazon-produkter skickas automatiskt till Amazon';
$_['help_fulfill_policy']  	   = 'Fullständig uppfyllelsespolicy (FillAll - Alla uppfyllbara föremål i fullföljande order skickas.) Uppfyllningsordern förblir i ett bearbetningstillstånd tills alla artiklar skickas antingen av Amazon eller avbeställas av säljaren. FillAllAvailable - Alla uppfyllbara föremål i leveransbeställningen skickas . Alla ouppfyllningsbara föremål i ordern avbryts av Amazon.FillOrKill - Om ett föremål i en beställningsuppgift är beslutat att vara ofyllbart innan någon försändelse i ordern flyttas till väntande status (processen med att välja enheter från lager har börjat), då hela beställningen anses vara oförfyllbar. Om en vara i en uppställningsorder är bestämd att vara ouppfyllbar efter en försändelse i ordern flyttas till väntande status, avbryter Amazon så mycket av uppställningsordern som möjligt.)';
$_['help_shipping_speed']  	   = 'Det här är standardleveranshastighetskategorin som gäller för nya beställningar, olika servicenivåer kan medföra olika kostnader';
$_['help_debug_log']  		   = 'Felsökningsloggen loggar in information till en loggfil om åtgärder som modulen gör. Detta bör lämnas aktiverat för att hjälpa till att hitta orsaken till eventuella problem.';
$_['help_new_order_status']    = 'Detta är orderstatusen som utlöser den ordning som ska skapas för uppfyllelse. Se till att detta endast använder status efter att du har fått betalning.';
$_['help_order_id_prefix']     = 'Att ha ett orderprefix hjälper till att identifiera beställningar som kommer från din butik, inte från andra integreringar. Detta är mycket användbart när handlare säljer på många marknadsplatser och använder FBA';
$_['help_only_fill_complete']  = 'Detta tillåter bara att beställningar skickas för uppfyllelse om alla objekt i ordningen matchas med en Uppfyllning av Amazon-objekt. Om något objekt inte är så kommer hela ordern att vara ofylld.';

// Error
$_['error_api_connect']        = 'Misslyckades att ansluta till API: n';
$_['error_account_info']       = 'Det gick inte att verifiera API-anslutningen till Uppfyllelse av Amazon';
$_['error_api_key']    		   = 'API-token är ogiltig';
$_['error_api_account_id']     = 'Konto-idet är ogiltigt';
$_['error_encryption_key']     = 'Krypteringsnyckeln #1 är ogiltig';
$_['error_encryption_iv']      = 'Krypteringsnyckeln #2 är ogiltig';
$_['error_validation']    	   = 'Det uppstod ett fel vid valideringen av dina uppgifter';

// Tabs
$_['tab_api_info']             = 'API detaljer';

// Buttons
$_['button_verify']            = 'Verifiera detaljer';
