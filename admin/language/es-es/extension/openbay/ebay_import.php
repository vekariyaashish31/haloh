<?php
// Heading
$_['heading_title']              = 'Importación de artículos';
$_['text_openbay']               = 'OpenBay Pro';
$_['text_ebay']                  = 'eBay';

// Text
$_['text_sync_import_line1']     = '<strong> Caution! </strong> Esto importará todos sus productos de eBay y creará una estructura de categoría en su tienda. Se recomienda eliminar todas las categorías y productos antes de ejecutar esta opción. <br /> La estructura de la categoría pertenece a las categorías normales de eBay, no a las categorías de su tienda (si tiene una tienda de eBay). Puede cambiar el nombre, eliminar y editar las categorías importadas sin afectar sus productos de eBay.';
$_['text_sync_import_line3']     = 'Debe asegurarse de que su servidor pueda aceptar y procesar grandes tamaños de datos POST. 1000 artículos de eBay tienen unos 40Mb de tamaño, necesitará calcular lo que necesita. Si su llamada falla, es probable que su configuración sea demasiado pequeña. Su límite de memoria PHP necesita ser de aproximadamente 128Mb.';
$_['text_sync_server_size']      = 'Actualmente su servidor puede aceptar:';
$_['text_sync_memory_size']      = 'Su límite de memoria PHP:';
$_['text_import_confirm']		 = 'Esto importará todos sus artículos de eBay como productos nuevos, ¿está seguro? ? Esto NO PUEDE deshacerse! ASEGÚRESE de tener una copia de seguridad first!';
$_['text_import_notify']		 = 'Su solicitud de importación ha sido enviada para su procesamiento. Una importación tarda aproximadamente 1 hora por cada 1000 artículos.';
$_['text_import_images_msg1']    = 'las imágenes están pendientes de importación /copia de eBay. Actualiza esta página, si el número no disminuye, entonces';
$_['text_import_images_msg2']    = 'haga clic aquí';
$_['text_import_images_msg3']    = 'y espera. Puede encontrar más información sobre por qué sucedió esto <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank"> aquí </a>';

// Entry
$_['entry_import_item_advanced'] = 'Obtener datos avanzados';
$_['entry_import_categories']    = 'Categorías de importación';
$_['entry_import_description']	 = 'Importar descripciones de elementos';
$_['entry_import']				 = 'Importar artículos de eBay';

// Buttons
$_['button_import']				 = 'Importar';
$_['button_complete']			 = 'Completar';

// Help
$_['help_import_item_advanced']  = 'Tomará hasta 10 veces más tiempo para importar artículos. Importa pesos, tamaños, ISBN y más si está disponible';
$_['help_import_categories']     = 'Crea una estructura de categoría en tu tienda desde las categorías de eBay';
$_['help_import_description']    = 'Esto importará todo, incluyendo HTML, contadores de visitas, etc.';

// Error
$_['error_import']               = 'Falló al cargar';
$_['error_maintenance']			 = 'Tu tienda está en modo de mantenimiento. La importación fracasará!';
$_['error_ajax_load']			 = 'Error al conectar con el servidor';
$_['error_validation']			 = 'Necesita registrarse para su token API y habilitar el módulo.';