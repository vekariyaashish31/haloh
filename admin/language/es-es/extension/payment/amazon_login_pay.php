<?php
//Headings
$_['heading_title']                = 'Amazon Pay';

// Text
$_['text_success']                 = 'El módulo Amazon Pay ha sido actualizado';
$_['text_ipn_url']				   = 'Cron Job \'s URL';
$_['text_ipn_token']			   = 'Token Secreto';
$_['text_us']					   = 'americano';
$_['text_de']					   = 'alemán';
$_['text_uk']                      = 'Inglés';
$_['text_fr']                      = 'francés';
$_['text_it']                      = 'italiano';
$_['text_es']                      = 'Español';
$_['text_us_region']			   = 'Estados Unidos';
$_['text_eu_region']               = 'Región euro';
$_['text_uk_region']               = 'Reino Unido';
$_['text_live']                    = 'Vivir';
$_['text_sandbox']                 = 'Salvadera';
$_['text_auth']		           	   = 'Autorización';
$_['text_payment']		           = 'Pago';
$_['text_extension']               = 'Extensiones';
$_['text_account']                 = 'Cuenta';
$_['text_guest']				   = 'Huésped';
$_['text_no_capture']              = '--- Sin captura automática ---';
$_['text_all_geo_zones']           = 'Todas las zonas geográficas';
$_['text_button_settings']         = 'Configuración del botón de pago';
$_['text_colour']                  = 'Color';
$_['text_orange']                  = 'naranja';
$_['text_tan']                     = 'Broncearse';
$_['text_white']                   = 'Blanco';
$_['text_light']                   = 'Ligero';
$_['text_dark']                    = 'Oscuro';
$_['text_size']                    = 'tamaño';
$_['text_medium']                  = 'Medio';
$_['text_large']                   = 'Grande';
$_['text_x_large']                 = 'Extra grande';
$_['text_background']              = 'Fondo';
$_['text_edit']					   = 'Editar Amazon Pay';
$_['text_amazon_login_pay']        = '<a href="https://pay.amazon.com/uk/sp/opencart" target="_blank" title="Regístrate en Amazon Pay"> <img src="view/image/payment/amazonpay.png" alt="Amazon Pay" title="Amazon Pay" style="border: 1px solid #EEEEEE; "/> </a>';
$_['text_amazon_join']             = '<a href="https://pay.amazon.com/uk/sp/opencart" target="_blank" title="Regístrese a Amazon Pay"> <u> Regístrese en Amazon Pay </u> </a>';
$_['text_payment_info']			   = 'Información del pago';
$_['text_capture_ok']			   = 'La captura fue exitosa';
$_['text_capture_ok_order']		   = 'La captura fue exitosa, la autorización ha sido capturada por completo';
$_['text_refund_ok']			   = 'El reembolso fue solicitado con éxito';
$_['text_refund_ok_order']		   = 'El reembolso fue solicitado con éxito, cantidad reembolsada en su totalidad';
$_['text_cancel_ok']			   = 'La cancelación fue exitosa, el estado de la orden se actualizó a cancelado';
$_['text_capture_status']		   = 'Pago capturado';
$_['text_cancel_status']		   = 'Pago cancelado';
$_['text_refund_status']		   = 'Pago reembolsado';
$_['text_order_ref']			   = 'Orden ref';
$_['text_order_total']			   = 'Total autorizado';
$_['text_total_captured']		   = 'Total capturado';
$_['text_transactions']			   = 'Actas';
$_['text_column_authorization_id'] = 'ID de autorización de Amazon';
$_['text_column_capture_id']	   = 'ID de captura de Amazon';
$_['text_column_refund_id']		   = 'ID de reembolso de Amazon';
$_['text_column_amount']		   = 'Cantidad';
$_['text_column_type']			   = 'Tipo';
$_['text_column_status']		   = 'Estado';
$_['text_column_date_added']	   = 'Fecha Agregada';
$_['text_confirm_cancel']		   = '¿Seguro que quieres cancelar el pago??';
$_['text_confirm_capture']		   = '¿Seguro que quieres capturar el pago??';
$_['text_confirm_refund']		   = '¿Seguro que quieres reembolsar el pago??';
$_['text_minimum_total']           = 'Pedido mínimo total';
$_['text_geo_zone']                = 'Geo Zone';
$_['text_status']                  = 'Estado';
$_['text_declined_codes']          = 'Códigos de rechazo de prueba';
$_['text_sort_order']              = 'Orden de clasificación';
$_['text_amazon_invalid']          = 'InvalidPaymentMethod';
$_['text_amazon_rejected']         = 'AmazonRejected';
$_['text_amazon_timeout']          = 'TransactionTimedOut';
$_['text_amazon_no_declined']      = '--- Sin Autorización Denegada Automática ---';
$_['text_amazon_signup']		   = 'Regístrese en Amazon Pay';
$_['text_credentials']			   = 'Por favor, pegue sus claves aquí (en formato JSON)';
$_['text_validate_credentials']	   = 'Validar y usar credenciales';

