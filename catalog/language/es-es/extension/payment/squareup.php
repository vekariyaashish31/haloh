<?php
// Text
$_['text_new_card']                     = '+ Agregar nueva tarjeta';
$_['text_loading']                      = 'Cargando por favor espere..';
$_['text_card_details']                 = 'Detalles de tarjeta';
$_['text_saved_card']                   = 'Usar tarjeta guardada:';
$_['text_card_ends_in']                 = 'Pague con la tarjeta % existente que finaliza en XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Número de tarjeta:';
$_['text_card_expiry']                  = 'Caducidad de la tarjeta (MM /AA):';
$_['text_card_cvc']                     = 'Código de seguridad de la tarjeta (CVC):';
$_['text_card_zip']                     = 'Código postal de la tarjeta:';
$_['text_card_save']                    = 'Guarde la tarjeta para uso futuro?';
$_['text_trial']                        = '%s cada %s %s para pagos %s luego';
$_['text_recurring']                    = '%s cada %s %s';
$_['text_length']                       = 'para pagos %s';
$_['text_cron_subject']                 = 'Resumen de trabajo cuadrado CRON';
$_['text_cron_message']                 = 'Aquí hay una lista de todas las tareas CRON realizadas por su extensión Square:';
$_['text_squareup_profile_suspended']   = 'Sus pagos recurrentes han sido suspendidos. Por favor, póngase en contacto con nosotros para más detalles.';
$_['text_squareup_trial_expired']       = 'Su período de prueba ha caducado.';
$_['text_squareup_recurring_expired']   = 'Sus pagos recurrentes han expirado. Este fue tu último pago.';
$_['text_cron_summary_token_heading']   = 'Refresco de token de acceso:';
$_['text_cron_summary_token_updated']   = 'El token de acceso se ha actualizado con éxito!';
$_['text_cron_summary_error_heading']   = 'Errores de transacción:';
$_['text_cron_summary_fail_heading']    = 'Transacciones fallidas (perfiles suspendidos):';
$_['text_cron_summary_success_heading'] = 'Transacciones exitosas:';
$_['text_cron_fail_charge']             = 'El perfil <strong> #%s </strong> no se pudo cargar con <strong> %s </strong>';
$_['text_cron_success_charge']          = 'El perfil <strong> #%s </strong> se cargó con <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Tarjeta de crédito /débito';
$_['text_token_issue_customer_error']   = 'Estamos experimentando un corte técnico en nuestro sistema de pago. Por favor, inténtelo de nuevo más tarde.';
$_['text_token_revoked_subject']        = 'Tu token de acceso cuadrado ha sido revocado!';
$_['text_token_revoked_message']        = 'El acceso de la extensión de pago Square a su cuenta de Square ha sido revocado a través del Square Dashboard. Debe verificar las credenciales de su aplicación en la configuración de la extensión y conectarse de nuevo.';
$_['text_token_expired_subject']        = 'Tu token de acceso cuadrado ha expirado!';
$_['text_token_expired_message']        = 'El token de acceso a la extensión de pago Square que lo conecta a su cuenta de Square ha expirado. Debe verificar las credenciales de la aplicación y el trabajo CRON en la configuración de la extensión y conectarse de nuevo.';

// Error
$_['error_browser_not_supported']       = 'Error: el sistema de pago ya no es compatible con su navegador web. Por favor actualice o use uno diferente.';
$_['error_card_invalid']                = 'Error: la tarjeta no es válida!';
$_['error_squareup_cron_token']         = 'Error: el token de acceso no se pudo actualizar. Conecte su extensión de pago cuadrado a través del panel de administración de OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Advertencia: el modo Sandbox está habilitado! Las transacciones aparecerán, pero no se realizarán cargos.';

// Statuses
$_['squareup_status_comment_authorized']    = 'La transacción de la tarjeta ha sido autorizada pero todavía no se ha capturado.';
$_['squareup_status_comment_captured']      = 'La transacción de la tarjeta fue autorizada y posteriormente capturada (es decir, completada).';
$_['squareup_status_comment_voided']        = 'La transacción de la tarjeta fue autorizada y posteriormente anulada (es decir, cancelada).';
$_['squareup_status_comment_failed']        = 'La transacción de la tarjeta falló.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'El país de la dirección de pago no es válido. Por favor, modifícalo y vuelve a intentarlo.';
$_['squareup_override_error_shipping_address.country']      = 'El país de la dirección de envío no es válido. Por favor, modifícalo y vuelve a intentarlo.';
$_['squareup_override_error_email_address']                 = 'La dirección de correo electrónico de su cliente no es válida. Por favor, modifícalo y vuelve a intentarlo.';
$_['squareup_override_error_phone_number']                  = 'El número de teléfono de su cliente no es válido. Por favor, modifícalo y vuelve a intentarlo.';
$_['squareup_error_field']                                  = 'Campo: %s';