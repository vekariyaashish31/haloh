<?php
// Text
$_['text_title']				= 'Carte de crédit ou de débit';
$_['text_credit_card']			= 'Détails de la carte de crédit';
$_['text_wait']					= 'S\'il vous plaît attendre!';
$_['text_result']				= 'Résultat';
$_['text_message']				= 'Message';
$_['text_cvn_result']			= 'Résultat CVN';
$_['text_avs_postcode']			= 'Code postal AVS';
$_['text_avs_address']			= 'Adresse AVS';
$_['text_eci']					= 'Résultat ECI (3D secure)';
$_['text_tss']					= 'Résultat TSS';
$_['text_card_bank']			= 'Banque d\'émission de cartes';
$_['text_card_country']			= 'Pays de la carte';
$_['text_card_region']			= 'Région de la carte';
$_['text_last_digits']			= '4 derniers chiffres';
$_['text_order_ref']			= 'Référence de commande';
$_['text_timestamp']			= 'Horodatage';
$_['text_card_visa']			= 'Visa';
$_['text_card_mc']				= 'MasterCard';
$_['text_card_amex']			= 'American Express';
$_['text_card_switch']			= 'Commutateur';
$_['text_card_laser']			= 'Laser';
$_['text_card_diners']			= 'Diners';
$_['text_auth_code']			= 'Code d\'autorisation';
$_['text_3d_s1']				= 'Titulaire de la carte non inscrit, transfert de responsabilité';
$_['text_3d_s2']				= 'Impossible de vérifier l\'inscription, aucun changement de responsabilité';
$_['text_3d_s3']				= 'Réponse non valide de Enrollment Server, aucun changement de responsabilité';
$_['text_3d_s4']				= 'Inscrit, mais Réponse Invalide d\'ACS (Access Control Server), aucun changement de responsabilité';
$_['text_3d_s5']				= 'Authentification réussie, changement de responsabilité';
$_['text_3d_s6']				= 'Tentative d\'authentification acquittée, changement de responsabilité';
$_['text_3d_s7']				= 'Mot de passe incorrect entré, pas de changement de responsabilité';
$_['text_3d_s8']				= 'Authentification non disponible, pas de changement de responsabilité';
$_['text_3d_s9']				= 'Réponse non valide d\'ACS, aucun changement de responsabilité';
$_['text_3d_s10']				= 'Erreur fatale RealMPI, pas de changement de responsabilité';

// Entry
$_['entry_cc_type']				= 'Type de carte';
$_['entry_cc_number']			= 'Numéro de carte';
$_['entry_cc_name']				= 'Nom du titulaire';
$_['entry_cc_expire_date']		= 'Date d\'expiration de la carte';
$_['entry_cc_cvv2']				= 'Code de sécurité de la carte (CVV2)';
$_['entry_cc_issue']			= 'Numéro de délivrance de la carte';

// Help
$_['help_start_date']			= '(si disponible)';
$_['help_issue']				= '(pour les cartes Maestro et Solo uniquement)';

// Error
$_['error_card_number']			= 'S\'il vous plaît vérifier votre numéro de carte est valide';
$_['error_card_name']			= 'S\'il vous plaît vérifier le nom du titulaire de la carte est valide';
$_['error_card_cvv']			= 'S\'il vous plaît vérifier le CVV2 est valide';
$_['error_3d_unable']			= 'Le marchand nécessite une connexion 3D sécurisée mais incapable de vérifier avec votre banque, veuillez réessayer plus tard';
$_['error_3d_500_response_no_payment'] = 'Une réponse invalide a été reçue du processeur de la carte, aucun paiement n\'a été pris';
$_['error_3d_unsuccessful']		= 'L\'autorisation sécurisée 3D a échoué';