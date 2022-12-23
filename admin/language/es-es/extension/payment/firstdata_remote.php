<?php
// Heading
$_['heading_title']					 = 'API del servicio web de First Data EMEA';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Extensiones';
$_['text_success']					 = 'Éxito: ha modificado los detalles de la cuenta de First Data!';
$_['text_edit']                      = 'Editar la primera API del servicio web de EMEA de datos';
$_['text_card_type']				 = 'Tipo de tarjeta';
$_['text_enabled']					 = 'Habilitado';
$_['text_merchant_id']				 = 'ID de tienda';
$_['text_subaccount']				 = 'Sub-cuenta';
$_['text_user_id']					 = 'Identidad de usuario';
$_['text_capture_ok']				 = 'La captura fue exitosa';
$_['text_capture_ok_order']			 = 'La captura fue exitosa, el estado de la orden se actualizó y se estableció con éxito.';
$_['text_refund_ok']				 = 'El reembolso fue exitoso';
$_['text_refund_ok_order']			 = 'El reembolso fue exitoso, el estado del pedido actualizado a reembolsado';
$_['text_void_ok']					 = 'El nulo fue exitoso, el estado del pedido actualizado a anulado';
$_['text_settle_auto']				 = 'Venta';
$_['text_settle_delayed']			 = 'Preauth';
$_['text_mastercard']				 = 'Tarjeta MasterCard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Información del pago';
$_['text_capture_status']			 = 'Pago capturado';
$_['text_void_status']				 = 'Pago anulado';
$_['text_refund_status']			 = 'Pago reembolsado';
$_['text_order_ref']				 = 'Orden ref';
$_['text_order_total']				 = 'Total autorizado';
$_['text_total_captured']			 = 'Total capturado';
$_['text_transactions']				 = 'Actas';
$_['text_column_amount']			 = 'Cantidad';
$_['text_column_type']				 = 'Tipo';
$_['text_column_date_added']		 = 'Creado';
$_['text_confirm_void']				 = '¿Estás seguro de que deseas anular el pago??';
$_['text_confirm_capture']			 = '¿Seguro que quieres capturar el pago??';
$_['text_confirm_refund']			 = '¿Seguro que quieres reembolsar el pago??';

// Entry
$_['entry_certificate_path']		 = 'Ruta del certificado';
$_['entry_certificate_key_path']	 = 'Ruta de clave privada';
$_['entry_certificate_key_pw']		 = 'Contraseña de clave privada';
$_['entry_certificate_ca_path']		 = 'Ruta de CA';
$_['entry_merchant_id']				 = 'ID de tienda';
$_['entry_user_id']					 = 'Identidad de usuario';
$_['entry_password']				 = 'Contraseña';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Orden de clasificación';
$_['entry_geo_zone']				 = 'Geo zona';
$_['entry_status']					 = 'Estado';
$_['entry_debug']					 = 'Registro de depuración';
$_['entry_auto_settle']				 = 'Tipo de asentamiento';
$_['entry_status_success_settled']	 = 'Éxito - arreglado';
$_['entry_status_success_unsettled'] = 'Éxito - no resuelto';
$_['entry_status_decline']			 = 'Disminución';
$_['entry_status_void']				 = 'Anulado';
$_['entry_status_refund']			 = 'Reintegrado';
$_['entry_enable_card_store']		 = 'Habilitar tokens de almacenamiento de tarjeta';
$_['entry_cards_accepted']			 = 'Tipos de tarjeta aceptados';

// Help
$_['help_total']					 = 'El total del pedido debe alcanzarse antes de que este método de pago se active';
$_['help_certificate']				 = 'Los certificados y las claves privadas se deben almacenar fuera de las carpetas web públicas';
$_['help_card_select']				 = 'Pídale al usuario que elija su tipo de tarjeta antes de que sean redirigidos';
$_['help_notification']				 = 'Debe proporcionar esta URL a First Data para recibir notificaciones de pago';
$_['help_debug']					 = 'Al habilitar la depuración, se escribirán los datos confidenciales en un archivo de registro. Siempre debe desactivar a menos que se indique lo contrario.';
$_['help_settle']					 = 'Si usa la preautorización, debe completar una acción de post-autenticación en un plazo de 3 a 5 días, de lo contrario su transacción se cancelará.';

// Tab
$_['tab_account']					 = 'Información API';
$_['tab_order_status']				 = 'Estado del pedido';
$_['tab_payment']					 = 'Configuraciones de pago';

// Button
$_['button_capture']				 = 'Capturar';
$_['button_refund']					 = 'Reembolso';
$_['button_void']					 = 'Vacío';

// Error
$_['error_merchant_id']				 = 'Se requiere ID de tienda';
$_['error_user_id']					 = 'Se requiere identificación de usuario';
$_['error_password']				 = 'se requiere contraseña';
$_['error_certificate']				 = 'Se requiere una ruta de certificado';
$_['error_key']						 = 'Se requiere clave de certificado';
$_['error_key_pw']					 = 'Se requiere contraseña de clave de certificado';
$_['error_ca']						 = 'Se requiere una Autoridad de certificación (CA)';