<?php
// Text
$_['text_title']				= 'Klarna Invoice - Payez dans les 14 jours';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Invoice nécessite des informations supplémentaires avant de pouvoir traiter votre commande.';
$_['text_male']					= 'Mâle';
$_['text_female']				= 'Femelle';
$_['text_year']					= 'An';
$_['text_month']				= 'Mois';
$_['text_day']					= 'journée';
$_['text_comment']				= 'ID de facture de Klarna: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Le genre';
$_['entry_pno']					= 'Numéro personnel';
$_['entry_dob']					= 'Date de naissance';
$_['entry_phone_no']			= 'Numéro de téléphone';
$_['entry_street']				= 'rue';
$_['entry_house_no']			= 'Numéro de maison.';
$_['entry_house_ext']			= 'Maison Ext.';
$_['entry_company']				= 'Numéro d\'entreprise';

// Help
$_['help_pno']					= 'Veuillez entrer votre numéro de sécurité sociale ici.';
$_['help_phone_no']				= 'S\'il vous plait, entrez votre numéro de téléphone.';
$_['help_street']				= 'S\'il vous plaît noter que la livraison ne peut avoir lieu à l\'adresse enregistrée lors du paiement avec Klarna.';
$_['help_house_no']				= 'S\'il vous plaît entrez votre numéro de maison.';
$_['help_house_ext']			= 'Veuillez soumettre votre extension de maison ici. Par exemple. A, B, C, rouge, bleu ect.';
$_['help_company']				= 'Veuillez entrer le numéro d\'enregistrement de votre société';

// Error
$_['error_deu_terms']			= 'Vous devez accepter la politique de confidentialité de Klarna (Datenschutz)';
$_['error_address_match']		= 'Les adresses de facturation et d\'expédition doivent correspondre si vous souhaitez utiliser Klarna Invoice';
$_['error_network']				= 'Une erreur s\'est produite lors de la connexion à Klarna. Veuillez réessayer plus tard.';