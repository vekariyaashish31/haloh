<?php

// Heading
$_['heading_title']                                     = 'סקוור (Square)';
$_['heading_title_transaction']                         = 'צפיה בעסקה  #%s';

// Help
$_['help_total']                                        = 'הסכום הכולל לתשלום שאליו ההזמנה צריכה להגיע לפני שאופן תשלום זה נהיה פעיל.';
$_['help_local_cron']                                   = 'יש להכניס את הפקודה הזו בלשונית המשימות המתוזמנות (CRON) שבשרת האינטרנט. יש להגדיר זאת לרוץ לפחות פעם אחת ביום.';
$_['help_remote_cron']                                  = 'יש להשתמש בקישור זה על מנת להגדיר משימה מתוזמנת (CRON) באמצעות שירות משימה מתוזמנת (CRON) מבוססת אינטרנט. יש להגדיר זאת לרוץ לפחות פעם אחת ביום.';
$_['help_recurring_status']                             = 'יש להפעיל על מנת לאפשר תשלומים קבועים .<br />הערה: חובה גם להגדיר משימה מתוזמנת (CRON) יומית.';
$_['help_cron_email']                                   = 'סיכום של המשימות הקבועות ישלח לדואר אלקטרוני זה לאחר הסיום .';
$_['help_cron_email_status']                            = 'יש לאפשר על מנת לקבל סיכום לאחר כל משימה מתוזמנת (CRON).';
$_['help_notify_recurring_success']                     = 'להודיע ללקוחות על עסקאות קבועות מוצלחות.';
$_['help_notify_recurring_fail']                        = 'להודיע ללקוחות על עסקאות קבועות שכשלו.';

// Tab
$_['tab_setting']                                       = 'הגדרות';
$_['tab_transaction']                                   = 'עסקאות';
$_['tab_cron']                                          = 'משימה מתוזמנת (CRON)';
$_['tab_recurring']                                     = 'תשלומים קבועים';

