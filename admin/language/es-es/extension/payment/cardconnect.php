<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Configuraciones';
$_['tab_order_status']              = 'Estado del pedido';

// Text
$_['text_extension']                = 'Extensiones';
$_['text_success']                  = 'Éxito: ha modificado el módulo de pago CardConnect!';
$_['text_edit']                     = 'Editar CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Pago';
$_['text_authorize']                = 'Autorizar';
$_['text_live']                     = 'Vivir';
$_['text_test']                     = 'Prueba';
$_['text_no_cron_time']             = 'El cron aún no se ha ejecutado';
$_['text_payment_info']             = 'Información del pago';
$_['text_payment_method']           = 'Método de pago';
$_['text_card']                     = 'Tarjeta';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Referencia';
$_['text_update']                   = 'Actualizar';
$_['text_order_total']              = 'Total del pedido';
$_['text_total_captured']           = 'Total capturado';
$_['text_capture_payment']          = 'Capturar pago';
$_['text_refund_payment']           = 'Reembolso';
$_['text_void']                     = 'Vacío';
$_['text_transactions']             = 'Actas';
$_['text_column_type']              = 'Tipo';
$_['text_column_reference']         = 'Referencia';
$_['text_column_amount']            = 'Cantidad';
$_['text_column_status']            = 'Estado';
$_['text_column_date_modified']     = 'Fecha modificada';
$_['text_column_date_added']        = 'Fecha Agregada';
$_['text_column_update']            = 'Actualizar';
$_['text_column_void']              = 'Vacío';
$_['text_confirm_capture']          = '¿Seguro que quieres capturar el pago??';
$_['text_confirm_refund']           = '¿Seguro que quieres reembolsar el pago??';
$_['text_inquire_success']          = 'Inquire fue exitoso';
$_['text_capture_success']          = 'La solicitud de captura fue exitosa';
$_['text_refund_success']           = 'La solicitud de reembolso fue exitosa';
$_['text_void_success']             = 'La solicitud de nulidad fue exitosa';

// Entry
$_['entry_merchant_id']             = 'Identificación del comerciante';
$_['entry_api_username']            = 'Nombre de usuario API';
$_['entry_api_password']            = 'Contraseña API';
$_['entry_token']                   = 'Token Secreto';
$_['entry_transaction']             = 'Transacción';
$_['entry_environment']             = 'Ambiente';
$_['entry_site']                    = 'Sitio';
$_['entry_store_cards']             = 'Tarjetas de Tienda';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Total';
$_['entry_geo_zone']                = 'Geo Zone';
$_['entry_status']                  = 'Estado';
$_['entry_logging']                 = 'Registro de depuración';
$_['entry_sort_order']              = 'Orden de clasificación';
$_['entry_cron_url']                = 'Cron Job URL';
$_['entry_cron_time']               = 'Cron Job Last Run';
$_['entry_order_status_pending']    = 'Pendiente';
$_['entry_order_status_processing'] = 'Tratamiento';

// Help
$_['help_merchant_id']              = 'Su ID de comerciante de cuenta CardConnect personal.';
$_['help_api_username']             = 'Su nombre de usuario para acceder a la API CardConnect.';
$_['help_api_password']             = 'Su contraseña para acceder a la API CardConnect.';
$_['help_token']                    = 'Ingrese un token aleatorio para seguridad o use el generado.';
$_['help_transaction']              = 'Elija \'Pago \' para capturar el pago de inmediato o \'Autorizar \' para tener que aprobarlo.';
$_['help_site']                     = 'Esto determina la primera parte de la URL de la API. Cambie solo si se lo indica.';
$_['help_store_cards']              = 'Si desea almacenar tarjetas usando tokenización.';
$_['help_echeck']                   = 'Si desea ofrecer la posibilidad de pagar con eCheck.';
$_['help_total']                    = 'El total del pedido debe alcanzarse antes de que este método de pago se active. Debe ser un valor sin signo de moneda.';
$_['help_logging']                  = 'Al habilitar la depuración, se escribirán los datos confidenciales en un archivo de registro. Siempre debe desactivar a menos que se indique lo contrario.';
$_['help_cron_url']                 = 'Establezca un trabajo cron para llamar a esta URL para que las órdenes se actualicen automáticamente. Está diseñado para ejecutarse unas horas después de la última captura de un día hábil.';
$_['help_cron_time']                = 'Esta es la última vez que se ejecutó la URL del trabajo cron.';
$_['help_order_status_pending']     = 'El estado del pedido cuando el pedido debe ser autorizado por el comerciante.';
$_['help_order_status_processing']  = 'El estado del pedido cuando el pedido se captura automáticamente.';

// Button
$_['button_inquire_all']            = 'Consultar todo';
$_['button_capture']                = 'Capturar';
$_['button_refund']                 = 'Reembolso';
$_['button_void_all']               = 'Void All';
$_['button_inquire']                = 'Preguntar';
$_['button_void']                   = 'Vacío';

// Error
$_['error_permission']              = 'Advertencia: no tiene permiso para modificar el pago CardConnect!';
$_['error_merchant_id']             = 'Identificación de comerciante requerida!';
$_['error_api_username']            = 'Nombre de usuario de API obligatorio!';
$_['error_api_password']            = 'API Requiere contraseña!';
$_['error_token']                   = 'Token secreto requerido!';
$_['error_site']                    = 'Sitio requerido!';
$_['error_amount_zero']             = 'La cantidad debe ser mayor que cero!';
$_['error_no_order']                = 'No hay información de pedido coincidente!';
$_['error_invalid_response']        = 'Respuesta no válida recibida!';
$_['error_data_missing']            = 'Faltan datos!';
$_['error_not_enabled']             = 'Módulo no habilitado!';