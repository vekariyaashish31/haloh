<?php
// Heading
$_['heading_title']					 = 'Redirección Globalpay';

// Text
$_['text_extension']				  	 = 'Extensiones';
$_['text_success']					 = 'Éxito: ha modificado los detalles de la cuenta Globalpay!';
$_['text_edit']                      = 'Editar redirección de Global Pay';
$_['text_live']						 = 'Vivir';
$_['text_demo']						 = 'Manifestación';
$_['text_card_type']				 = 'Tipo de tarjeta';
$_['text_enabled']					 = 'Habilitado';
$_['text_use_default']				 = 'Uso por defecto';
$_['text_merchant_id']				 = 'Identificación del comerciante';
$_['text_subaccount']				 = 'Sub-cuenta';
$_['text_secret']					 = 'Secreto compartido';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'Tarjeta MasterCard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch /Maestro';
$_['text_card_laser']				 = 'Láser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'La captura fue exitosa';
$_['text_capture_ok_order']			 = 'La captura fue exitosa, el estado de la orden se actualizó y se estableció con éxito.';
$_['text_rebate_ok']				 = 'El reembolso fue exitoso';
$_['text_rebate_ok_order']			 = 'La devolución fue exitosa, el estado de la orden se actualizó y se rebajó';
$_['text_void_ok']					 = 'El nulo fue exitoso, el estado del pedido actualizado a anulado';
$_['text_settle_auto']				 = 'Auto';
$_['text_settle_delayed']			 = 'Retrasado';
$_['text_settle_multi']				 = 'Multi';
$_['text_url_message']				 = 'Debe proporcionar la URL de la tienda a su gerente de cuenta de Globalpay antes de publicarla';
$_['text_payment_info']				 = 'Información del pago';
$_['text_capture_status']			 = 'Pago capturado';
$_['text_void_status']				 = 'Pago anulado';
$_['text_rebate_status']			 = 'Pago reembolsado';
$_['text_order_ref']				 = 'Orden ref';
$_['text_order_total']				 = 'Total autorizado';
$_['text_total_captured']			 = 'Total capturado';
$_['text_transactions']				 = 'Actas';
$_['text_column_amount']			 = 'Cantidad';
$_['text_column_type']				 = 'Tipo';
$_['text_column_date_added']		 = 'Creado';
$_['text_confirm_void']				 = '¿Estás seguro de que deseas anular el pago??';
$_['text_confirm_capture']			 = '¿Seguro que quieres capturar el pago??';
$_['text_confirm_rebate']			 = '¿Estás seguro de que deseas reembolsar el pago??';
$_['text_globalpay']                 = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				 = 'Identificación del comerciante';
$_['entry_secret']					 = 'Secreto compartido';
$_['entry_rebate_password']			 = 'Reembolso de contraseña';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Orden de clasificación';
$_['entry_geo_zone']				 = 'Geo zona';
$_['entry_status']					 = 'Estado';
$_['entry_debug']					 = 'Registro de depuración';
$_['entry_live_demo']				 = 'Demo en vivo';
$_['entry_auto_settle']				 = 'Tipo de asentamiento';
$_['entry_card_select']				 = 'Seleccione la tarjeta';
$_['entry_tss_check']				 = 'TSS chequeos';
$_['entry_live_url']				 = 'URL de conexión en vivo';
$_['entry_demo_url']				 = 'URL de conexión de demostración';
$_['entry_status_success_settled']	 = 'Éxito - arreglado';
$_['entry_status_success_unsettled'] = 'Éxito - no resuelto';
$_['entry_status_decline']			 = 'Disminución';
$_['entry_status_decline_pending']	 = 'Rechazar - fuera de línea';
$_['entry_status_decline_stolen']	 = 'Rechazar - tarjeta perdida o robada';
$_['entry_status_decline_bank']		 = 'Disminución - error bancario';
$_['entry_status_void']				 = 'Anulado';
$_['entry_status_rebate']			 = 'Rebajado';
$_['entry_notification_url']		 = 'URL de notificación';

// Help
$_['help_total']					 = 'El total del pedido debe alcanzarse antes de que este método de pago se active';
$_['help_card_select']				 = 'Pídale al usuario que elija su tipo de tarjeta antes de que sean redirigidos';
$_['help_notification']				 = 'Debe proporcionar esta URL a Globalpay para recibir notificaciones de pago';
$_['help_debug']					 = 'Al habilitar la depuración, se escribirán los datos confidenciales en un archivo de registro. Siempre debe desactivar a menos que se indique lo contrario';
$_['help_dcc_settle']				 = 'Si su subcuenta está habilitada con DCC, debe usar el Autosettle';

// Tab
$_['tab_api']					     = 'Detalles de la API';
$_['tab_account']		     		 = 'Cuentas';
$_['tab_order_status']				 = 'Estado del pedido';
$_['tab_payment']					 = 'Configuraciones de pago';
$_['tab_advanced']					 = 'Avanzado';

// Button
$_['button_capture']				 = 'Capturar';
$_['button_rebate']					 = 'Reembolso /reembolso';
$_['button_void']					 = 'Vacío';

// Error
$_['error_merchant_id']				 = 'Identificación de comerciante es requerida';
$_['error_secret']					 = 'Se requiere secreto compartido';
$_['error_live_url']				 = 'La URL en vivo es obligatoria';
$_['error_demo_url']				 = 'La URL de demostración es obligatoria';
$_['error_data_missing']			 = 'Datos faltantes';
$_['error_use_select_card']			 = 'Debe tener "Seleccione Card" habilitado para enrutamiento de subcuenta por tipo de tarjeta para que funcione';