<?php
// Heading
$_['heading_title']					 = 'API First Data EMEA Web Service';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Extensions';
$_['text_success']					 = 'Succès: vous avez modifié les détails du compte First Data!';
$_['text_edit']                      = 'Modifier l\'API du service Web EMEA First Data';
$_['text_card_type']				 = 'Type de carte';
$_['text_enabled']					 = 'Activée';
$_['text_merchant_id']				 = 'ID du magasin';
$_['text_subaccount']				 = 'Sous-compte';
$_['text_user_id']					 = 'Identifiant d\'utilisateur';
$_['text_capture_ok']				 = 'Capture a été réussie';
$_['text_capture_ok_order']			 = 'La capture a été réussie, le statut de la commande mis à jour vers le succès - réglé';
$_['text_refund_ok']				 = 'Le remboursement a été réussi';
$_['text_refund_ok_order']			 = 'Le remboursement a été effectué, le statut de la commande a été mis à jour pour être remboursé';
$_['text_void_ok']					 = 'L\'annulation a été réussie, le statut de la commande a été mis à jour pour annuler';
$_['text_settle_auto']				 = 'Vente';
$_['text_settle_delayed']			 = 'Préautorisation';
$_['text_mastercard']				 = 'MasterCard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Informations de paiement';
$_['text_capture_status']			 = 'Paiement capturé';
$_['text_void_status']				 = 'Paiement annulé';
$_['text_refund_status']			 = 'Paiement remboursé';
$_['text_order_ref']				 = 'Référence de commande';
$_['text_order_total']				 = 'Total autorisé';
$_['text_total_captured']			 = 'Total capturé';
$_['text_transactions']				 = 'Transactions';
$_['text_column_amount']			 = 'Montant';
$_['text_column_type']				 = 'Type';
$_['text_column_date_added']		 = 'Créé';
$_['text_confirm_void']				 = 'Êtes-vous sûr de vouloir annuler le paiement?';
$_['text_confirm_capture']			 = 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_refund']			 = 'Êtes-vous sûr de vouloir rembourser le payment?';

// Entry
$_['entry_certificate_path']		 = 'Chemin du certificat';
$_['entry_certificate_key_path']	 = 'Chemin de clé privée';
$_['entry_certificate_key_pw']		 = 'Mot de passe de clé privée';
$_['entry_certificate_ca_path']		 = 'CA chemin';
$_['entry_merchant_id']				 = 'ID du magasin';
$_['entry_user_id']					 = 'Identifiant d\'utilisateur';
$_['entry_password']				 = 'Mot de passe';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Ordre de tri';
$_['entry_geo_zone']				 = 'Zone géographique';
$_['entry_status']					 = 'Statut';
$_['entry_debug']					 = 'Journalisation de débogage';
$_['entry_auto_settle']				 = 'Type de règlement';
$_['entry_status_success_settled']	 = 'Succès - réglé';
$_['entry_status_success_unsettled'] = 'Succès - non réglé';
$_['entry_status_decline']			 = 'Déclin';
$_['entry_status_void']				 = 'Annulé';
$_['entry_status_refund']			 = 'Remboursé';
$_['entry_enable_card_store']		 = 'Activer les jetons de stockage de cartes';
$_['entry_cards_accepted']			 = 'Types de cartes acceptés';

// Help
$_['help_total']					 = 'Le total de la commande que l\'ordre doit atteindre avant que cette méthode de paiement ne devienne active';
$_['help_certificate']				 = 'Les certificats et les clés privées doivent être stockés en dehors de vos dossiers Web publics';
$_['help_card_select']				 = 'Demander à l\'utilisateur de choisir son type de carte avant de le rediriger';
$_['help_notification']				 = 'Vous devez fournir cette URL à First Data pour recevoir les notifications de paiement';
$_['help_debug']					 = 'L\'activation du débogage écrira des données sensibles dans un fichier journal. Vous devriez toujours désactiver, sauf indication contraire.';
$_['help_settle']					 = 'Si vous utilisez pré-auth vous devez effectuer une action post-auth dans les 3-5 jours sinon votre transaction sera abandonnée';

// Tab
$_['tab_account']					 = 'Informations sur l\'API';
$_['tab_order_status']				 = 'Statut de la commande';
$_['tab_payment']					 = 'Paramètres de paiement';

// Button
$_['button_capture']				 = 'Capturer';
$_['button_refund']					 = 'Rembourser';
$_['button_void']					 = 'Vide';

// Error
$_['error_merchant_id']				 = 'L\'identifiant du magasin est requis';
$_['error_user_id']					 = 'L\'identifiant de l\'utilisateur est requis';
$_['error_password']				 = 'Mot de passe requis';
$_['error_certificate']				 = 'Le chemin du certificat est requis';
$_['error_key']						 = 'La clé de certificat est requise';
$_['error_key_pw']					 = 'Un mot de passe de clé de certificat est requis';
$_['error_ca']						 = 'L\'autorité de certification (CA) est requise';