// Text
$_['text_access_token_expires_label']                   = 'פג תוקף אסימון גישה';
$_['text_access_token_expires_placeholder']             = 'לא הותקן';
$_['text_acknowledge_cron']                             = 'אני מאשר/ת שהתקנתי משימה מתוזמנת (CRON) אוטומטית .';
$_['text_admin_notifications']                          = 'התראות ניהול מערכת';
$_['text_authorize_label']                              = 'אישור';
$_['text_canceled_success']                             = 'בוצע בהצלחה: ביטלת בהצלחה את התשלום!';
$_['text_capture']                                      = 'לכידה';
$_['text_client_id_help']                               = 'יש לקחת זאת מעמוד טופס הניהול של סקוור(Square)';
$_['text_client_id_label']                              = 'מספר מזהה של טופס סקוור (Square)';
$_['text_client_id_placeholder']                        = 'מספר מזהה של טופס סקוור (Square)';
$_['text_client_secret_help']                           = 'יש לקחת זאת מעמוד טופס הניהול של סקוור(Square)';
$_['text_client_secret_label']                          = 'סוד ישום או-אוטו (OAuth Application Secret)';
$_['text_client_secret_placeholder']                    = 'סוד ישום או-אוטו (OAuth Application Secret)';
$_['text_confirm_action']                               = 'האם הנך בטוח/ה?';
$_['text_confirm_cancel']                               = 'האם בוודאות ברצונך לבטל את התשלוםמים הקבועים ?';
$_['text_confirm_capture']                              = 'הנך עומד/ת ללכוד את הסכום הבא: <strong>%s</strong>. יש ללחוץ אישור להמשך.';
$_['text_confirm_refund']                               = 'נא לספק סיבה עבור ההחזר הכספי:';
$_['text_confirm_void']                                 = 'הנך עומד/ת לבטל את הסכום הבא: <strong>%s</strong>. יש ללחוץ אישור להמשך.';
$_['text_connected']                                    = 'מחובר/ת';
$_['text_connected_info']                               = "יש להתחבר שוב במידה ורוצים לשנות חשבון או לבטל ידנית את הגישה להרחבה זו מקונסול היישום שלסקוור (Square). יש לרענן ידנית את אסימון הגישה במידה וזה נסגר לאחר 45 מיום המכירה או הכניסה האחרונה.";
$_['text_connection_section']                           = 'חיבור סקוור (Square)';
$_['text_connection_success']                           = 'מחובר/ת בהצלחה!';
$_['text_cron_email']                                   = 'לשלוח סיכום משימות לדואר אלקטרוני זה:';
$_['text_cron_email_status']                            = 'שליחת סיכום דואר אלקטרוני :';
$_['text_customer_notifications']                       = 'התראות לקוח/ה';
$_['text_debug_disabled']                               = 'מושבת'; 
$_['text_debug_enabled']                                = 'מאופשר'; 
$_['text_debug_help']                                   = 'בקשות ותגובות ממשק תכנות אפליקטיבי (API) ירשמו ביומן השגיאות של אופן כארט. יש להשתמש בזה אך ורק למטרת תיעוד שגיאות ופיתוחים.';
$_['text_debug_label']                                  = 'תיעוד שגיאות';
$_['text_delay_capture_help']                           = 'רק מאשר עסקאות או מבצע חיובים אוטומטים';
$_['text_delay_capture_label']                          = 'סוג עסקה';
$_['text_disabled_connect_help_text']                   = 'מספר זיהוי קליינט וסוד הם שדות דרושים.';
$_['text_edit_heading']                                 = 'עריכת סקוור (Square)';
$_['text_enable_sandbox_help']                          = 'אפשור מצב ארגז חול (sandbox) עבור בדיקת עסקאות';
$_['text_enable_sandbox_label']                         = 'אפשור מצב ארגז חול (sandbox)';
$_['text_executables']                                  = 'אופן ביצוע משימות מתוזמנות (CRON)';
$_['text_extension']                                    = 'הרחבות';
$_['text_extension_status']                             = 'סטטוס הרחבות';
$_['text_extension_status_disabled']                    = 'מושבת'; 
$_['text_extension_status_enabled']                     = 'מאופשר'; 
$_['text_extension_status_help']                        = 'אפשור או השבתה של אופן התשלןם'; 
$_['text_insert_amount']                                = 'נא להכניס את סכום ההחזר הכספי. מקסימום: %s in %s:';
$_['text_loading']                                      = 'טוען נתונים... נא להמתין...';
$_['text_loading_short']                                = 'נא להמתין...';
$_['text_local_cron']                                   = 'שיטה #1 - משימה מתוזמנת (CRON) :';
$_['text_location_error']                               = 'אירעה שגיאה בעת נסיון לסנכרן מיקומים ואסימון: %s';
$_['text_location_help']                                = 'Select which configured Square location to be used for transactions. Has to have card processing capabilities enabled.';
$_['text_location_label']                               = 'מיקום';
$_['text_manage']                                       = 'עסקת כרטיס אשראי (סקוור-Square)';
$_['text_manage_tooltip']                               = 'לראות נתונים / לכידה / ביטול / החזר כספי';
$_['text_merchant_info_section_heading']                = 'נתוני סוחר';
$_['text_merchant_name_label']                          = 'שם סוחר';
$_['text_merchant_name_placeholder']                    = 'לא הותקן';
$_['text_no_appropriate_locations_warning']             = 'There are no locations capable of online card processing setup in your Square account.';
$_['text_no_location_selected_warning']                 = 'אין מיקום נבחר.';
$_['text_no_locations_label']                           = 'מיקומים לא תיקניים';
$_['text_no_transactions']                              = 'עדיין לא נרשמו עסקאות.';
$_['text_not_connected']                                = 'לא מחובר/ת';
$_['text_not_connected_info']                           = 'By clicking this button you will connect this module to your Square account and activate the service.';
$_['text_notification_ssl']                             = 'Make sure you have SSL enabled on your checkout page. Otherwise, the extension will not work.';
$_['text_notify_recurring_fail']                        = 'Recurring Transaction Failed:';
$_['text_notify_recurring_success']                     = 'Recurring Transaction Successful:';
$_['text_ok']                                           = 'OK';
$_['text_order_history_cancel']                         = 'An administrator has canceled your recurring payments. Your card will no longer be charged.';
$_['text_payment_method_name_help']                     = 'Checkout payment method name';
$_['text_payment_method_name_label']                    = 'שם אופן התשלום';
$_['text_payment_method_name_placeholder']              = 'כרטיס אשראי  / דביט';
$_['text_recurring_info']                               = 'Please make sure to set up a daily CRON task using one of the methods below. CRON jobs help you with:<br /><br />&bull; Automatic refresh of your API access token<br />&bull; Processing of recurring transactions';
$_['text_recurring_status']                             = 'Status of recurring payments:';
$_['text_redirect_uri_help']                            = 'Paste this link into the Redirect URI field under Manage Application/oAuth';
$_['text_redirect_uri_label']                           = 'Square OAuth Redirect URL';
$_['text_refresh_access_token_success']                 = 'Successfully refreshed the connection to your Square account.'; 
$_['text_refresh_token']                                = 'יצירת אסימון מחדש';
$_['text_refund']                                       = 'החזר כספי';
$_['text_refund_details']                               = 'נתוני החזר כספי';
$_['text_refunded_amount']                              = 'סכום שהוחזר: %s. סטטוס של ההחזר הכספי: %s. סיבת ההחזר הכספי: %s';
$_['text_refunds']                                      = 'החזרים כספיים (%s)';
$_['text_remote_cron']                                  = 'שיטה #2 - משימה מתוזמנת מרחוק (Remote CRON):';
$_['text_sale_label']                                   = 'מכירה';
$_['text_sandbox_access_token_help']                    = 'יש לקחת זאת עמוד טופס הניהול של סקוור (Square)';
$_['text_sandbox_access_token_label']                   = 'אסימון גישה ארגז חול (Sandbox)';
$_['text_sandbox_access_token_placeholder']             = 'אסימון גישה ארגז חול (Sandbox)';
$_['text_sandbox_client_id_help']                       = 'Get this from the Manage Application page on Square';
$_['text_sandbox_client_id_label']                      = 'מספר זיהוי ישום ארגז החול (Sandbox)';
$_['text_sandbox_client_id_placeholder']                = 'מספר זיהוי ישום ארגז החול (Sandbox)';
$_['text_sandbox_disabled_label']                       = 'מושבת'; 
$_['text_sandbox_enabled']                              = 'מצב ארגז החול (Sandbox) פעיל! יראה כאילו שעסקאות מתבצעות , אך לא יבוצעו חיובים בפועל.';
$_['text_sandbox_enabled_label']                        = 'מאופשר'; 
$_['text_sandbox_section_heading']                      = 'הגדרות ארגז החול של סקוור (Square Sandbox)';
$_['text_select_location']                              = 'בחירת מיקום';
$_['text_settings_section_heading']                     = 'הגדרות סקוור (Square)';
$_['text_squareup']                                     = '<a target="_BLANK" href="https://squareup.com"><img src="view/image/payment/squareup.png" alt="Square" title="Square" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_success']                                      = 'בוצע בהצלחה: עדכנת את מודול התלשום של סקוור (Square)!';
$_['text_success_capture']                              = 'לכידה של העסקה בוצעה בהצלחה!';
$_['text_success_refund']                               = 'החזר כספי של העסקה בוצע בהצלחה!';
$_['text_success_void']                                 = 'העסקה בוטלה בהצלחה!';
$_['text_token_expired']                                = 'Your Square access token has expired! <a href="%s">Click here</a> to renew it now.';
$_['text_token_expiry_warning']                         = 'Your Square access token will expire on %s. <a href="%s">Click here</a> to renew it now.';
$_['text_token_revoked']                                = 'Your Square access token has expired or has been revoked! <a href="%s">Click here</a> to re-authorize the Square extension.';
$_['text_transaction_statuses']                         = 'מצבי עסקאות';
$_['text_view']                                         = 'לצפות בעוד';
$_['text_void']                                         = 'לבטל';
$_['text_na']                                           = 'N/A';
$_['text_no_reason_provided']                           = 'לא סופקה סיבה.';

