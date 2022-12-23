<?php
// Heading
$_['heading_title']					= 'תשלום איוויי (eWAY) ';

// Text
$_['text_extension']                = 'הרחבות';
$_['text_success']					= 'בוצע בהצלחה: עדכנת את נתוני איוויי (eWAY) שלך!';
$_['text_edit']						= 'עריכת איווי';
$_['text_eway']						= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']			= 'הרשאה';
$_['text_sale']						= 'מבצע';
$_['text_transparent']				= 'העברה שקופה (טופס תשלום באתר)';
$_['text_iframe']					= 'איי פריים - IFrame (טופס תשלום בחלון)';
$_['text_connect_eway']	        = 'אי ווי (eWAY) עוזר לעסקים לבטח עסקאות של של רוב כרטיסי האשראי , עם מניעת הונאות מובנית ,תמיכה טכנית  24/7 ועוד יותר מזה. <a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf">לחצו כאן</a>';
$_['text_eway_image']	        = '<a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf"><img src="view/image/payment/eway_connect.png" alt="אי ווי (eWAY)" title="אי ווי (eWAY)" class="img-fluid" /></a>';

// Entry
$_['entry_paymode']					= 'מצב תשלום';
$_['entry_test']					= 'מצב בדיקות';
$_['entry_order_status']			= 'סטטוס הזמנה';
$_['entry_order_status_refund']		= 'סטטוס הזמנה זוכה';
$_['entry_order_status_auth']		= 'סטטוס הזמנה מורשה';
$_['entry_order_status_fraud']		= 'סטטוס הזמנה חדש להונאה';
$_['entry_status']					= 'סטטוס';
$_['entry_username']				= 'מפתח ממשק תכנות אפליקטיבי (API) של איוויי (eWAY)';
$_['entry_password']				= 'סיסמת איוויי (eWAY)';
$_['entry_payment_type']			= 'סוג תשלום';
$_['entry_geo_zone']				= 'איזור גיאוגרפי';
$_['entry_sort_order']				= 'סדר מיון';
$_['entry_transaction_method']		= 'אופן העברה';

// Error
$_['error_permission']				= 'נא לשים לב: אין לך הרשאה לעדכן את מודול תשלום איוויי (eWAY)';
$_['error_username']				= 'נדרש מפתח ממשק תיכנות אפליקטיבי (API) של איוויי (eWAY) !';
$_['error_password']				= 'נדרשת סיסמת איוויי (eWAY)!';
$_['error_payment_type']			= 'נדרש לפחות סוג תשלום אחד!';

// Help hints
$_['help_testmode']					= 'יש להגדיר כן על מנת להשתמש באיוויי סנדבוקס (eWAY Sandbox).';
$_['help_username']					= 'מפתח ממשק תכנות אפליקטיבי (API) איוויי (eWAY) מחשבון MYeWAY שלך.';
$_['help_password']					= 'סיסמת ממשק תכנות אפליקטיבי (API) איוויי (eWAY) מחשבון MYeWAY שלך.';
$_['help_transaction_method']		= 'הרשאה זמינה רק עבור בנקים אוסטרלים';

// Order page - payment tab
$_['text_payment_info']				= 'מידע תשלום';
$_['text_order_total']				= 'סך הכל מורשה';
$_['text_transactions']				= 'עסקאות';
$_['text_column_transactionid']		= 'מספר זיהוי עסקת איוויי (eWAY)';
$_['text_column_amount']			= 'סכום';
$_['text_column_type']				= 'סוג';
$_['text_column_created']			= 'נוצר';
$_['text_total_captured']			= 'סך הכל חויב';
$_['text_capture_status']			= 'תשלום חויב';
$_['text_void_status']				= 'תשלום בוטל';
$_['text_refund_status']			= 'זוכה תשלום';
$_['text_total_refunded']			= 'סך הכל זוכה';
$_['text_refund_success']			= 'זיכוי בוצע בהצלחה!';
$_['text_capture_success']			= 'חיוב בוצע בהצלחה!';
$_['text_refund_failed']			= 'זיכוי נכשל: ';
$_['text_capture_failed']			= 'חיוב נכשל: ';
$_['text_unknown_failure']			= 'הזמנה או סכום שגויים';

$_['text_confirm_capture']			= 'האם בוודאות לחייב את התשלום?';
$_['text_confirm_release']			= 'האם בוודאות לשחרר את התשלום?';
$_['text_confirm_refund']			= 'האם בוודאות לזכות את התשלום?';

$_['text_empty_refund']				= 'נא להכניס את הסכום לזיכוי';
$_['text_empty_capture']			= 'נא להכניס את הסכום לחיוב';

$_['btn_refund']					= 'זיכוי';
$_['btn_capture']					= 'חיוב';

