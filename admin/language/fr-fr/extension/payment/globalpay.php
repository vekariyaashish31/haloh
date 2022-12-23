<?php
// Heading
$_['heading_title']					 = 'Redirection Globalpay';

// Text
$_['text_extension']				  	 = 'Extensions';
$_['text_success']					 = 'Succès: vous avez modifié les détails du compte Globalpay!';
$_['text_edit']                      = 'Modifier la redirection Globalpay';
$_['text_live']						 = 'Vivre';
$_['text_demo']						 = 'Démo';
$_['text_card_type']				 = 'Type de carte';
$_['text_enabled']					 = 'Activée';
$_['text_use_default']				 = 'L\'utilisation par défaut';
$_['text_merchant_id']				 = 'ID du marchand';
$_['text_subaccount']				 = 'Sous-compte';
$_['text_secret']					 = 'Secret partagé';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'MasterCard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Commutateur /Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'Capture a été réussie';
$_['text_capture_ok_order']			 = 'La capture a été réussie, le statut de la commande mis à jour vers le succès - réglé';
$_['text_rebate_ok']				 = 'La remise a été couronnée de succès';
$_['text_rebate_ok_order']			 = 'La remise a été réussie, le statut de la commande a été mis à jour pour être réduit';
$_['text_void_ok']					 = 'L\'annulation a été réussie, le statut de la commande a été mis à jour pour annuler';
$_['text_settle_auto']				 = 'Auto';
$_['text_settle_delayed']			 = 'Différé';
$_['text_settle_multi']				 = 'Multi';
$_['text_url_message']				 = 'Vous devez fournir l\'URL du magasin à votre gestionnaire de compte Globalpay avant de mettre en ligne';
$_['text_payment_info']				 = 'Informations de paiement';
$_['text_capture_status']			 = 'Paiement capturé';
$_['text_void_status']				 = 'Paiement annulé';
$_['text_rebate_status']			 = 'Paiement remboursé';
$_['text_order_ref']				 = 'Référence de commande';
$_['text_order_total']				 = 'Total autorisé';
$_['text_total_captured']			 = 'Total capturé';
$_['text_transactions']				 = 'Transactions';
$_['text_column_amount']			 = 'Montant';
$_['text_column_type']				 = 'Type';
$_['text_column_date_added']		 = 'Créé';
$_['text_confirm_void']				 = 'Êtes-vous sûr de vouloir annuler le paiement?';
$_['text_confirm_capture']			 = 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_rebate']			 = 'Êtes-vous sûr de vouloir rayer le paiement?';
$_['text_globalpay']                 = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				 = 'ID du marchand';
$_['entry_secret']					 = 'Secret partagé';
$_['entry_rebate_password']			 = 'Mot de passe de remise';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Ordre de tri';
$_['entry_geo_zone']				 = 'Zone géographique';
$_['entry_status']					 = 'Statut';
$_['entry_debug']					 = 'Journalisation de débogage';
$_['entry_live_demo']				 = 'Live /Demo';
$_['entry_auto_settle']				 = 'Type de règlement';
$_['entry_card_select']				 = 'Sélectionnez la carte';
$_['entry_tss_check']				 = 'Vérifications TSS';
$_['entry_live_url']				 = 'URL de connexion en direct';
$_['entry_demo_url']				 = 'URL de connexion de démonstration';
$_['entry_status_success_settled']	 = 'Succès - réglé';
$_['entry_status_success_unsettled'] = 'Succès - non réglé';
$_['entry_status_decline']			 = 'Déclin';
$_['entry_status_decline_pending']	 = 'Refuser - autorisation hors connexion';
$_['entry_status_decline_stolen']	 = 'Déclin - carte perdue ou volée';
$_['entry_status_decline_bank']		 = 'Déclin - erreur bancaire';
$_['entry_status_void']				 = 'Annulé';
$_['entry_status_rebate']			 = 'Remboursé';
$_['entry_notification_url']		 = 'URL de notification';

// Help
$_['help_total']					 = 'Le total de la commande que l\'ordre doit atteindre avant que cette méthode de paiement ne devienne active';
$_['help_card_select']				 = 'Demander à l\'utilisateur de choisir son type de carte avant de le rediriger';
$_['help_notification']				 = 'Vous devez fournir cette URL à Globalpay pour recevoir les notifications de paiement';
$_['help_debug']					 = 'L\'activation du débogage écrira des données sensibles dans un fichier journal. Vous devriez toujours désactiver sauf indication contraire';
$_['help_dcc_settle']				 = 'Si votre sous-compte est DCC activé, vous devez utiliser Autosettle';

// Tab
$_['tab_api']					     = 'Détails de l\'API';
$_['tab_account']		     		 = 'Comptes';
$_['tab_order_status']				 = 'Statut de la commande';
$_['tab_payment']					 = 'Paramètres de paiement';
$_['tab_advanced']					 = 'Avancée';

// Button
$_['button_capture']				 = 'Capturer';
$_['button_rebate']					 = 'Remboursement /remboursement';
$_['button_void']					 = 'Vide';

// Error
$_['error_merchant_id']				 = 'L\'identifiant du marchand est requis';
$_['error_secret']					 = 'Le secret partagé est requis';
$_['error_live_url']				 = 'L\'URL en direct est requise';
$_['error_demo_url']				 = 'L\'URL de démonstration est requise';
$_['error_data_missing']			 = 'Données manquantes';
$_['error_use_select_card']			 = 'Vous devez avoir "Sélectionner Card" activé pour le routage de sous-compte par type de carte pour fonctionner';