// Statuses
$_['squareup_status_comment_authorized']                = 'עסקת הכרטיס אושרה אך עדדין לא ביצעה לכידה.';
$_['squareup_status_comment_captured']                  = 'עסקת הכרטיס אושרה ולאחר מכן ביצעה לכידה (לדוגמה, הסתיים).';
$_['squareup_status_comment_voided']                    = 'עסקת הכרטיס אושרה ולאחר מכן בוטלה (לדוגמה,בוטלה).   ';
$_['squareup_status_comment_failed']                    = 'עסקת הכרטיס נכשלה.';

// Entry
$_['entry_total']                                       = 'סך הכל';
$_['entry_geo_zone']                                    = 'איזור גיאוגרפי';
$_['entry_sort_order']                                  = 'סדר מיון';
$_['entry_merchant']                                    = 'מספר זיהוי סוחר';
$_['entry_transaction_id']                              = 'מספר זיהוי עסקה';
$_['entry_order_id']                                    = 'מספר זיהוי הזמנה';
$_['entry_partner_solution_id']                         = 'מספר מזהה של פתרון שותף';
$_['entry_type']                                        = 'סוג עסקה';
$_['entry_currency']                                    = 'מטבע';
$_['entry_amount']                                      = 'סכום';
$_['entry_browser']                                     = 'סוכן משתמש של הלוק';
$_['entry_ip']                                          = 'כתובת אינטרנט (IP) של הלקוח/ה';
$_['entry_date_created']                                = 'נוצר בתאריך';
$_['entry_billing_address_company']                     = 'חברה לחיוב';
$_['entry_billing_address_street']                      = 'רחוב לחיוב';
$_['entry_billing_address_city']                        = 'עיר לחיוב';
$_['entry_billing_address_postcode']                    = 'מיקוד לחיוב';
$_['entry_billing_address_province']                    = 'מדינה/איזור לחיוב';
$_['entry_billing_address_country']                     = 'ארץ לחיוב';
$_['entry_status_authorized']                           = 'מאושר';
$_['entry_status_captured']                             = 'נלכד';
$_['entry_status_voided']                               = 'בוטל';
$_['entry_status_failed']                               = 'נכשל';
$_['entry_setup_confirmation']                          = 'אישור התקנה:';