// Validation Error codes
$_['text_card_message_V6000']		= 'שגיאת מתן תוקף לא מוגדרת';
$_['text_card_message_V6001'] 		= 'כתובת אינטרנט (IP) של הלקוח שגויה';
$_['text_card_message_V6002'] 		= 'מספר זיהוי התקן שגוי';
$_['text_card_message_V6011'] 		= 'סכום שגוי';
$_['text_card_message_V6012'] 		= 'תיאור חשבונית שגוי';
$_['text_card_message_V6013'] 		= 'מספר חשבונית שגוי';
$_['text_card_message_V6014'] 		= 'הפניית חשבונית שגויה';
$_['text_card_message_V6015'] 		= 'קוד מטבע שגוי';
$_['text_card_message_V6016'] 		= 'נדרש תשלום';
$_['text_card_message_V6017'] 		= 'נדרש קוד מטבע לתשלום';
$_['text_card_message_V6018'] 		= 'קוד מטבע לתשלום לא ידוע';
$_['text_card_message_V6021'] 		= 'נדרש שם בעלי הכרטיס';
$_['text_card_message_V6022'] 		= 'נדרש מספר כרטיס';
$_['text_card_message_V6023'] 		= 'נדרש CVN ';
$_['text_card_message_V6031'] 		= 'מספר כרטיס שגוי';
$_['text_card_message_V6032'] 		= 'CVN שגוי';
$_['text_card_message_V6033'] 		= 'תאריך תפוגה שגוי';
$_['text_card_message_V6034'] 		= 'מספר הנפקה שגוי';
$_['text_card_message_V6035'] 		= 'תאריך התחלה שגוי';
$_['text_card_message_V6036'] 		= 'חודש שגוי';
$_['text_card_message_V6037'] 		= 'שנה שגויה';
$_['text_card_message_V6040'] 		= 'מספר זיהוי אסימון לקוח שגוי';
$_['text_card_message_V6041'] 		= 'נדרש לקוח/ה';
$_['text_card_message_V6042'] 		= 'נדרש שם פרטי של הלקוח/ה';
$_['text_card_message_V6043'] 		= 'נדרש שם משפחה של הלקוח/ה';
$_['text_card_message_V6044'] 		= 'נדרש קוד מדינה של הלקוח/ה';
$_['text_card_message_V6045'] 		= 'נדרשת כותרת לקוח/ה';
$_['text_card_message_V6046'] 		= 'נדרש מספר זיהוי אסימון לקוח/ה';
$_['text_card_message_V6047'] 		= 'נדרשת כתובת אינטרנט להעברה';
$_['text_card_message_V6051'] 		= 'שם פרטי שגוי';
$_['text_card_message_V6052'] 		= 'שם משפחה שגוי';
$_['text_card_message_V6053'] 		= 'קוד מדינה שגוי';
$_['text_card_message_V6054'] 		= 'דואר אלקטרוני שגוי';
$_['text_card_message_V6055'] 		= 'טלפון שגוי';
$_['text_card_message_V6056'] 		= 'נייד שגוי';
$_['text_card_message_V6057'] 		= 'פקס שגוי';
$_['text_card_message_V6058'] 		= 'כותרת שגויה';
$_['text_card_message_V6059'] 		= 'קישור אינטרנט להעברה שגוי';
$_['text_card_message_V6060'] 		= 'קישור אינטרנט להעברה שגוי';
$_['text_card_message_V6061'] 		= 'הפניה שגויה';
$_['text_card_message_V6062'] 		= 'שם חברה שגוי';
$_['text_card_message_V6063'] 		= 'תיאור משימה שגוי';
$_['text_card_message_V6064'] 		= 'כתובת 1 שגויה';
$_['text_card_message_V6065'] 		= 'כתובת 2 שגויה';
$_['text_card_message_V6066'] 		= 'עיר שגויה';
$_['text_card_message_V6067'] 		= 'מדינה שגויה';
$_['text_card_message_V6068'] 		= 'מיקוד שגוי';
$_['text_card_message_V6069'] 		= 'דואר אלקטרוני שגוי';
$_['text_card_message_V6070'] 		= 'טלפון שגוי';
$_['text_card_message_V6071'] 		= 'נייד שגוי';
$_['text_card_message_V6072'] 		= 'הערות שגויות';
$_['text_card_message_V6073'] 		= 'פקס שגוי';
$_['text_card_message_V6074'] 		= 'קישור אינטרנט שגוי';
$_['text_card_message_V6075'] 		= 'שם פרטי של כתובת המשלוח שגוי';
$_['text_card_message_V6076'] 		= 'שם משפחה של כתובת המשלוח שגוי';
$_['text_card_message_V6077'] 		= 'רחוב 1 של כתובת המשלוח שגוי';
$_['text_card_message_V6078'] 		= 'רחוב 2 של כתובת המשלוח שגוי';
$_['text_card_message_V6079'] 		= 'עיר של כתובת המשלוח שגוי';
$_['text_card_message_V6080'] 		= 'מדינה של כתובת המשלוח שגוי';
$_['text_card_message_V6081'] 		= 'מיקוד של כתובת המשלוח שגוי';
$_['text_card_message_V6082'] 		= 'דואר אלקטרוני של כתובת המשלוח שגוי';
$_['text_card_message_V6083'] 		= 'טלפון של כתובת המשלוח שגוי';
$_['text_card_message_V6084'] 		= 'מדינה של כתובת המשלוח שגוי';
$_['text_card_message_V6091'] 		= 'קוד מדינה לא ידוע';
$_['text_card_message_V6100'] 		= 'שם כרטיס שגוי';
$_['text_card_message_V6101'] 		= 'חודש תפוגת הכרטיס שגוי';
$_['text_card_message_V6102'] 		= 'שנת תפוגת הכרטיס שגוי';
$_['text_card_message_V6103'] 		= 'חודש התחלה של הכרטיס שגוי';
$_['text_card_message_V6104'] 		= 'שנת התחלה של הכרטיס שגוי';
$_['text_card_message_V6105'] 		= 'מספר הנפקת כרטיס שגוי';
$_['text_card_message_V6106'] 		= 'CVN של הכרטיס שגוי';
$_['text_card_message_V6107'] 		= 'קוד גישה שגוי';
$_['text_card_message_V6108'] 		= 'כתבות אירוח לקוח/ה שגויה';
$_['text_card_message_V6109'] 		= 'סוכן/ת משתמש/ת שגוי';
$_['text_card_message_V6110'] 		= 'מספר כרטיס שגוי';
$_['text_card_message_V6111'] 		= 'גישת ממשק תכנות אפלקטיבי (API) לא מורשת, החשבון אינו מוסמך PCI ';
$_['text_card_message_V6112'] 		= 'נתוני כרטיס מיותרים אחרים משנת וחודש תפוגה';
$_['text_card_message_V6113'] 		= 'עסקה שגויה לזיכוי';
$_['text_card_message_V6114'] 		= 'שגיאת מתן תוקף יעד';
$_['text_card_message_V6115'] 		= 'בקשת זיכוי ישרה שגויה , מספר זיהוי עסקה';
$_['text_card_message_V6116'] 		= 'נתוני כרטיס שגויים במספר זיהוי עסקה מקורית';
$_['text_card_message_V6124'] 		= 'פריטי שורות שגויים. פריט השורות סופקו אך הסך הכל לא תואם את שדה הסכום הכולל';
$_['text_card_message_V6125'] 		= 'סוג תשלום נבחר אינו מאופשר';
$_['text_card_message_V6126'] 		= 'מספר גרטיס מוצפן שגוי, פענוח נכשל';
$_['text_card_message_V6127'] 		= ' cvn מוצפן שגוי, פענוח נכשל';
$_['text_card_message_V6128'] 		= 'שגיאת אופן סוג התשלום';
$_['text_card_message_V6129'] 		= 'העסקה לא אושרה לחיוב/ביטול';
$_['text_card_message_V6130'] 		= 'שגיאת מידע לקוח/ה כללית';
$_['text_card_message_V6131'] 		= 'שגיאת מידע משלוח כללית';
$_['text_card_message_V6132'] 		= 'העסקה כבר הסתיימה או בוטלה, הפעולה אינה מותרת';
$_['text_card_message_V6133'] 		= 'לתשלום אינו זמין עבר סוג התשלום';
$_['text_card_message_V6134'] 		= 'מספר זיהוי עסקה אוטומטית שגוי עבור חיוב/ביטול';
$_['text_card_message_V6135'] 		= 'שגיאת פייפאל בביצוע זיכוי';
$_['text_card_message_V6140'] 		= 'חשבון סוחר/ת מושהה';
$_['text_card_message_V6141'] 		= 'נתוני חשבון פייאפל או חתימת ממשק תכנות אפליקטיבי (API) שגויים';
$_['text_card_message_V6142'] 		= 'הרשאה אינה זמינה עבור בנק/סניף';
$_['text_card_message_V6150'] 		= 'סכום זיכוי שגוי';
$_['text_card_message_V6151'] 		= 'סכום זיכוי גדול מהעסקה המקורית';
$_['text_card_message_D4406'] 		= 'שגיאה לא ידועה';
$_['text_card_message_S5010'] 		= 'שגיאה לא ידועה';