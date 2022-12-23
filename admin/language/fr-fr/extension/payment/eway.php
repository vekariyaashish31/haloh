<?php
// Heading
$_['heading_title']				= 'Paiement eWAY';

// Text
$_['text_extension']			= 'Extensions';
$_['text_success']				= 'Succès: vous avez modifié vos informations eWAY!';
$_['text_edit']					= 'Modifier eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Autorisation';
$_['text_sale']					= 'Vente';
$_['text_transparent']			= 'Redirection transparente (formulaire de paiement sur site)';
$_['text_iframe']				= 'IFrame (formulaire de paiement dans la fenêtre)';

// Entry
$_['entry_paymode']				= 'Mode de paiement';
$_['entry_test']				= 'Mode d\'essai';
$_['entry_order_status']		= 'Statut de la commande';
$_['entry_order_status_refund'] = 'État de la commande remboursée';
$_['entry_order_status_auth']	= 'Statut de la commande autorisée';
$_['entry_order_status_fraud']	= 'Statut de l\'ordre de fraude suspectée';
$_['entry_status']				= 'Statut';
$_['entry_username']			= 'Clé de l\'API eWAY';
$_['entry_password']			= 'mot de passe eWAY';
$_['entry_payment_type']		= 'Type de paiement';
$_['entry_geo_zone']			= 'Zone géographique';
$_['entry_sort_order']			= 'Ordre de tri';
$_['entry_transaction_method']	= 'Méthode de transaction';

// Error
$_['error_permission']			= 'Attention: Vous n\'êtes pas autorisé à modifier le module de paiement eWAY';
$_['error_username']			= 'La clé de l\'API eWAY est requise!';
$_['error_password']			= 'Le mot de passe eWAY est requis!';
$_['error_payment_type']		= 'Au moins un type de paiement est requis!';

// Help hints
$_['help_testmode']				= 'Définissez sur Oui pour utiliser eWAY Sandbox.';
$_['help_username']				= 'Votre clé d\'API eWAY depuis votre compte MYeWAY.';
$_['help_password']				= 'Votre mot de passe API eWAY depuis votre compte MYeWAY.';
$_['help_transaction_method']	= 'L\'autorisation est uniquement disponible pour les banques australiennes';

// Order page - payment tab
$_['text_payment_info']			= 'Informations de paiement';
$_['text_order_total']			= 'Total autorisé';
$_['text_transactions']			= 'Transactions';
$_['text_column_transactionid'] = 'Identifiant de transaction eWAY';
$_['text_column_amount']		= 'Montant';
$_['text_column_type']			= 'Type';
$_['text_column_created']		= 'Créé';
$_['text_total_captured']		= 'Total capturé';
$_['text_capture_status']		= 'Paiement capturé';
$_['text_void_status']			= 'Paiement annulé';
$_['text_refund_status']		= 'Paiement remboursé';
$_['text_total_refunded']		= 'Total remboursé';
$_['text_refund_success']		= 'Remboursement réussi!';
$_['text_capture_success']		= 'Capture réussie!';
$_['text_refund_failed']		= 'Le remboursement a échoué:';
$_['text_capture_failed']		= 'La capture a échoué:';
$_['text_unknown_failure']		= 'Ordre ou montant invalide';

$_['text_confirm_capture']		= 'Êtes-vous sûr de vouloir capturer le paiement?';
$_['text_confirm_release']		= 'Êtes-vous sûr de vouloir libérer le paiement?';
$_['text_confirm_refund']		= 'Êtes-vous sûr de vouloir rembourser le payment?';

$_['text_empty_refund']			= 'Veuillez entrer un montant à rembourser';
$_['text_empty_capture']		= 'Veuillez entrer un montant à capturer';

$_['btn_refund']				= 'Rembourser';
$_['btn_capture']				= 'Capturer';

