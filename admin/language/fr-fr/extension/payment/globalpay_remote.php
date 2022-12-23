<?php
// Heading
$_['heading_title']					 = 'Globalpay Remote';

// Text
$_['text_extension']				 = 'Extensions';
$_['text_success']					 = 'Succès: vous avez modifié les détails du compte Globalpay!';
$_['text_edit']                      = 'Modifier Globalpay Remote';
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
$_['text_ip_message']				 = 'Vous devez fournir l\'adresse IP de votre serveur à votre gestionnaire de compte Globalpay avant de mettre en ligne';
$_['text_payment_info']				 = 'Informations de paiement';
$_['text_capture_status']			 = 'Paiement capturé';
$_['text_void_status']				 = 'Paiement annulé';
$_['text_rebate_status']			 = 'Paiement remboursé';
$_['text_order_ref']				 = 'Référence de commande';
$_['text_order_total']				 = 'Total autorisé';
$_['text_total_captured']			 = 'Total capturé';
$_['text_transactions']				 = 'Transactions';
$_['text_confirm_void']				 = 'Êtes-vous sûr de vouloir annuler le paiement?';
$_['text_confirm_capture']			 = 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_rebate']			 = 'Êtes-vous sûr de vouloir rayer le paiement?';
$_['text_globalpay_remote']			 = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Column
$_['text_column_amount']			 = 'Montant';
$_['text_column_type']				 = 'Type';
$_['text_column_date_added']		 = 'Créé';

// Entry
$_['entry_merchant_id']				 = 'ID du marchand';
$_['entry_secret']					 = 'Secret partagé';
$_['entry_rebate_password']			 = 'Mot de passe de remise';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Ordre de tri';
$_['entry_geo_zone']				 = 'Zone géographique';
$_['entry_status']					 = 'Statut';
$_['entry_debug']					 = 'Journalisation de débogage';
$_['entry_auto_settle']				 = 'Type de règlement';
$_['entry_tss_check']				 = 'Vérifications TSS';
$_['entry_card_data_status']		 = 'Journalisation des informations sur la carte';
$_['entry_3d']						 = 'Activer 3D secure';
$_['entry_liability_shift']			 = 'Accepter des scénarios de transfert de responsabilité sans-responsabilité';
$_['entry_status_success_settled']	 = 'Succès - réglé';
$_['entry_status_success_unsettled'] = 'Succès - non réglé';
$_['entry_status_decline']			 = 'Déclin';
$_['entry_status_decline_pending']	 = 'Refuser - autorisation hors connexion';
$_['entry_status_decline_stolen']	 = 'Déclin - carte perdue ou volée';
$_['entry_status_decline_bank']		 = 'Déclin - erreur bancaire';
$_['entry_status_void']				 = 'Annulé';
$_['entry_status_rebate']			 = 'Remboursé';

// Help
$_['help_total']					 = 'Le total de la commande que l\'ordre doit atteindre avant que cette méthode de paiement ne devienne active';
$_['help_card_select']				 = 'Demander à l\'utilisateur de choisir son type de carte avant de le rediriger';
$_['help_notification']				 = 'Vous devez fournir cette URL à Globalpay pour recevoir les notifications de paiement';
$_['help_debug']					 = 'L\'activation du débogage écrira des données sensibles dans un fichier journal. Vous devriez toujours désactiver, sauf indication contraire.';
$_['help_liability']				 = 'Accepter la responsabilité signifie que vous acceptez toujours les paiements lorsqu\'un utilisateur échoue à la sécurité 3D.';
$_['help_card_data_status']			 = 'Journaux 4 derniers chiffres de la carte, expire, nom, type et informations bancaires';

// Tab
$_['tab_api']					     = 'Détails de l\'API';
$_['tab_account']				     = 'Comptes';
$_['tab_order_status']				 = 'Statut de la commande';
$_['tab_payment']					 = 'Paramètres de paiement';

// Button
$_['button_capture']				 = 'Capturer';
$_['button_rebate']					 = 'Remboursement /remboursement';
$_['button_void']					 = 'Vide';

// Error
$_['error_merchant_id']				 = 'L\'identifiant du marchand est requis';
$_['error_secret']					 = 'Le secret partagé est requis';