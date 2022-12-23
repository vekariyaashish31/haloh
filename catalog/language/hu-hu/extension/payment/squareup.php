<?php
// Text
$_['text_new_card']                     = '+ Új kártya felvétele';
$_['text_loading']                      = 'Betöltés; kérem várjon..';
$_['text_card_details']                 = 'Kártya részletei';
$_['text_saved_card']                   = 'Mentett kártya használata:';
$_['text_card_ends_in']                 = 'Fizetés meglévő %-as kártyával, amely XXXX XXXX XXXX %-ra ér véget';
$_['text_card_number']                  = 'Kártyaszám:';
$_['text_card_expiry']                  = 'Kártya lejárata (MM /YY):';
$_['text_card_cvc']                     = 'Kártya biztonsági kódja (CVC):';
$_['text_card_zip']                     = 'Kártya Irányítószám:';
$_['text_card_save']                    = 'Kártya mentése a későbbi felhasználáshoz?';
$_['text_trial']                        = '%-as %-as %-as szám %-as fizetés esetén';
$_['text_recurring']                    = '% minden %-as %-as számon';
$_['text_length']                       = 'a %-as kifizetéseknél';
$_['text_cron_subject']                 = 'A négyzetes CRON feladat összefoglalása';
$_['text_cron_message']                 = 'Itt található a négyzetes kiterjesztés által végrehajtott összes CRON-feladat listája:';
$_['text_squareup_profile_suspended']   = 'Az ismétlődő kifizetéseket felfüggesztettük. Kérjük, lépjen velünk kapcsolatba további részletekért.';
$_['text_squareup_trial_expired']       = 'A próbaidőszak lejárt.';
$_['text_squareup_recurring_expired']   = 'Az ismétlődő kifizetések lejárt. Ez volt az utolsó fizetésed.';
$_['text_cron_summary_token_heading']   = 'A hozzáférési token frissítése:';
$_['text_cron_summary_token_updated']   = 'Az Access token sikeresen frissült!';
$_['text_cron_summary_error_heading']   = 'Tranzakciós hibák:';
$_['text_cron_summary_fail_heading']    = 'Sikertelen tranzakciók (profilok felfüggesztve):';
$_['text_cron_summary_success_heading'] = 'Sikeres tranzakciók:';
$_['text_cron_fail_charge']             = 'Profil <strong> #%s </strong> nem tud feltölteni <strong> %s </strong>';
$_['text_cron_success_charge']          = 'Profil <strong> #%s </strong> töltetet <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Hitel /bankkártya';
$_['text_token_issue_customer_error']   = 'Fizetési rendszerünkben technikai kiáramlás tapasztalható. Kérlek, próbáld újra később.';
$_['text_token_revoked_subject']        = 'Térbeli hozzáférési tokenjét visszavonták!';
$_['text_token_revoked_message']        = 'A négyzetes fizetésbővítmény hozzáférését a négyzet számlájához a négyzet irányítópulton keresztül visszavonták. A kiterjesztés beállításaiban vissza kell igazolnia az alkalmazás hitelesítő adatait, és újra csatlakoznia kell.';
$_['text_token_expired_subject']        = 'Térbeli hozzáférési tokenje lejárt!';
$_['text_token_expired_message']        = 'Lejárt a négyzetes fizetésbővítmény hozzáférési tokenje, amely összekapcsolja azt a négyzet számlájával. A kiterjesztés beállításaiban ellenőriznie kell az alkalmazás hitelesítő adatait és a CRON munkát, majd újra csatlakoznia kell.';

// Error
$_['error_browser_not_supported']       = 'Hiba: A fizetési rendszer már nem támogatja a webböngészőt. Kérjük, frissítse vagy használjon másikat.';
$_['error_card_invalid']                = 'Hiba: A kártya érvénytelen!';
$_['error_squareup_cron_token']         = 'Hiba: Az Access token nem tud frissíteni. Csatlakoztassa a négyzetes fizetés bővítményét az OpenCart admin panelen keresztül.';

// Warning
$_['warning_test_mode']                 = 'Figyelmeztetés: A homokozó mód engedélyezve! A tranzakciók jelennek meg, de nem történik meg a díj.';

// Statuses
$_['squareup_status_comment_authorized']    = 'A kártyaügyletet engedélyezték, de még nem rögzítették.';
$_['squareup_status_comment_captured']      = 'A kártyaügyletet engedélyezték és később elfogták (azaz kitöltötték).';
$_['squareup_status_comment_voided']        = 'A kártyaügylet engedélyezett és később érvénytelen (azaz törölt).';
$_['squareup_status_comment_failed']        = 'A kártya tranzakció sikertelen.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'A fizetési cím országa nem érvényes. Kérjük, módosítsa és próbálja újra.';
$_['squareup_override_error_shipping_address.country']      = 'A szállítási cím országa nem érvényes. Kérjük, módosítsa és próbálja újra.';
$_['squareup_override_error_email_address']                 = 'Az ügyfél e-mail címe nem érvényes. Kérjük, módosítsa és próbálja újra.';
$_['squareup_override_error_phone_number']                  = 'Az ügyfél telefonszáma nem érvényes. Kérjük, módosítsa és próbálja újra.';
$_['squareup_error_field']                                  = 'Mező: %s';