// Validation Error codes
$_['text_card_message_V6000']	= 'Erreur de validation indéfinie';
$_['text_card_message_V6001'] 	= 'IP client non valide';
$_['text_card_message_V6002'] 	= 'DeviceID incorrect';
$_['text_card_message_V6011'] 	= 'Montant invalide';
$_['text_card_message_V6012'] 	= 'Description de la facture non valide';
$_['text_card_message_V6013'] 	= 'Numéro de facture incorrect';
$_['text_card_message_V6014'] 	= 'Référence de facture non valide';
$_['text_card_message_V6015'] 	= 'Code de devise incorrect';
$_['text_card_message_V6016'] 	= 'Paiement Requis';
$_['text_card_message_V6017'] 	= 'Code de devise de paiement requis';
$_['text_card_message_V6018'] 	= 'Code de devise de paiement inconnu';
$_['text_card_message_V6021'] 	= 'Nom du titulaire de carte requis';
$_['text_card_message_V6022'] 	= 'Numéro de carte requis';
$_['text_card_message_V6023'] 	= 'CVN requis';
$_['text_card_message_V6031'] 	= 'Numéro de carte invalide';
$_['text_card_message_V6032'] 	= 'CVN invalide';
$_['text_card_message_V6033'] 	= 'Date d\'expiration invalide';
$_['text_card_message_V6034'] 	= 'Numéro de problème non valide';
$_['text_card_message_V6035'] 	= 'Date de début incorrecte';
$_['text_card_message_V6036'] 	= 'Mois non valide';
$_['text_card_message_V6037'] 	= 'Année invalide';
$_['text_card_message_V6040'] 	= 'Identifiant du client de jeton non valide';
$_['text_card_message_V6041'] 	= 'Client requis';
$_['text_card_message_V6042'] 	= 'Prénom du client requis';
$_['text_card_message_V6043'] 	= 'Nom de famille du client requis';
$_['text_card_message_V6044'] 	= 'Code de pays du client requis';
$_['text_card_message_V6045'] 	= 'Titre du client requis';
$_['text_card_message_V6046'] 	= 'ID de client de jeton requis';
$_['text_card_message_V6047'] 	= 'RedirectURL requis';
$_['text_card_message_V6051'] 	= 'Prénom invalide';
$_['text_card_message_V6052'] 	= 'Nom de famille incorrect';
$_['text_card_message_V6053'] 	= 'Code de pays incorrect';
$_['text_card_message_V6054'] 	= 'Email invalide';
$_['text_card_message_V6055'] 	= 'Téléphone invalide';
$_['text_card_message_V6056'] 	= 'Mobile invalide';
$_['text_card_message_V6057'] 	= 'Fax non valide';
$_['text_card_message_V6058'] 	= 'Titre invalide';
$_['text_card_message_V6059'] 	= 'URL de redirection non valide';
$_['text_card_message_V6060'] 	= 'URL de redirection non valide';
$_['text_card_message_V6061'] 	= 'Référence invalide';
$_['text_card_message_V6062'] 	= 'Nom de l\'entreprise invalide';
$_['text_card_message_V6063'] 	= 'Description de l\'emploi invalide';
$_['text_card_message_V6064'] 	= 'Street1 invalide';
$_['text_card_message_V6065'] 	= 'Street2 invalide';
$_['text_card_message_V6066'] 	= 'Ville invalide';
$_['text_card_message_V6067'] 	= 'Etat non valide';
$_['text_card_message_V6068'] 	= 'Code postal invalide';
$_['text_card_message_V6069'] 	= 'Email invalide';
$_['text_card_message_V6070'] 	= 'Téléphone invalide';
$_['text_card_message_V6071'] 	= 'Mobile invalide';
$_['text_card_message_V6072'] 	= 'Commentaires non valides';
$_['text_card_message_V6073'] 	= 'Fax non valide';
$_['text_card_message_V6074'] 	= 'URL invalide';
$_['text_card_message_V6075'] 	= 'Prénom de l\'adresse de livraison non valide';
$_['text_card_message_V6076'] 	= 'Nom de l\'adresse de livraison incorrecte';
$_['text_card_message_V6077'] 	= 'Adresse de livraison incorrecte Street1';
$_['text_card_message_V6078'] 	= 'Adresse de livraison incorrecte Street2';
$_['text_card_message_V6079'] 	= 'Ville d\'adresse de livraison incorrecte';
$_['text_card_message_V6080'] 	= 'État d\'adresse de livraison incorrect';
$_['text_card_message_V6081'] 	= 'Adresse de livraison non valide PostalCode';
$_['text_card_message_V6082'] 	= 'Adresse de livraison incorrecte';
$_['text_card_message_V6083'] 	= 'Téléphone d\'adresse de livraison invalide';
$_['text_card_message_V6084'] 	= 'Pays d\'adresse de livraison incorrect';
$_['text_card_message_V6091'] 	= 'Code de pays inconnu';
$_['text_card_message_V6100'] 	= 'Nom de la carte invalide';
$_['text_card_message_V6101'] 	= 'Mois d\'expiration de la carte invalide';
$_['text_card_message_V6102'] 	= 'Année d\'expiration de la carte invalide';
$_['text_card_message_V6103'] 	= 'Mois de début de la carte invalide';
$_['text_card_message_V6104'] 	= 'Année de début de la carte invalide';
$_['text_card_message_V6105'] 	= 'Numéro de problème de carte invalide';
$_['text_card_message_V6106'] 	= 'Carte CVN non valide';
$_['text_card_message_V6107'] 	= 'Code d\'accès invalide';
$_['text_card_message_V6108'] 	= 'CustomerHostAddress non valide';
$_['text_card_message_V6109'] 	= 'UtilisateurAgent non valide';
$_['text_card_message_V6110'] 	= 'Numéro de carte invalide';
$_['text_card_message_V6111'] 	= 'Accès API non autorisé, compte non certifié PCI';
$_['text_card_message_V6112'] 	= 'Informations de carte redondantes autres que l\'année d\'expiration et le mois';
$_['text_card_message_V6113'] 	= 'Transaction invalide pour remboursement';
$_['text_card_message_V6114'] 	= 'Erreur de validation de la passerelle';
$_['text_card_message_V6115'] 	= 'DirectRefundRequest non valide, ID de transaction';
$_['text_card_message_V6116'] 	= 'Données de carte non valides sur l\'ID de transaction d\'origine';
$_['text_card_message_V6124'] 	= 'Éléments de campagne non valides Les éléments de ligne ont été fournis, mais les totaux ne correspondent pas au champ TotalAmount';
$_['text_card_message_V6125'] 	= 'Le type de paiement sélectionné n\'est pas activé';
$_['text_card_message_V6126'] 	= 'Numéro de carte chiffré non valide, échec du déchiffrement';
$_['text_card_message_V6127'] 	= 'Cvn chiffré non valide, le déchiffrement a échoué';
$_['text_card_message_V6128'] 	= 'Méthode non valide pour le type de paiement';
$_['text_card_message_V6129'] 	= 'La transaction n\'a pas été autorisée pour la capture /annulation';
$_['text_card_message_V6130'] 	= 'Erreur d\'informations client générique';
$_['text_card_message_V6131'] 	= 'Erreur d\'information d\'expédition générique';
$_['text_card_message_V6132'] 	= 'La transaction a déjà été complétée ou annulée, opération non autorisée';
$_['text_card_message_V6133'] 	= 'La commande n\'est pas disponible pour le type de paiement';
$_['text_card_message_V6134'] 	= 'ID de transaction d\'authentification non valide pour Capture /Void';
$_['text_card_message_V6135'] 	= 'PayPal Traitement des erreurs remboursement';
$_['text_card_message_V6140'] 	= 'Le compte du marchand est suspendu';
$_['text_card_message_V6141'] 	= 'Les détails du compte PayPal ou la signature de l\'API ne sont pas valides';
$_['text_card_message_V6142'] 	= 'Autorisation non disponible pour la banque /succursale';
$_['text_card_message_V6150'] 	= 'Montant de remboursement invalide';
$_['text_card_message_V6151'] 	= 'Montant du remboursement supérieur à la transaction initiale';
$_['text_card_message_D4406'] 	= 'Erreur inconnue';
$_['text_card_message_S5010'] 	= 'Erreur inconnue';