// Error
$_['error_permission']                                  = '<strong>נא לשים לב:</strong> אין לך הרשאה לעדכן את תשלומי סקוור (Square)!';
$_['error_permission_recurring']                        = '<strong>נא לשים לב:</strong> אין לך הרשאה לעדכן את תשלומים חודשיים!';
$_['error_transaction_missing']                         = 'העסקה לא נמצאה!';
$_['error_no_ssl']                                      = '<strong>נא לשים לב:</strong> אס אס אל (SSL) לא מאופשר בלוח הבקרה שלך. נא לאפשר אותו על מנת לסיים את ההגדרות שלך.';
$_['error_user_rejected_connect_attempt']               = 'ניסיון התחברות בוטל על ידי המשתמש/ת.';
$_['error_possible_xss']                                = 'בדקנו אפשרות של מתקפת קוד זדוני על האתר ולכן נטרלנו את נסיון החיבור שלך. נא לוודא את מספר זיהוי הישום והסיסמה שלך ואז לנסות שוב על ידי שימוש בלוח הבקרה..';
$_['error_invalid_email']                               = 'כתובת הדואר האלקטרוני שסופקה לא תקינה!';
$_['error_cron_acknowledge']                            = 'נא לאשר שהגדרת משימה מתוזמנת.';
$_['error_client_id']                                   = 'מספר זיהוי קליינט ישום הוא שדה דרוש';
$_['error_client_secret']                               = 'מספר קליינט הישום הוא שדה נדרש';
$_['error_sandbox_client_id']                           = 'מספר קליינט ארגז החול (sandbox) הוא שדה נדרש כאשר מצב ארגז החול(מצב בדיקות) מאופשר';
$_['error_sandbox_token']                               = 'אסימון ארגז החול (sandbox - מצב בדיקות) הוא שדה נדרש כאשר מצב ארז חול מאופשר';
$_['error_no_location_selected']                        = 'המיקום הוא שדה נדרש';
$_['error_refresh_access_token']                        = 'שגיאה אירעה בנסיון לרענן את החיבור לחשבון סקוור (Square) שלך. נא לבדוק את הגדרות הישום ולנסות שוב.';
$_['error_form']                                        = 'נא לבדוק שגיאות בטופס ולנסות לשמור שוב.';
$_['error_token']                                       = 'אירעה שגיאה בנסיון לרענן את האסימון: %s';
$_['error_no_refund']                                   = 'החזר כספי נכשל.';

// Column
$_['column_transaction_id']                             = 'מספר זיהוי עסקה';
$_['column_order_id']                                   = 'מספר זיהוי הזמנה';
$_['column_customer']                                   = 'לקוח/ה';
$_['column_status']                                     = 'סטטוס';
$_['column_type']                                       = 'סוג';
$_['column_amount']                                     = 'סכום';
$_['column_ip']                                         = 'כתובת אינטרנט (IP)';
$_['column_date_created']                               = 'נוצר בתאריך';
$_['column_action']                                     = 'פעולה';
$_['column_refunds']                                    = 'החזרים כספיים';
$_['column_reason']                                     = 'סיבה';
$_['column_fee']                                        = 'דמי ביצוע';

// Button
$_['button_void']                                       = 'ביטול';
$_['button_refund']                                     = 'החזר כספי';
$_['button_capture']                                    = 'לכידה';
$_['button_connect']                                    = 'התחברות';
$_['button_reconnect']                                  = 'התחברות מחדש';
$_['button_refresh']                                    = 'רענון אסימון';
