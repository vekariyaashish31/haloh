<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Paramètres';
$_['tab_order_status']              = 'Statut de la commande';

// Text
$_['text_extension']                = 'Extensions';
$_['text_success']                  = 'Succès: vous avez modifié le module de paiement CardConnect!';
$_['text_edit']                     = 'Modifier CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Paiement';
$_['text_authorize']                = 'Autoriser';
$_['text_live']                     = 'Vivre';
$_['text_test']                     = 'Tester';
$_['text_no_cron_time']             = 'Le cron n\'a pas encore été exécuté';
$_['text_payment_info']             = 'Informations de paiement';
$_['text_payment_method']           = 'Mode de paiement';
$_['text_card']                     = 'Carte';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Référence';
$_['text_update']                   = 'Mettre à jour';
$_['text_order_total']              = 'Total de la commande';
$_['text_total_captured']           = 'Total capturé';
$_['text_capture_payment']          = 'Capture de paiement';
$_['text_refund_payment']           = 'Remboursement';
$_['text_void']                     = 'Vide';
$_['text_transactions']             = 'Transactions';
$_['text_column_type']              = 'Type';
$_['text_column_reference']         = 'Référence';
$_['text_column_amount']            = 'Montant';
$_['text_column_status']            = 'Statut';
$_['text_column_date_modified']     = 'Date modifiée';
$_['text_column_date_added']        = 'date ajoutée';
$_['text_column_update']            = 'Mettre à jour';
$_['text_column_void']              = 'Vide';
$_['text_confirm_capture']          = 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_refund']           = 'Êtes-vous sûr de vouloir rembourser le payment?';
$_['text_inquire_success']          = 'Demander a été réussi';
$_['text_capture_success']          = 'La demande de capture a été acceptée';
$_['text_refund_success']           = 'La demande de remboursement a été acceptée';
$_['text_void_success']             = 'La demande d\'annulation a été acceptée';

// Entry
$_['entry_merchant_id']             = 'ID du marchand';
$_['entry_api_username']            = 'Nom d\'utilisateur de l\'API';
$_['entry_api_password']            = 'Mot de passe API';
$_['entry_token']                   = 'Jeton secret';
$_['entry_transaction']             = 'Transaction';
$_['entry_environment']             = 'Environnement';
$_['entry_site']                    = 'Site';
$_['entry_store_cards']             = 'Cartes de magasin';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Total';
$_['entry_geo_zone']                = 'Zone géographique';
$_['entry_status']                  = 'Statut';
$_['entry_logging']                 = 'Journalisation du débogage';
$_['entry_sort_order']              = 'Ordre de tri';
$_['entry_cron_url']                = 'Cron Job URL';
$_['entry_cron_time']               = 'Cron Job Dernière exécution';
$_['entry_order_status_pending']    = 'en attendant';
$_['entry_order_status_processing'] = 'En traitement';

// Help
$_['help_merchant_id']              = 'Votre identifiant personnel de compte CardConnect.';
$_['help_api_username']             = 'Votre nom d\'utilisateur pour accéder à l\'API CardConnect.';
$_['help_api_password']             = 'Votre mot de passe pour accéder à l\'API CardConnect.';
$_['help_token']                    = 'Entrez un jeton aléatoire pour la sécurité ou utilisez celui créé.';
$_['help_transaction']              = 'Choisissez \ "Paiement \" pour capturer le paiement immédiatement ou \ "Autoriser \" pour l\'approuver.';
$_['help_site']                     = 'Cela détermine la première partie de l\'URL de l\'API. Ne changez que si demandé.';
$_['help_store_cards']              = 'Si vous voulez stocker des cartes en utilisant la tokenisation.';
$_['help_echeck']                   = 'Si vous voulez offrir la possibilité de payer en utilisant un eCheck.';
$_['help_total']                    = 'Le total de la commande doit atteindre avant que cette méthode de paiement ne devienne active. Doit être une valeur sans signe de devise.';
$_['help_logging']                  = 'L\'activation du débogage écrira des données sensibles dans un fichier journal. Vous devriez toujours désactiver, sauf indication contraire.';
$_['help_cron_url']                 = 'Définissez un travail cron pour appeler cette URL afin que les commandes soient mises à jour automatiquement. Il est conçu pour être exécuté quelques heures après la dernière capture d\'un jour ouvrable.';
$_['help_cron_time']                = 'C\'est la dernière fois que l\'URL du travail cron a été exécutée.';
$_['help_order_status_pending']     = 'Le statut de la commande lorsque la commande doit être autorisée par le marchand.';
$_['help_order_status_processing']  = 'Le statut de la commande lorsque la commande est automatiquement capturée.';

// Button
$_['button_inquire_all']            = 'Se renseigner tout';
$_['button_capture']                = 'Capturer';
$_['button_refund']                 = 'Rembourser';
$_['button_void_all']               = 'Tout annuler';
$_['button_inquire']                = 'Renseigner';
$_['button_void']                   = 'Vide';

// Error
$_['error_permission']              = 'Attention: Vous n\'êtes pas autorisé à modifier le paiement CardConnect!';
$_['error_merchant_id']             = 'Numéro de commerçant requis!';
$_['error_api_username']            = 'Nom d\'utilisateur de l\'API requis!';
$_['error_api_password']            = 'Mot de passe API requis!';
$_['error_token']                   = 'Jeton Secret Requis!';
$_['error_site']                    = 'Site requis!';
$_['error_amount_zero']             = 'Le montant doit être supérieur à zéro!';
$_['error_no_order']                = 'Aucune commande correspondante info!';
$_['error_invalid_response']        = 'Réponse non valide reçue!';
$_['error_data_missing']            = 'Données manquantes!';
$_['error_not_enabled']             = 'Module non activé!';