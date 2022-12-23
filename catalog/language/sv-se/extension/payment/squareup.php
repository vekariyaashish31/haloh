<?php
// Text
$_['text_new_card']                     = '+ Lägg till nytt kort';
$_['text_loading']                      = 'Laddar .. Vänta ..';
$_['text_card_details']                 = 'Kortdetaljer';
$_['text_saved_card']                   = 'Använd sparade kort:';
$_['text_card_ends_in']                 = 'Betala med existerande %-kort som slutar på XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Kortnummer:';
$_['text_card_expiry']                  = 'Kortets utgång (MM /ÅÅ):';
$_['text_card_cvc']                     = 'Kort säkerhetskod (CVC):';
$_['text_card_zip']                     = 'Kort Postnummer:';
$_['text_card_save']                    = 'Spara kort för framtida användning?';
$_['text_trial']                        = '%s varje %s %s för %s betalningar då';
$_['text_recurring']                    = '%s varje %s %s';
$_['text_length']                       = 'för % betalningar';
$_['text_cron_subject']                 = 'Square CRON jobb sammanfattning';
$_['text_cron_message']                 = 'Här är en lista över alla CRON-uppgifter som utförs av din Square-förlängning:';
$_['text_squareup_profile_suspended']   = 'Dina återkommande betalningar har avbrutits. Vänligen kontakta oss för mer information.';
$_['text_squareup_trial_expired']       = 'Din testperiod har upphört.';
$_['text_squareup_recurring_expired']   = 'Dina återkommande betalningar har löpt ut. Detta var din senaste betalning.';
$_['text_cron_summary_token_heading']   = 'Uppdatering av åtkomsttoken:';
$_['text_cron_summary_token_updated']   = 'Access token uppdaterad successfully!';
$_['text_cron_summary_error_heading']   = 'Transaktionsfel:';
$_['text_cron_summary_fail_heading']    = 'Felaktiga transaktioner (profiler upphängd):';
$_['text_cron_summary_success_heading'] = 'Framgångsrika transaktioner:';
$_['text_cron_fail_charge']             = 'Profil <strong> #%s </strong> kunde inte laddas med <strong> %s </strong>';
$_['text_cron_success_charge']          = 'Profil <strong> #%s </strong> debiterades med <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Kredit /Betalkort';
$_['text_token_issue_customer_error']   = 'Vi har ett tekniskt problem i vårt betalningssystem. Vänligen försök igen senare.';
$_['text_token_revoked_subject']        = 'Din kvadratisk åtkomsttoken har återkallats!';
$_['text_token_revoked_message']        = 'Kvittensbetalningsutvidgets tillgång till ditt kvadrera konto har återkallats via Square Dashboard. Du måste verifiera ansökningsuppgifterna i tilläggsinställningarna och ansluta igen.';
$_['text_token_expired_subject']        = 'Din fyrkantiga åtkomsttoken har löpt ut!';
$_['text_token_expired_message']        = 'Kvittningsbetalningsutvidgets åtkomsttoken som ansluter det till ditt kvadratkonto har löpt ut. Du måste verifiera dina ansökningsuppgifter och CRON-jobb i tilläggsinställningarna och ansluta igen.';

// Error
$_['error_browser_not_supported']       = 'Fel: Betalningssystemet stöder inte längre din webbläsare. Vänligen uppdatera eller använd en annan.';
$_['error_card_invalid']                = 'Fel: Kortet är ogiltigt!';
$_['error_squareup_cron_token']         = 'Fel: Access token kunde inte uppdateras. Vänligen koppla in din fyrkantiga betalningsförlängning via OpenCart-administratörspanelen.';

// Warning
$_['warning_test_mode']                 = 'Varning: Sandboxläge är aktiverat! Transaktioner verkar gå igenom, men inga avgifter kommer att utföras.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Korttransaktionen har godkänts men ännu inte tagits.';
$_['squareup_status_comment_captured']      = 'Korttransaktionen godkändes och följdes därefter (dvs färdigställd).';
$_['squareup_status_comment_voided']        = 'Korttransaktionen godkändes och följde därefter bort (dvs avbruten).';
$_['squareup_status_comment_failed']        = 'Korttransaktionen misslyckades.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Betalningsadressland är inte giltigt. Ändra det och försök igen.';
$_['squareup_override_error_shipping_address.country']      = 'Fraktadresslandet är inte giltigt. Ändra det och försök igen.';
$_['squareup_override_error_email_address']                 = 'Din kunds e-postadress är inte giltig. Ändra det och försök igen.';
$_['squareup_override_error_phone_number']                  = 'Ditt kundnummer är inte giltigt. Ändra det och försök igen.';
$_['squareup_error_field']                                  = 'Fält: %s';