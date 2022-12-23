<?php
// Headings
$_['heading_title']        	   = 'Paramètres';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Fulfillment par Amazon';

// Text
$_['text_success']     		   = 'Vos réglages ont été sauvegardés';
$_['text_status']         	   = 'Statut';
$_['text_account_ok']  		   = 'Connexion à la réalisation par Amazon OK';
$_['text_api_ok']       	   = 'Connexion API OK';
$_['text_api_status']          = 'Connexion API';
$_['text_edit']           	   = 'Modifier l\'exécution par les paramètres Amazon';
$_['text_standard']            = 'la norme';
$_['text_expedited']           = 'Expedited';
$_['text_priority']            = 'Priorité';
$_['text_fillorkill']          = 'Remplir ou tuer';
$_['text_fillall']             = 'Remplir tout';
$_['text_fillallavailable']    = 'Remplissez tous disponibles';
$_['text_prefix_warning']      = 'Ne modifiez pas ce paramètre après l\'envoi des commandes à Amazon, définissez-le uniquement lors de la première installation.';
$_['text_disabled_cancel']     = 'Désactivé - n\'annule pas automatiquement les exécutions';
$_['text_validate_success']    = 'Les détails de votre API fonctionnent correctement! Vous devez appuyer sur Enregistrer pour vous assurer que les paramètres sont enregistrés.';
$_['text_register_banner']     = 'Cliquez ici si vous devez vous inscrire pour un compte';

// Entry
$_['entry_api_key']            = 'Jeton API';
$_['entry_encryption_key']     = 'Clé de chiffrement 1';
$_['entry_encryption_iv']      = 'Clé de chiffrement 2';
$_['entry_account_id']         = 'identifiant de compte';
$_['entry_send_orders']        = 'Envoyer des ordres automatiquement';
$_['entry_fulfill_policy']     = 'Politique de réalisation';
$_['entry_shipping_speed']     = 'Vitesse d\'expédition par défaut';
$_['entry_debug_log']          = 'Activer la journalisation du débogage';
$_['entry_new_order_status']   = 'Nouveau déclencheur d\'exécution';
$_['entry_order_id_prefix']    = 'Préfixe d\'ID de commande';
$_['entry_only_fill_complete'] = 'Tous les articles doivent être FBA';

// Help
$_['help_api_key']             = 'Ceci est votre jeton API, récupérez-le dans votre compte OpenBay Pro';
$_['help_encryption_key']      = 'Ceci est votre clé de cryptage #1, l\'obtenir à partir de votre compte OpenBay Pro';
$_['help_encryption_iv']       = 'Ceci est votre clé de cryptage #2, l\'obtenir à partir de votre compte OpenBay Pro';
$_['help_account_id']          = 'C\'est l\'identifiant de compte qui correspond au compte Amazon enregistré pour OpenBay Pro, obtenez-le à partir de votre compte OpenBay Pro';
$_['help_send_orders']  	   = 'Les commandes contenant des produits Fulfillment par Amazon seront automatiquement envoyées à Amazon';
$_['help_fulfill_policy']  	   = 'La règle d\'exécution par défaut (FillAll - Tous les éléments remplis dans l\'ordre de traitement sont expédiés.) L\'ordre d\'exécution reste dans un état de traitement jusqu\'à ce que tous les articles soient expédiés par Amazon ou annulés par le vendeur. Amazon.FillOrKill annule tous les éléments non-exécutables de la commande - Si un article est jugé irréalisable dans un ordre de traitement avant que la commande ne passe en attente (le processus de sélection des unités de stock a commencé), alors la commande entière est considérée comme irréalisable, mais si un article d\'une commande est jugé irréalisable après l\'envoi d\'un envoi dans la commande en attente, Amazon annule autant que possible l\'ordre d\'exécution.';
$_['help_shipping_speed']  	   = 'Il s\'agit de la catégorie de vitesse d\'expédition par défaut à appliquer aux nouvelles commandes, différents niveaux de service pouvant entraîner des coûts différents';
$_['help_debug_log']  		   = 'Les journaux de débogage enregistrent des informations dans un fichier journal sur les actions du module. Cela devrait être laissé activé pour aider à trouver la cause de tous les problèmes.';
$_['help_new_order_status']    = 'C\'est le statut de la commande qui va déclencher la commande à créer pour l\'exécution. Assurez-vous que vous utilisez un statut uniquement après avoir reçu le paiement.';
$_['help_order_id_prefix']     = 'Avoir un préfixe de commande aidera à identifier les commandes qui proviennent de votre magasin et non d\'autres intégrations. Ceci est très utile lorsque les commerçants vendent sur de nombreux marchés et utilisent FBA';
$_['help_only_fill_complete']  = 'Cela permettra seulement aux commandes d\'être envoyées pour exécution si TOUS les articles de la commande sont associés à un article Fulfillment by Amazon. Si un article n\'est pas alors la commande entière restera non remplie.';

// Error
$_['error_api_connect']        = 'Échec de la connexion à l\'API';
$_['error_account_info']       = 'Impossible de vérifier la connexion de l\'API à Fulfillment by Amazon';
$_['error_api_key']    		   = 'Le jeton d\'API est invalide';
$_['error_api_account_id']     = 'L\'identifiant du compte est invalide';
$_['error_encryption_key']     = 'La clé de chiffrement #1 n\'est pas valide';
$_['error_encryption_iv']      = 'La clé de chiffrement #2 n\'est pas valide';
$_['error_validation']    	   = 'Une erreur s\'est produite lors de la validation de vos informations';

// Tabs
$_['tab_api_info']             = 'Détails de l\'API';

// Buttons
$_['button_verify']            = 'Vérifier les détails';
