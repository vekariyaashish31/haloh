<?php
// Text
$_['text_new_card']                     = '+ Dodaj nową kartę';
$_['text_loading']                      = 'Ładowanie proszę czekać..';
$_['text_card_details']                 = 'Szczegóły karty';
$_['text_saved_card']                   = 'Użyj zapisanej karty:';
$_['text_card_ends_in']                 = 'Zapłać kartą %s, która kończy się XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Numer karty:';
$_['text_card_expiry']                  = 'Ważność karty (MM /RR):';
$_['text_card_cvc']                     = 'Kod bezpieczeństwa karty (CVC):';
$_['text_card_zip']                     = 'Kod pocztowy karty:';
$_['text_card_save']                    = 'Zapisz kartę do przyszłego wykorzystania?';
$_['text_trial']                        = '%s co %s %s dla %s wtedy';
$_['text_recurring']                    = '%s co %s %s';
$_['text_length']                       = 'dla %s płatności';
$_['text_cron_subject']                 = 'Podsumowanie zadania Square CRON';
$_['text_cron_message']                 = 'Oto lista wszystkich zadań CRON wykonywanych przez rozszerzenie Square:';
$_['text_squareup_profile_suspended']   = 'Płatności cykliczne zostały zawieszone. Skontaktuj się z nami, aby uzyskać więcej informacji.';
$_['text_squareup_trial_expired']       = 'Twój okres próbny dobiegł końca.';
$_['text_squareup_recurring_expired']   = 'Twoje płatności cykliczne wygasły. To była twoja ostatnia płatność.';
$_['text_cron_summary_token_heading']   = 'Odświeżanie tokena dostępu:';
$_['text_cron_summary_token_updated']   = 'Zaktualizowano token dostępu!';
$_['text_cron_summary_error_heading']   = 'Błędy transakcji:';
$_['text_cron_summary_fail_heading']    = 'Nieudane transakcje (profile zawieszone):';
$_['text_cron_summary_success_heading'] = 'Pomyślne transakcje:';
$_['text_cron_fail_charge']             = 'Profil <strong> #%s </strong> nie może zostać obciążony <strong> %s </strong>';
$_['text_cron_success_charge']          = 'Profil <strong> #%s </strong> został obciążony <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Karta kredytowa /debetowa';
$_['text_token_issue_customer_error']   = 'W naszym systemie płatności wystąpił błąd techniczny. Spróbuj ponownie później.';
$_['text_token_revoked_subject']        = 'Twój token dostępu do kwadratu został odwołany!';
$_['text_token_revoked_message']        = 'Dostęp do Kwadratowego rozszerzenia płatności do Twojego konta Square został odwołany przez Square Dashboard. Musisz zweryfikować swoje poświadczenia aplikacji w ustawieniach rozszerzenia i połączyć się ponownie.';
$_['text_token_expired_subject']        = 'Twój token dostępu do kwadratu wygasł!';
$_['text_token_expired_message']        = 'Znacznik dostępu do Square Payments, który łączy go z kontem Square, wygasł. Musisz zweryfikować poświadczenia aplikacji i zadanie CRON w ustawieniach rozszerzenia i połączyć się ponownie.';

// Error
$_['error_browser_not_supported']       = 'Błąd: system płatności nie obsługuje już Twojej przeglądarki internetowej. Zaktualizuj lub użyj innego.';
$_['error_card_invalid']                = 'Błąd: karta jest nieprawidłowa!';
$_['error_squareup_cron_token']         = 'Błąd: nie można odświeżać tokenu dostępu. Połącz swoje rozszerzenie Kwartalne płatności za pomocą panelu administracyjnego OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Ostrzeżenie: tryb piaskownicy jest włączony! Transakcje będą wyświetlane, ale nie zostaną naliczone żadne opłaty.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Transakcja kartą została autoryzowana, ale jeszcze nie została przechwycona.';
$_['squareup_status_comment_captured']      = 'Transakcja kartą została autoryzowana, a następnie przechwycona (tj. Ukończona).';
$_['squareup_status_comment_voided']        = 'Transakcja kartą została autoryzowana, a następnie unieważniona (tj. Anulowana).';
$_['squareup_status_comment_failed']        = 'Transakcja kartą nie powiodła się.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Kraj adresu płatności jest nieprawidłowy. Zmodyfikuj go i spróbuj ponownie.';
$_['squareup_override_error_shipping_address.country']      = 'Kraj adresu wysyłki jest nieprawidłowy. Zmodyfikuj go i spróbuj ponownie.';
$_['squareup_override_error_email_address']                 = 'Twój adres e-mail klienta jest nieprawidłowy. Zmodyfikuj go i spróbuj ponownie.';
$_['squareup_override_error_phone_number']                  = 'Twój numer telefonu klienta jest nieprawidłowy. Zmodyfikuj go i spróbuj ponownie.';
$_['squareup_error_field']                                  = 'Pole: %s';