<?php
// Text
$_['text_new_card']                     = '+ Aggiungi nuova carta';
$_['text_loading']                      = 'Attendere il caricamento prego..';
$_['text_card_details']                 = 'Dettagli carta';
$_['text_saved_card']                   = 'Usa carta salvata:';
$_['text_card_ends_in']                 = 'Paga con la carta % esistente che termina con XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Numero di carta:';
$_['text_card_expiry']                  = 'Scadenza carta (MM /AA):';
$_['text_card_cvc']                     = 'Codice di sicurezza della carta (CVC):';
$_['text_card_zip']                     = 'Codice postale della carta:';
$_['text_card_save']                    = 'Salva scheda per uso futuro?';
$_['text_trial']                        = '%s ogni %s %s per i pagamenti %s allora';
$_['text_recurring']                    = '%s ogni %s %s';
$_['text_length']                       = 'per i pagamenti %s';
$_['text_cron_subject']                 = 'Riepilogo dei lavori di CRON quadrati';
$_['text_cron_message']                 = 'Ecco un elenco di tutte le attività CRON eseguite dall\'estensione Square:';
$_['text_squareup_profile_suspended']   = 'I tuoi pagamenti ricorrenti sono stati sospesi. Vi preghiamo di contattarci per maggiori dettagli.';
$_['text_squareup_trial_expired']       = 'Il tuo periodo di prova è scaduto.';
$_['text_squareup_recurring_expired']   = 'I tuoi pagamenti ricorrenti sono scaduti. Questo era il tuo ultimo pagamento.';
$_['text_cron_summary_token_heading']   = 'Aggiornamento del token di accesso:';
$_['text_cron_summary_token_updated']   = 'Access token aggiornato con successo!';
$_['text_cron_summary_error_heading']   = 'Errori di transazione:';
$_['text_cron_summary_fail_heading']    = 'Transazioni non riuscite (profili sospesi):';
$_['text_cron_summary_success_heading'] = 'Transazioni di successo:';
$_['text_cron_fail_charge']             = 'Profilo <strong> #%s </strong> non è stato possibile addebitare <strong> %s </strong>';
$_['text_cron_success_charge']          = 'Profilo <strong> #%s </strong> è stato addebitato con <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'carta di credito /debito';
$_['text_token_issue_customer_error']   = 'Stiamo riscontrando un\'interruzione tecnica nel nostro sistema di pagamento. Per favore riprova più tardi.';
$_['text_token_revoked_subject']        = 'Il tuo token di accesso Square è stato revocato!';
$_['text_token_revoked_message']        = 'L\'accesso all\'estensione del pagamento Quadrato al tuo account Square è stato revocato tramite Square Dashboard. È necessario verificare le credenziali dell\'applicazione nelle impostazioni dell\'estensione e connettersi di nuovo.';
$_['text_token_expired_subject']        = 'Il token di accesso Square è scaduto!';
$_['text_token_expired_message']        = 'Il token di accesso dell\'estensione di pagamento Square che lo collega al tuo account Square è scaduto. È necessario verificare le credenziali dell\'applicazione e il lavoro CRON nelle impostazioni dell\'estensione e connettersi di nuovo.';

// Error
$_['error_browser_not_supported']       = 'Errore: il sistema di pagamento non supporta più il tuo browser web. Si prega di aggiornare o utilizzare uno diverso.';
$_['error_card_invalid']                = 'Errore: la carta non è valida!';
$_['error_squareup_cron_token']         = 'Errore: il token di accesso non può essere aggiornato. Connetti l\'estensione del pagamento quadrato tramite il pannello di amministrazione di OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Attenzione: la modalità Sandbox è abilitata! Le transazioni sembreranno passare, ma non verranno effettuati addebiti.';

// Statuses
$_['squareup_status_comment_authorized']    = 'La transazione con la carta è stata autorizzata ma non ancora catturata.';
$_['squareup_status_comment_captured']      = 'La transazione con la carta è stata autorizzata e successivamente catturata (vale a dire completata).';
$_['squareup_status_comment_voided']        = 'La transazione con la carta è stata autorizzata e successivamente annullata (vale a dire, annullata).';
$_['squareup_status_comment_failed']        = 'La transazione con la carta è fallita.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Indirizzo di pagamento paese non è valido. Si prega di modificarlo e riprovare.';
$_['squareup_override_error_shipping_address.country']      = 'Indirizzo di spedizione paese non è valido. Si prega di modificarlo e riprovare.';
$_['squareup_override_error_email_address']                 = 'L\'indirizzo e-mail del cliente non è valido. Si prega di modificarlo e riprovare.';
$_['squareup_override_error_phone_number']                  = 'Il tuo numero di telefono del cliente non è valido. Si prega di modificarlo e riprovare.';
$_['squareup_error_field']                                  = 'Campo: %s';