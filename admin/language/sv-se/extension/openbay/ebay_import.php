<?php
// Heading
$_['heading_title']              = 'Import av varor';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'eBay';

// Text
$_['text_sync_import_line1']     = '<strong> Caution! </strong> Detta kommer att importera alla dina eBay-produkter och bygga en kategoristruktur i din butik. Det rekommenderas att du tar bort alla kategorier och produkter innan du kör det här alternativet. <br /> Kategorionsstrukturen är från de vanliga eBay-kategorierna, inte dina butikskategorier (om du har en eBay-butik). Du kan byta namn på, ta bort och redigera de importerade kategorierna utan att påverka dina eBay-produkter.';
$_['text_sync_import_line3']     = 'Du måste se till att din server kan acceptera och bearbeta stora POST-datastorlekar. 1000 eBay-objekt är ungefär 40 MB i storlek, du måste beräkna vad du behöver. Om ditt samtal misslyckas är det troligt att din inställning är för liten. Din PHP-minnesgräns måste vara cirka 128 MB.';
$_['text_sync_server_size']      = 'För närvarande kan din server acceptera:';
$_['text_sync_memory_size']      = 'Din PHP-minnesgräns:';
$_['text_import_confirm']		 = 'Detta kommer att importera alla dina eBay-objekt som nya produkter, är du säker? Det här kan inte vara undone! SÄKER att du har en backup first!';
$_['text_import_notify']		 = 'Din importförfrågan har skickats för bearbetning. En import tar ungefär 1 timme per 1000 objekt.';
$_['text_import_images_msg1']    = 'Bilder väntar på import /kopia från eBay. Uppdatera den här sidan om numret inte minskar då';
$_['text_import_images_msg2']    = 'Klicka här';
$_['text_import_images_msg3']    = 'och vänta. Mer information om varför detta hände kan hittas <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> här </a>';

// Entry
$_['entry_import_item_advanced'] = 'Hämta avancerad data';
$_['entry_import_categories']    = 'Importkategorier';
$_['entry_import_description']	 = 'Importera produktbeskrivningar';
$_['entry_import']				 = 'Importera eBay-objekt';

// Buttons
$_['button_import']				 = 'Importera';
$_['button_complete']			 = 'Komplett';

// Help
$_['help_import_item_advanced']  = 'Tar upp till 10 gånger längre för att importera varor. Importerar vikter, storlekar, ISBN och mer om tillgängligt';
$_['help_import_categories']     = 'Bygger en kategoristruktur i din butik från eBay-kategorierna';
$_['help_import_description']    = 'Detta kommer att importera allt inklusive HTML, visit counter osv';

// Error
$_['error_import']               = 'Misslyckades att ladda';
$_['error_maintenance']			 = 'Din butik är i underhållsläge. Importera kommer fail!';
$_['error_ajax_load']			 = 'Misslyckades med att ansluta till servern';
$_['error_validation']			 = 'Du måste registrera dig för din API-token och aktivera modulen.';