<?php
// Headings
$_['heading_title']        	   = 'Configuraciones';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'El cumplimiento por parte de Amazon';

// Text
$_['text_success']     		   = 'Su configuración ha sido guardada';
$_['text_status']         	   = 'Estado';
$_['text_account_ok']  		   = 'Conexión a cumplimiento por Amazon OK';
$_['text_api_ok']       	   = 'Conexión API OK';
$_['text_api_status']          = 'Conexión API';
$_['text_edit']           	   = 'Editar cumplimiento por configuración de Amazon';
$_['text_standard']            = 'Estándar';
$_['text_expedited']           = 'Acelerado';
$_['text_priority']            = 'Prioridad';
$_['text_fillorkill']          = 'Completar o matar';
$_['text_fillall']             = 'Completar todo';
$_['text_fillallavailable']    = 'Completar todo disponible';
$_['text_prefix_warning']      = 'No cambie esta configuración después de que se hayan enviado pedidos a Amazon, solo configúrelo cuando lo instale por primera vez.';
$_['text_disabled_cancel']     = 'Deshabilitado: no cancelar automáticamente los cumplimientos';
$_['text_validate_success']    = 'Los detalles de su API funcionan correctamente! Debe presionar guardar para asegurarse de que se guardan las configuraciones.';
$_['text_register_banner']     = 'Haga clic aquí si necesita registrarse para una cuenta';

// Entry
$_['entry_api_key']            = 'Token de API';
$_['entry_encryption_key']     = 'Clave de cifrado 1';
$_['entry_encryption_iv']      = 'Clave de cifrado 2';
$_['entry_account_id']         = 'ID de la cuenta';
$_['entry_send_orders']        = 'Enviar pedidos automáticamente';
$_['entry_fulfill_policy']     = 'Política de cumplimiento';
$_['entry_shipping_speed']     = 'Velocidad de envío predeterminada';
$_['entry_debug_log']          = 'Habilitar el registro de depuración';
$_['entry_new_order_status']   = 'Nuevo gatillo de cumplimiento';
$_['entry_order_id_prefix']    = 'Prefijo de ID de pedido';
$_['entry_only_fill_complete'] = 'Todos los artículos deben ser FBA';

// Help
$_['help_api_key']             = 'Este es su token API, obtenga esto desde su área de cuenta OpenBay Pro';
$_['help_encryption_key']      = 'Esta es su clave de cifrado #1, obtenga esto desde su área de cuenta OpenBay Pro';
$_['help_encryption_iv']       = 'Esta es su clave de cifrado #2, obtenga esto desde su área de cuenta de OpenBay Pro';
$_['help_account_id']          = 'Esta es la identificación de la cuenta que coincide con la cuenta registrada de Amazon para OpenBay Pro, obtenga esto desde su área de cuenta OpenBay Pro';
$_['help_send_orders']  	   = 'Los pedidos que concuerden con el cumplimiento de los productos de Amazon se enviarán a Amazon automáticamente';
$_['help_fulfill_policy']  	   = 'La política de cumplimiento predeterminada (FillAll: se envían todos los artículos que se pueden completar en la orden de despacho. La orden de despacho de aduana permanece en estado de procesamiento hasta que Amazon envíe todos los artículos o el vendedor los cancele. FillAllAvailable: se envían todos los artículos que cumplen con el pedido de despacho Todos los artículos no cumplibles en el pedido son cancelados por Amazon.FillOrKill: si se determina que un artículo en un pedido de cumplimiento no se puede llenar antes de que cualquier envío del pedido pase al estado Pendiente (el proceso de recolección de unidades del inventario haya comenzado), entonces no se puede completar el pedido completo. Sin embargo, si se determina que un artículo en un pedido de cumplimiento no se puede llenar después de que un envío en el pedido pasa al estado Pendiente, Amazon cancela la mayor cantidad posible del pedido de cumplimiento).';
$_['help_shipping_speed']  	   = 'Esta es la categoría de velocidad de envío predeterminada para aplicar a pedidos nuevos, los diferentes niveles de servicio pueden incurrir en costos diferentes';
$_['help_debug_log']  		   = 'Los registros de depuración registrarán información en un archivo de registro sobre las acciones que realiza el módulo. Esto debe dejarse habilitado para ayudar a encontrar la causa de cualquier problema.';
$_['help_new_order_status']    = 'Este es el estado de la orden que activará la orden que se creará para el cumplimiento. Asegúrese de que esto esté usando un estado solo después de haber recibido el pago.';
$_['help_order_id_prefix']     = 'Tener un prefijo de pedido ayudará a identificar los pedidos que provienen de su tienda y no de otras integraciones. Esto es muy útil cuando los comerciantes venden en muchos mercados y usan FBA';
$_['help_only_fill_complete']  = 'Esto solo permitirá que los pedidos se envíen para su cumplimiento si TODOS los artículos en el pedido coinciden con un artículo de Fulfillment by Amazon. Si no hay ningún artículo, el pedido completo permanecerá sin llenar.';

// Error
$_['error_api_connect']        = 'Error al conectarse a la API';
$_['error_account_info']       = 'No se puede verificar la conexión de API a Fulfillment por Amazon';
$_['error_api_key']    		   = 'El token de API no es válido';
$_['error_api_account_id']     = 'El ID de cuenta no es válido';
$_['error_encryption_key']     = 'La clave de cifrado #1 no es válida';
$_['error_encryption_iv']      = 'La clave de cifrado #2 no es válida';
$_['error_validation']    	   = 'Hubo un error al validar sus detalles';

// Tabs
$_['tab_api_info']             = 'Detalles de la API';

// Buttons
$_['button_verify']            = 'Verificar detalles';
