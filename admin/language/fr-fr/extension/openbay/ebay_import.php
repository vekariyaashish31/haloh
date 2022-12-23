<?php
// Heading
$_['heading_title']              = 'Importation d\'article';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'eBay';

// Text
$_['text_sync_import_line1']     = '<strong> Caution! </strong> Cela va importer tous vos produits eBay et construire une structure de catégorie dans votre magasin. Il est conseillé de supprimer toutes les catégories et tous les produits avant d\'exécuter cette option. <br /> La structure des catégories provient des catégories eBay normales, et non des catégories de votre boutique (si vous avez une boutique eBay). Vous pouvez renommer, supprimer et modifier les catégories importées sans affecter vos produits eBay.';
$_['text_sync_import_line3']     = 'Vous devez vous assurer que votre serveur peut accepter et traiter de grandes tailles de données POST. 1000 articles eBay est d\'environ 40 Mo de taille, vous aurez besoin de calculer ce dont vous avez besoin. Si votre appel échoue, il est probable que votre paramètre est trop petit. Votre limite de mémoire PHP doit être d\'environ 128 Mo.';
$_['text_sync_server_size']      = 'Actuellement, votre serveur peut accepter:';
$_['text_sync_memory_size']      = 'Votre limite de mémoire PHP:';
$_['text_import_confirm']		 = 'Cela va importer tous vos articles eBay comme de nouveaux produits, êtes-vous sûr? Cela NE PEUT PAS être annulé! Assurez-vous d\'avoir une sauvegarde d\'abord!';
$_['text_import_notify']		 = 'Votre demande d\'importation a été envoyée pour traitement. Une importation prend environ 1 heure par 1000 articles.';
$_['text_import_images_msg1']    = 'les images sont en attente d\'importation /copie depuis eBay. Rafraîchir cette page, si le nombre ne diminue pas alors';
$_['text_import_images_msg2']    = 'cliquez ici';
$_['text_import_images_msg3']    = 'et attendre. Plus d\'informations sur pourquoi cela est arrivé peut être trouvé <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> ici </a>';

// Entry
$_['entry_import_item_advanced'] = 'Obtenez des données avancées';
$_['entry_import_categories']    = 'Catégories d\'importation';
$_['entry_import_description']	 = 'Importer des descriptions d\'articles';
$_['entry_import']				 = 'Importer des objets eBay';

// Buttons
$_['button_import']				 = 'Importer';
$_['button_complete']			 = 'Achevée';

// Help
$_['help_import_item_advanced']  = 'Cela prendra jusqu\'à 10 fois plus de temps pour importer des articles. Importe les poids, tailles, ISBN et plus si disponible';
$_['help_import_categories']     = 'Construit une structure de catégorie dans votre boutique à partir des catégories eBay';
$_['help_import_description']    = 'Cela importera tout, y compris le HTML, les compteurs de visite, etc.';

// Error
$_['error_import']               = 'Échec du chargement';
$_['error_maintenance']			 = 'Votre magasin est en mode maintenance. L\'importation échouera!';
$_['error_ajax_load']			 = 'échec de connexion au serveur';
$_['error_validation']			 = 'Vous devez vous inscrire à votre jeton d\'API et activer le module.';