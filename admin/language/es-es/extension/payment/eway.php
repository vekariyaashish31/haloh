<?php
// Heading
$_['heading_title']				= 'Pago eWAY';

// Text
$_['text_extension']			= 'Extensiones';
$_['text_success']				= 'Éxito: ha modificado sus detalles de eWAY!';
$_['text_edit']					= 'Editar eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Autorización';
$_['text_sale']					= 'Venta';
$_['text_transparent']			= 'Redirección transparente (forma de pago en el sitio)';
$_['text_iframe']				= 'IFrame (formulario de pago en la ventana)';

// Entry
$_['entry_paymode']				= 'Modo de pago';
$_['entry_test']				= 'Modo de prueba';
$_['entry_order_status']		= 'Estado del pedido';
$_['entry_order_status_refund'] = 'Estado del pedido reembolsado';
$_['entry_order_status_auth']	= 'Estado de orden autorizado';
$_['entry_order_status_fraud']	= 'Sospecha de estado de orden de fraude';
$_['entry_status']				= 'Estado';
$_['entry_username']			= 'Clave de la API eWAY';
$_['entry_password']			= 'eWAY contraseña';
$_['entry_payment_type']		= 'Tipo de pago';
$_['entry_geo_zone']			= 'Geo Zone';
$_['entry_sort_order']			= 'Orden de clasificación';
$_['entry_transaction_method']	= 'Método de transacción';

// Error
$_['error_permission']			= 'Advertencia: no tiene permiso para modificar el módulo de pago eWAY';
$_['error_username']			= 'Se requiere la clave de la API eWAY!';
$_['error_password']			= 'Se requiere contraseña de eWAY!';
$_['error_payment_type']		= 'Se requiere al menos un tipo de pago!';

// Help hints
$_['help_testmode']				= 'Establézcalo en Sí para usar eWAY Sandbox.';
$_['help_username']				= 'Su clave API eWAY desde su cuenta MYeWAY.';
$_['help_password']				= 'Su contraseña de la API eWAY de su cuenta MYeWAY.';
$_['help_transaction_method']	= 'La autorización solo está disponible para los bancos australianos';

// Order page - payment tab
$_['text_payment_info']			= 'Información del pago';
$_['text_order_total']			= 'Total autorizado';
$_['text_transactions']			= 'Actas';
$_['text_column_transactionid'] = 'eWAY ID de transacción';
$_['text_column_amount']		= 'Cantidad';
$_['text_column_type']			= 'Tipo';
$_['text_column_created']		= 'Creado';
$_['text_total_captured']		= 'Total capturado';
$_['text_capture_status']		= 'Pago capturado';
$_['text_void_status']			= 'Pago anulado';
$_['text_refund_status']		= 'Pago reembolsado';
$_['text_total_refunded']		= 'Total reembolsado';
$_['text_refund_success']		= 'La devolución fue exitosa!';
$_['text_capture_success']		= 'Capture succeeded!';
$_['text_refund_failed']		= 'Reembolso fallido';
$_['text_capture_failed']		= 'Captura fallida';
$_['text_unknown_failure']		= 'Orden o cantidad inválida';

$_['text_confirm_capture']		= '¿Seguro que quieres capturar el pago??';
$_['text_confirm_release']		= '¿Seguro que quieres liberar el pago??';
$_['text_confirm_refund']		= '¿Seguro que quieres reembolsar el pago??';

$_['text_empty_refund']			= 'Ingrese un monto para reembolsar';
$_['text_empty_capture']		= 'Por favor ingrese un monto para capturar';

$_['btn_refund']				= 'Reembolso';
$_['btn_capture']				= 'Capturar';

