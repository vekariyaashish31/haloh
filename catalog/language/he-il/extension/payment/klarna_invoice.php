<?php
// Text
$_['text_title']				= 'חשבונית קלרנה - לשלם תוך 14 יום';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'חשבונית קלרנה דורש מידע  נוסף לפני שהם יוכלו לבצע את ההזמנה שלך.';
$_['text_male']					= 'זכר';
$_['text_female']				= 'נקבה';
$_['text_year']					= 'שנה';
$_['text_month']				= 'חודש';
$_['text_day']					= 'יום';
$_['text_comment']				= 'מספר חשבונית של קלרנה: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'מין';
$_['entry_pno']					= 'מספר אישי';
$_['entry_dob']					= 'תאריך לידה';
$_['entry_phone_no']			= 'מספר טלפון';
$_['entry_street']				= 'רחוב';
$_['entry_house_no']			= 'מספר בית.';
$_['entry_house_ext']			= 'תיאור הבית.';
$_['entry_company']				= 'מספר רישוי חברה';

// Help
$_['help_pno']					= 'נא להזין את מספר הביטוח הלאומי שלך כאן.';
$_['help_phone_no']				= 'נא להזין את מספר הטלפון שלך.';
$_['help_street']				= 'נא לשים לב שמשלוח יכול להתבצע רק לכתובת הרשומה, כאשר משלמים  עם קלרנה.';
$_['help_house_no']				= 'נא להזין את מספר הבית שלך.';
$_['help_house_ext']			= 'נא להזין את תיאור הבית. כגון:  א, ב, ג, אדום, כחול וכו.';
$_['help_company']				= 'נא להזין את מספר רישוי החברה שלך';

// Error
$_['error_deu_terms']			= 'מחובתך להסכים למדיניות פרטיות של קלרנה (Datenschutz)';
$_['error_address_match']		= 'כתובות  גביה ומשלוח חייבים להיות תואמים אם ברצונך להשתמש בחשבונית קלרנה';
$_['error_network']				= 'אירעה שגיאה בהתחברות לקלרנה. נא לנסות שוב מאוחר יותר.';