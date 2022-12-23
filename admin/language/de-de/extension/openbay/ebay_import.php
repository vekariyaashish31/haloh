<?php
// Heading
$_['heading_title']              = 'Artikel importieren';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'Ebay';

// Text
$_['text_sync_import_line1']     = '<strong> Caution! </strong> Dadurch werden alle Ihre eBay-Produkte importiert und eine Kategoriestruktur in Ihrem Geschäft erstellt. Es wird empfohlen, dass Sie alle Kategorien und Produkte löschen, bevor Sie diese Option ausführen. <br /> Die Kategoriestruktur stammt aus den normalen eBay-Kategorien, nicht aus Ihren Shop-Kategorien (wenn Sie einen eBay-Shop haben). Sie können die importierten Kategorien umbenennen, entfernen und bearbeiten, ohne Ihre eBay-Produkte zu beeinträchtigen.';
$_['text_sync_import_line3']     = 'Sie müssen sicherstellen, dass Ihr Server große POST-Datengrößen akzeptiert und verarbeitet. 1000 eBay-Artikel sind etwa 40 MB groß, Sie müssen berechnen, was Sie benötigen. Wenn Ihr Anruf fehlschlägt, ist Ihre Einstellung wahrscheinlich zu klein. Ihr PHP-Speicherlimit muss ungefähr 128 MB betragen.';
$_['text_sync_server_size']      = 'Derzeit kann Ihr Server Folgendes akzeptieren:';
$_['text_sync_memory_size']      = 'Dein PHP-Speicherlimit:';
$_['text_import_confirm']		 = 'Dies wird alle Ihre eBay-Artikel als neue Produkte importieren, sind Sie sicher? Dies kann nicht rückgängig gemacht! Stellen Sie sicher, Sie haben eine erste Sicherung!';
$_['text_import_notify']		 = 'Ihre Importanfrage wurde zur Verarbeitung gesendet. Ein Import dauert ungefähr 1 Stunde pro 1000 Artikel.';
$_['text_import_images_msg1']    = 'Bilder stehen aus Import /Kopie von eBay. Aktualisieren Sie diese Seite, wenn die Anzahl dann nicht abnimmt';
$_['text_import_images_msg2']    = 'Klick hier';
$_['text_import_images_msg3']    = 'und warte. Weitere Informationen darüber, warum dies passiert ist, finden Sie <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> hier </a>';

// Entry
$_['entry_import_item_advanced'] = 'Holen Sie sich erweiterte Daten';
$_['entry_import_categories']    = 'Kategorien importieren';
$_['entry_import_description']	 = 'Artikelbeschreibungen importieren';
$_['entry_import']				 = 'EBay-Artikel importieren';

// Buttons
$_['button_import']				 = 'Einführen';
$_['button_complete']			 = 'Komplett';

// Help
$_['help_import_item_advanced']  = 'Es dauert bis zu 10 mal länger, um Gegenstände zu importieren. Importiert Gewichte, Größen, ISBN und mehr, falls verfügbar';
$_['help_import_categories']     = 'Erstellt eine Kategoriestruktur in Ihrem Geschäft aus den eBay-Kategorien';
$_['help_import_description']    = 'Dies wird alles importieren einschließlich HTML, Besuch Zähler etc';

// Error
$_['error_import']               = 'Laden fehlgeschlagen';
$_['error_maintenance']			 = 'Ihr Geschäft befindet sich im Wartungsmodus. Der Import wird fehlschlagen!';
$_['error_ajax_load']			 = 'Verbindung zum Server fehlgeschlagen';
$_['error_validation']			 = 'Sie müssen sich für Ihr API-Token registrieren und das Modul aktivieren.';