// Validation Error codes
$_['text_card_message_V6000']	= 'Error de validación indefinido';
$_['text_card_message_V6001'] 	= 'IP de cliente inválido';
$_['text_card_message_V6002'] 	= 'ID de dispositivo inválido';
$_['text_card_message_V6011'] 	= 'Monto invalido';
$_['text_card_message_V6012'] 	= 'Descripción de la factura no válida';
$_['text_card_message_V6013'] 	= 'Número de factura no válido';
$_['text_card_message_V6014'] 	= 'Referencia de factura inválida';
$_['text_card_message_V6015'] 	= 'Código de moneda inválido';
$_['text_card_message_V6016'] 	= 'pago requerido';
$_['text_card_message_V6017'] 	= 'Pago Código de moneda requerido';
$_['text_card_message_V6018'] 	= 'Código de moneda de pago desconocido';
$_['text_card_message_V6021'] 	= 'Nombre del titular de la tarjeta requerido';
$_['text_card_message_V6022'] 	= 'Número de tarjeta requerido';
$_['text_card_message_V6023'] 	= 'CVN requerido';
$_['text_card_message_V6031'] 	= 'Numero de tarjeta invalido';
$_['text_card_message_V6032'] 	= 'CVN inválido';
$_['text_card_message_V6033'] 	= 'Fecha de vencimiento inválida';
$_['text_card_message_V6034'] 	= 'Número de emisión inválido';
$_['text_card_message_V6035'] 	= 'Fecha de inicio inválida';
$_['text_card_message_V6036'] 	= 'Mes inválido';
$_['text_card_message_V6037'] 	= 'Año no válido';
$_['text_card_message_V6040'] 	= 'ID de cliente de token no válido';
$_['text_card_message_V6041'] 	= 'Cliente requerido';
$_['text_card_message_V6042'] 	= 'Nombre del cliente requerido';
$_['text_card_message_V6043'] 	= 'Nombre del cliente requerido';
$_['text_card_message_V6044'] 	= 'Código de país del cliente requerido';
$_['text_card_message_V6045'] 	= 'Título del cliente requerido';
$_['text_card_message_V6046'] 	= 'ID de cliente del token requerido';
$_['text_card_message_V6047'] 	= 'RedirectURL Requerido';
$_['text_card_message_V6051'] 	= 'Nombre inválido';
$_['text_card_message_V6052'] 	= 'Apellido invalido';
$_['text_card_message_V6053'] 	= 'Código de país inválido';
$_['text_card_message_V6054'] 	= 'Email inválido';
$_['text_card_message_V6055'] 	= 'Teléfono inválido';
$_['text_card_message_V6056'] 	= 'Móvil no válido';
$_['text_card_message_V6057'] 	= 'Fax no válido';
$_['text_card_message_V6058'] 	= 'Título inválido';
$_['text_card_message_V6059'] 	= 'Redirigir URL no válida';
$_['text_card_message_V6060'] 	= 'Redirigir URL no válida';
$_['text_card_message_V6061'] 	= 'Referencia no válida';
$_['text_card_message_V6062'] 	= 'Nombre de compañía inválido';
$_['text_card_message_V6063'] 	= 'Descripción inválida del trabajo';
$_['text_card_message_V6064'] 	= 'Calle no válida1';
$_['text_card_message_V6065'] 	= 'Calle2 no válida';
$_['text_card_message_V6066'] 	= 'Ciudad inválida';
$_['text_card_message_V6067'] 	= 'Estado Inválido';
$_['text_card_message_V6068'] 	= 'Código postal inválido';
$_['text_card_message_V6069'] 	= 'Email inválido';
$_['text_card_message_V6070'] 	= 'Teléfono inválido';
$_['text_card_message_V6071'] 	= 'Móvil no válido';
$_['text_card_message_V6072'] 	= 'Comentarios inválidos';
$_['text_card_message_V6073'] 	= 'Fax no válido';
$_['text_card_message_V6074'] 	= 'URL invalida';
$_['text_card_message_V6075'] 	= 'Nombre de dirección de envío no válido';
$_['text_card_message_V6076'] 	= 'Nombre de la dirección de envío no válida';
$_['text_card_message_V6077'] 	= 'Dirección de envío inválida Street1';
$_['text_card_message_V6078'] 	= 'Dirección de envío inválida Street2';
$_['text_card_message_V6079'] 	= 'Dirección de envío no válida Ciudad';
$_['text_card_message_V6080'] 	= 'Estado de dirección de envío no válido';
$_['text_card_message_V6081'] 	= 'Dirección postal no válida PostalCódigo';
$_['text_card_message_V6082'] 	= 'Correo electrónico de dirección de envío no válido';
$_['text_card_message_V6083'] 	= 'Dirección de envío no válida Teléfono';
$_['text_card_message_V6084'] 	= 'Dirección de envío no válida País';
$_['text_card_message_V6091'] 	= 'Código de país desconocido';
$_['text_card_message_V6100'] 	= 'Nombre de tarjeta inválido';
$_['text_card_message_V6101'] 	= 'Mes de caducidad de la tarjeta no válida';
$_['text_card_message_V6102'] 	= 'Tarjeta inválida Año de vencimiento';
$_['text_card_message_V6103'] 	= 'Mes de inicio de tarjeta no válido';
$_['text_card_message_V6104'] 	= 'Año de inicio de tarjeta inválido';
$_['text_card_message_V6105'] 	= 'Número de emisión de tarjeta inválida';
$_['text_card_message_V6106'] 	= 'Tarjeta inválida CVN';
$_['text_card_message_V6107'] 	= 'Código de acceso inválido';
$_['text_card_message_V6108'] 	= 'CustomerHostAddress no válido';
$_['text_card_message_V6109'] 	= 'Invitado no válido';
$_['text_card_message_V6110'] 	= 'Numero de tarjeta invalido';
$_['text_card_message_V6111'] 	= 'Acceso no autorizado a la API, cuenta no certificada por PCI';
$_['text_card_message_V6112'] 	= 'Detalles de la tarjeta redundante que no sean el año y el mes de vencimiento';
$_['text_card_message_V6113'] 	= 'Transacción inválida para reembolso';
$_['text_card_message_V6114'] 	= 'Error de validación de puerta de enlace';
$_['text_card_message_V6115'] 	= 'Solicitud de DirectRefund inválida, ID de transacción';
$_['text_card_message_V6116'] 	= 'Datos de tarjeta no válidos en el ID de transacción original';
$_['text_card_message_V6124'] 	= 'Líneas de pedido no válidas. Las líneas de pedido se han proporcionado, sin embargo, los totales no coinciden con el campo TotalAmount';
$_['text_card_message_V6125'] 	= 'Tipo de pago seleccionado no habilitado';
$_['text_card_message_V6126'] 	= 'Número de tarjeta encriptada no válida, desencriptación fallida';
$_['text_card_message_V6127'] 	= 'Cvn cifrado no válido, error de descifrado';
$_['text_card_message_V6128'] 	= 'Método no válido para el tipo de pago';
$_['text_card_message_V6129'] 	= 'La transacción no ha sido autorizada para captura /cancelación';
$_['text_card_message_V6130'] 	= 'Error genérico de información del cliente';
$_['text_card_message_V6131'] 	= 'Error genérico de información de envío';
$_['text_card_message_V6132'] 	= 'La transacción ya ha sido completada o anulada, operación no permitida';
$_['text_card_message_V6133'] 	= 'Pago no disponible para tipo de pago';
$_['text_card_message_V6134'] 	= 'Id. De transacción de autenticación no válida para Capture /Void';
$_['text_card_message_V6135'] 	= 'Error de PayPal Procesamiento de reembolso';
$_['text_card_message_V6140'] 	= 'La cuenta del comerciante está suspendida';
$_['text_card_message_V6141'] 	= 'Detalles de la cuenta de PayPal no válidos o firma de la API';
$_['text_card_message_V6142'] 	= 'Autorizar no disponible para Banco /Sucursal';
$_['text_card_message_V6150'] 	= 'Cantidad de reembolso inválida';
$_['text_card_message_V6151'] 	= 'Cantidad de reembolso mayor que la transacción original';
$_['text_card_message_D4406'] 	= 'Error desconocido';
$_['text_card_message_S5010'] 	= 'Error desconocido';