// Columns
$_['column_status']                = 'Estado';

//entry
$_['entry_merchant_id']            = 'Identificación del comerciante';
$_['entry_access_key']             = 'Llave de acceso';
$_['entry_access_secret']          = 'Llave secreta';
$_['entry_client_id']              = 'Identificación del cliente';
$_['entry_client_secret']          = 'Secreto del cliente';
$_['entry_language']			   = 'Idioma';
$_['entry_login_pay_test']         = 'Modo de prueba';
$_['entry_login_pay_mode']         = 'Modo de pago';
$_['entry_checkout']			   = 'Modo de pago';
$_['entry_payment_region']		   = 'Región de pago';
$_['entry_capture_status']         = 'Estado de captura automática';
$_['entry_pending_status']         = 'Estado de la orden pendiente';
$_['entry_ipn_url']				   = 'IPN \'s URL';
$_['entry_ipn_token']			   = 'Token Secreto';
$_['entry_debug']				   = 'Registro de depuración';

// Help
$_['help_pay_mode']				   = 'El pago solo está disponible para el mercado de EE. UU.';
$_['help_checkout']				   = 'El botón de pago también debe iniciar sesión con el cliente';
$_['help_capture_status']		   = 'Elija el orden que activará la captura automática de un pago autorizado';
$_['help_ipn_url']				   = 'Establezca esto como URL de merhcant en Amazon Seller Central';
$_['help_ipn_token']			   = 'Hacer esto largo y difícil de adivinar';
$_['help_minimum_total']		   = 'Esto debe estar por encima de cero';
$_['help_debug']				   = 'Al habilitar la depuración, se escribirán los datos confidenciales en un archivo de registro. Siempre debe desactivar a menos que se indique lo contrario';
$_['help_declined_codes']		   = 'Esto es solo para fines de prueba';

// Order Info
$_['tab_order_adjustment']         = 'Ajuste de orden';

// Errors
$_['error_permission']             = 'No tienes permisos para modificar este módulo';
$_['error_merchant_id']			   = 'Identificación de comerciante es requerida';
$_['error_access_key']			   = 'Se requiere clave de acceso';
$_['error_access_secret']		   = 'Se requiere clave secreta';
$_['error_client_id']			   = 'Se requiere identificación del cliente';
$_['error_client_secret']		   = 'Se requiere clave de cliente';
$_['error_pay_mode']			   = 'El pago solo está disponible para el mercado de EE. UU.';
$_['error_minimum_total']		   = 'El total mínimo del pedido debe ser superior a cero';
$_['error_curreny']                = 'Tu tienda debe tener la moneda %s instalada y habilitada';
$_['error_upload']                 = 'Subida fallida';
$_['error_data_missing'] 		   = 'Los datos requeridos faltan';
$_['error_credentials'] 		   = 'Por favor, introduzca las claves en un formato JSON válido';


// Buttons
$_['button_capture']			   = 'Capturar';
$_['button_refund']				   = 'Reembolso';
$_['button_cancel']				   = 'Cancelar';
