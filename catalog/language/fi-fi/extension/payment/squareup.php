<?php
// Text
$_['text_new_card']                     = '+ Lisää uusi kortti';
$_['text_loading']                      = 'Ladataan, odota..';
$_['text_card_details']                 = 'Kortin tiedot';
$_['text_saved_card']                   = 'Käytä tallennettua korttia:';
$_['text_card_ends_in']                 = 'Maksa nykyisellä %-kortilla, joka päättyy XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Kortin numero:';
$_['text_card_expiry']                  = 'Kortin vanhentuminen (MM /YY):';
$_['text_card_cvc']                     = 'Kortin turvakoodi (CVC):';
$_['text_card_zip']                     = 'Postinumero:';
$_['text_card_save']                    = 'Tallenna kortti myöhempää käyttöä varten?';
$_['text_trial']                        = '%s joka %s %s ja %s maksut sitten';
$_['text_recurring']                    = '%s joka %s %s';
$_['text_length']                       = '%: n maksut';
$_['text_cron_subject']                 = 'Neliö CRON-työn tiivistelmä';
$_['text_cron_message']                 = 'Tässä on luettelo kaikista Square-laajennuksen suorittamista CRON-tehtävistä:';
$_['text_squareup_profile_suspended']   = 'Toistuvat maksut on jäädytetty. Ota yhteyttä saadaksesi lisätietoja.';
$_['text_squareup_trial_expired']       = 'Trial-aika on vanhentunut.';
$_['text_squareup_recurring_expired']   = 'Toistuvat maksusi ovat vanhentuneet. Tämä oli viimeinen maksu.';
$_['text_cron_summary_token_heading']   = 'Käyttöoikeustunnuksen päivittäminen:';
$_['text_cron_summary_token_updated']   = 'Access token päivitettiin onnistuneesti!';
$_['text_cron_summary_error_heading']   = 'Tapahtumaviat:';
$_['text_cron_summary_fail_heading']    = 'Epäonnistuneet tapahtumat (Profiilit keskeytetty):';
$_['text_cron_summary_success_heading'] = 'Menestykselliset tapahtumat:';
$_['text_cron_fail_charge']             = 'Profiili <strong> #%s </strong> ei voinut ladata <strong> %s </strong>';
$_['text_cron_success_charge']          = 'Profiili <strong> #%s </strong> ladattiin <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Luottokortti';
$_['text_token_issue_customer_error']   = 'Meillä on maksujärjestelmän tekninen katkoksia. Yritä uudelleen myöhemmin.';
$_['text_token_revoked_subject']        = 'Sinun neliön käyttöoikeuskoodisi on peruutettu!';
$_['text_token_revoked_message']        = 'Neliön maksun laajennuksen pääsy Square-tilillesi on peruutettu Neliöhallintapaneelin kautta. Sinun on tarkistettava sovellusvaltuudet laajennusasetuksissa ja yhdistettävä uudelleen.';
$_['text_token_expired_subject']        = 'Neliöyhteyden käyttöoikeus on vanhentunut!';
$_['text_token_expired_message']        = 'Neliosumaksun laajennusosoitteen, joka yhdistää sen Square-tilillesi, on vanhentunut. Sinun on tarkistettava sovellusvaltuudet ja CRON-työsi laajennuksen asetuksissa ja yhdistettävä uudelleen.';

// Error
$_['error_browser_not_supported']       = 'Virhe: Maksujärjestelmä ei enää tue Web-selaintasi. Päivitä tai käytä muuta.';
$_['error_card_invalid']                = 'Virhe: Kortti on virheellinen!';
$_['error_squareup_cron_token']         = 'Virhe: Access-tunnusta ei voitu päivittää. Liitä neliönmaksu-laajennus OpenCartin hallintapaneelin kautta.';

// Warning
$_['warning_test_mode']                 = 'Varoitus: Sandbox-tila on käytössä! Transaktiot näyttävät käyn läpi, mutta mitään maksuja ei suoriteta.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Korttitoimi on hyväksytty, mutta sitä ei ole vielä otettu.';
$_['squareup_status_comment_captured']      = 'Korttimuotoinen tapahtuma hyväksyttiin ja saatiin myöhemmin (eli täytetty).';
$_['squareup_status_comment_voided']        = 'Korttitoimi hyväksyttiin ja sen jälkeen peruutettiin (eli peruutettiin).';
$_['squareup_status_comment_failed']        = 'Korttitoimi epäonnistui.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Maksun osoitemaa ei ole kelvollinen. Muokkaa sitä ja yritä uudelleen.';
$_['squareup_override_error_shipping_address.country']      = 'Lähetysosoite-maa ei ole kelvollinen. Muokkaa sitä ja yritä uudelleen.';
$_['squareup_override_error_email_address']                 = 'Asiakkaan sähköpostiosoite ei ole kelvollinen. Muokkaa sitä ja yritä uudelleen.';
$_['squareup_override_error_phone_number']                  = 'Asiakasnumerosi ei ole kelvollinen. Muokkaa sitä ja yritä uudelleen.';
$_['squareup_error_field']                                  = 'Kenttä: %s';