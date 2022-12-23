<?php
// Text
$_['text_new_card']                     = '+ Ajouter une nouvelle carte';
$_['text_loading']                      = 'Chargement, veuillez patienter..';
$_['text_card_details']                 = 'Détails de la carte';
$_['text_saved_card']                   = 'Utiliser la carte enregistrée:';
$_['text_card_ends_in']                 = 'Payer avec la carte existante % qui se termine le XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Numéro de carte:';
$_['text_card_expiry']                  = 'Expiration de la carte (MM /AA):';
$_['text_card_cvc']                     = 'Code de sécurité de la carte (CVC):';
$_['text_card_zip']                     = 'Code postal de la carte:';
$_['text_card_save']                    = 'Enregistrer la carte pour une utilisation future?';
$_['text_trial']                        = '%s tous les %s %s pour les paiements %s puis';
$_['text_recurring']                    = '%s tous les %s %s';
$_['text_length']                       = 'pour les paiements %';
$_['text_cron_subject']                 = 'Carré CRON résumé du poste';
$_['text_cron_message']                 = 'Voici une liste de toutes les tâches CRON effectuées par votre extension Square:';
$_['text_squareup_profile_suspended']   = 'Vos paiements récurrents ont été suspendus. S\'il vous plaît nous contacter pour plus de détails.';
$_['text_squareup_trial_expired']       = 'Votre période d\'essai a expiré.';
$_['text_squareup_recurring_expired']   = 'Vos paiements récurrents ont expiré. C\'était votre dernier paiement.';
$_['text_cron_summary_token_heading']   = 'Rafraîchissement du jeton d\'accès:';
$_['text_cron_summary_token_updated']   = 'Jeton d\'accès mis à jour avec succès!';
$_['text_cron_summary_error_heading']   = 'Erreurs de transaction:';
$_['text_cron_summary_fail_heading']    = 'Transactions ayant échoué (profils suspendus):';
$_['text_cron_summary_success_heading'] = 'Transactions réussies:';
$_['text_cron_fail_charge']             = 'Profil <strong> #%s </strong> n\'a pas pu être accusé de <strong> %s </strong>';
$_['text_cron_success_charge']          = 'Profil <strong> #%s </strong> a été accusé de <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Carte de crédit /débit';
$_['text_token_issue_customer_error']   = 'Nous expérimentons une panne technique dans notre système de paiement. Veuillez réessayer plus tard.';
$_['text_token_revoked_subject']        = 'Votre jeton d\'accès Square a été révoqué!';
$_['text_token_revoked_message']        = 'L\'accès de l\'extension de paiement Square à votre compte Square a été révoqué via le tableau de bord Square. Vous devez vérifier vos informations d\'identification d\'application dans les paramètres d\'extension et vous reconnecter.';
$_['text_token_expired_subject']        = 'Votre jeton d\'accès Square a expiré!';
$_['text_token_expired_message']        = 'Le jeton d\'accès de l\'extension de paiement Square connecté à votre compte Square a expiré. Vous devez vérifier vos informations d\'identification d\'application et votre travail CRON dans les paramètres d\'extension et vous reconnecter.';

// Error
$_['error_browser_not_supported']       = 'Erreur: le système de paiement ne prend plus en charge votre navigateur Web. Veuillez mettre à jour ou utiliser un autre.';
$_['error_card_invalid']                = 'Erreur: la carte est invalide!';
$_['error_squareup_cron_token']         = 'Erreur: Le jeton d\'accès n\'a pas pu être actualisé. Veuillez connecter votre extension Square Payment via le panneau d\'administration OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Avertissement: Le mode bac à sable est activé! Les transactions sembleront passer, mais aucun frais ne sera facturé.';

// Statuses
$_['squareup_status_comment_authorized']    = 'La transaction par carte a été autorisée mais pas encore capturée.';
$_['squareup_status_comment_captured']      = 'La transaction par carte a été autorisée et ensuite capturée (c\'est-à-dire terminée).';
$_['squareup_status_comment_voided']        = 'La transaction par carte a été autorisée et ensuite annulée (c\'est-à-dire annulée).';
$_['squareup_status_comment_failed']        = 'La transaction par carte a échoué.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Le pays de l\'adresse de paiement n\'est pas valide. S\'il vous plaît modifiez le et essayez de nouveau.';
$_['squareup_override_error_shipping_address.country']      = 'Le pays de l\'adresse de livraison n\'est pas valide. S\'il vous plaît modifiez le et essayez de nouveau.';
$_['squareup_override_error_email_address']                 = 'Votre adresse e-mail client n\'est pas valide. S\'il vous plaît modifiez le et essayez de nouveau.';
$_['squareup_override_error_phone_number']                  = 'Votre numéro de téléphone client n\'est pas valide. S\'il vous plaît modifiez le et essayez de nouveau.';
$_['squareup_error_field']                                  = 'Champ: %s';