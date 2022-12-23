<?php
// Text
$_['text_new_card']                     = '+ Lisage uus kaart';
$_['text_loading']                      = 'Laadimine .. palun oodake ..';
$_['text_card_details']                 = 'Kaardi andmed';
$_['text_saved_card']                   = 'Kasuta salvestatud kaarti:';
$_['text_card_ends_in']                 = 'Maksa olemasoleva %-kaardiga, mis lõpeb numbril XXXX XXXX XXXX %';
$_['text_card_number']                  = 'Kaardi number:';
$_['text_card_expiry']                  = 'Kaardi aegumine (MM /YY):';
$_['text_card_cvc']                     = 'Kaardi turvakood (CVC):';
$_['text_card_zip']                     = 'Kaardi postiindeks:';
$_['text_card_save']                    = 'Salvesta kaart kasutamiseks tulevikus?';
$_['text_trial']                        = '%-ni iga %-e %-ga %-ks makse eest';
$_['text_recurring']                    = '% s iga % s % s';
$_['text_length']                       = '%-makse eest';
$_['text_cron_subject']                 = 'Square CRON tööülesannete kokkuvõte';
$_['text_cron_message']                 = 'Siin on nimekiri CRON-i ülesannetest, mida teie Square\'i laiendus täidab:';
$_['text_squareup_profile_suspended']   = 'Teie korduvad maksed on peatatud. Lisateabe saamiseks võtke meiega ühendust.';
$_['text_squareup_trial_expired']       = 'Teie prooviperiood on aegunud.';
$_['text_squareup_recurring_expired']   = 'Teie korduvad maksed on aegunud. See oli teie viimane makse.';
$_['text_cron_summary_token_heading']   = 'Juurdepääsukoodi värskendamine:';
$_['text_cron_summary_token_updated']   = 'Juurdepääsu kutset uuendatud edukalt!';
$_['text_cron_summary_error_heading']   = 'Tehingute vead:';
$_['text_cron_summary_fail_heading']    = 'Ebaõnnestunud tehingud (profiilid on peatatud):';
$_['text_cron_summary_success_heading'] = 'Edukad tehingud:';
$_['text_cron_fail_charge']             = 'Profiil <strong> #%s </strong> ei saanud süüdistada <strong> %s </strong>';
$_['text_cron_success_charge']          = 'Profiil <strong> #%s </strong> süüdistati <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Krediit- /deebetkaart';
$_['text_token_issue_customer_error']   = 'Meil on meie maksesüsteemis tehniline katkestus. Palun proovi hiljem uuesti.';
$_['text_token_revoked_subject']        = 'Teie Square\'i juurdepääsukood on tühistatud!';
$_['text_token_revoked_message']        = 'Square\'i makse pikenduse juurdepääs teie Square\'i kontole on tühistatud ruudukujulise juhtpaneeli kaudu. Peate oma laienduse seadetes oma rakenduse mandaate kinnitama ja uuesti ühendama.';
$_['text_token_expired_subject']        = 'Teie Square\'i juurdepääsukood on aegunud!';
$_['text_token_expired_message']        = 'Square\'i makse pikenduse juurdepääsukoodiga, mis ühendab selle oma Square\'i kontoga, on aegunud. Peate oma laienduse seadetes oma rakenduse andmed ja CRON-i töö kinnitama ja uuesti ühendama.';

// Error
$_['error_browser_not_supported']       = 'Viga: maksesüsteem ei toeta enam teie veebibrauserit. Palun uuendage või kasutage teist.';
$_['error_card_invalid']                = 'Viga: kaart on kehtetu!';
$_['error_squareup_cron_token']         = 'Viga: juurdepääsupunkti ei saanud värskendada. Palun ühendage Square Payment laiendus OpenCart\'i administraatori paneeliga.';

// Warning
$_['warning_test_mode']                 = 'Hoiatus: liivakasti režiim on lubatud! Näib, et tehingud läbivad, kuid tasusid ei tehta.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Kaardi tehing on lubatud, kuid ei ole veel kinni püütud.';
$_['squareup_status_comment_captured']      = 'Kaardi tehing oli lubatud ja hiljem kinni püütud (st valmis).';
$_['squareup_status_comment_voided']        = 'Kaardi tehing on lubatud ja see on hiljem tühistatud (s.t tühistatud).';
$_['squareup_status_comment_failed']        = 'Kaardi tehing ebaõnnestus.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Makseaadressi riik ei kehti. Palun muutke seda ja proovige uuesti.';
$_['squareup_override_error_shipping_address.country']      = 'Saatmise aadressi riik ei kehti. Palun muutke seda ja proovige uuesti.';
$_['squareup_override_error_email_address']                 = 'Teie kliendi e-posti aadress ei kehti. Palun muutke seda ja proovige uuesti.';
$_['squareup_override_error_phone_number']                  = 'Teie kliendi telefoninumber ei ole kehtiv. Palun muutke seda ja proovige uuesti.';
$_['squareup_error_field']                                  = 'Valdkond: %';