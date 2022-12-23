<?php
// Text
$_['text_new_card']                     = '+ ახალი ბარათის დამატება';
$_['text_loading']                      = 'იტვირთება გთხოვთ მოიცადოთ..';
$_['text_card_details']                 = 'ბარათის დეტალები';
$_['text_saved_card']                   = 'შენახული ბარათის გამოყენება:';
$_['text_card_ends_in']                 = 'გადაიხადეთ არსებული % ბარათი, რომელიც მთავრდება XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'ბარათის ნომერი:';
$_['text_card_expiry']                  = 'ბარათის ვადა (MM /YY):';
$_['text_card_cvc']                     = 'ბარათის უსაფრთხოების კოდი (CVC):';
$_['text_card_zip']                     = 'ბარათის საფოსტო ინდექსი:';
$_['text_card_save']                    = 'ბარათის შენახვა მომავალი გამოყენებისათვის ?';
$_['text_trial']                        = '%s ყველა %s %s ამისთვის % გადასახადები შემდეგ';
$_['text_recurring']                    = '%s ყველა %s %s';
$_['text_length']                       = '% გადასახადები';
$_['text_cron_subject']                 = 'მოედანი CRON სამუშაოების შემაჯამებელი';
$_['text_cron_message']                 = 'აქ არის CRON გაფართოების მიერ შესრულებული ყველა CRON ამოცანების ჩამონათვალი:';
$_['text_squareup_profile_suspended']   = 'თქვენი განმეორებითი გადასახადი შეჩერებულია. გთხოვთ დაგვიკავშირდეთ დამატებითი ინფორმაციისთვის.';
$_['text_squareup_trial_expired']       = 'თქვენი საცდელი პერიოდი ამოიწურა.';
$_['text_squareup_recurring_expired']   = 'თქვენი განმეორებადი გადახდები ამოიწურა. ეს იყო თქვენი ბოლო გადახდა.';
$_['text_cron_summary_token_heading']   = 'წვდომის განახლების განახლება:';
$_['text_cron_summary_token_updated']   = 'წვდომის ნიშნად წარმატებით განახლდა !';
$_['text_cron_summary_error_heading']   = 'გარიგების შეცდომები:';
$_['text_cron_summary_fail_heading']    = 'ვერ განხორციელდა გარიგებები (პროფილები შეჩერებულია):';
$_['text_cron_summary_success_heading'] = 'წარმატებული ტრანზაქციები:';
$_['text_cron_fail_charge']             = 'პროფილი <strong> #%s </strong> ვერ ბრალი ერთად <strong> %s </strong>';
$_['text_cron_success_charge']          = 'პროფილი <strong> #%s </strong> ბრალად დაედო <strong> %s </strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'საკრედიტო /სადებეტო ბარათი';
$_['text_token_issue_customer_error']   = 'ჩვენ ვცდილობთ ტექნიკურ გაუარესებას ჩვენს საგადამხდელო სისტემაში. გთხოვთ სცადოთ მოგვიანებით.';
$_['text_token_revoked_subject']        = 'თქვენი კვადრატული დაშვების ნიშნად გაუქმებულია !';
$_['text_token_revoked_message']        = 'მოედანზე გადახდის გაფართოება თქვენი კვადრატული ანგარიშის ხელმისაწვდომობის შესახებ გამორთულია Square Dashboard- ით. თქვენ უნდა შეამოწმოთ თქვენი აპლიკაციის რწმუნებათა სიგელების გაფართოება და კვლავ დაკავშირება.';
$_['text_token_expired_subject']        = 'თქვენი კვადრატული დაშვების ნიშნად ვადა ამოიწურა !';
$_['text_token_expired_message']        = 'მოედანზე გადახდის გაფართოების წვდომის ნიშნად თქვენს კვადრატულ ანგარიშზე დამაკავშირებელი ვადა ამოიწურა. თქვენ უნდა შეამოწმოთ თქვენი აპლიკაციის რწმუნებათა სიგელები და CRON სამუშაოები გაფართოების პარამეტრებში და დაუკავშირონ.';

// Error
$_['error_browser_not_supported']       = 'შეცდომა: გადახდის სისტემა აღარ უჭერს მხარს თქვენს ბრაუზერს. გთხოვთ განაახლოთ ან გამოიყენოთ სხვა.';
$_['error_card_invalid']                = 'შეცდომა: ბარათი არასწორია !';
$_['error_squareup_cron_token']         = 'შეცდომა: წვდომის ნიშნად ვერ მოხერხდა განახლება. გთხოვთ, დააკავშიროთ თქვენი კვადრატული გადახდის გაფართოება OpenCart admin panel- ის საშუალებით.';

// Warning
$_['warning_test_mode']                 = 'გაფრთხილება: Sandbox რეჟიმი ჩართულია ! ტრანზაქციები გამოჩნდება გადის, მაგრამ არანაირი ბრალდება არ განხორციელდება.';

// Statuses
$_['squareup_status_comment_authorized']    = 'ბარათის გარიგება უფლებამოსილია, მაგრამ ჯერ არ არის დაკავებული.';
$_['squareup_status_comment_captured']      = 'ბარათის გარიგება უფლებამოსილი იყო და შემდგომში ტყვედ (მაგ., დასრულებული).';
$_['squareup_status_comment_voided']        = 'ბარათის ტრანზაქცია უფლებამოსილი იყო და მოგვიანებით გაუქმდა (მაგ .: გაუქმდა).';
$_['squareup_status_comment_failed']        = 'ბარათის გარიგება ვერ მოხერხდა.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'გადახდის მისამართი ქვეყანა არ მოქმედებს. გთხოვთ, შეცვალოთ და ისევ სცადოთ.';
$_['squareup_override_error_shipping_address.country']      = 'გადაზიდვის მისამართი ქვეყანა არასწორია. გთხოვთ, შეცვალოთ და ისევ სცადოთ.';
$_['squareup_override_error_email_address']                 = 'თქვენი მომხმარებლის ელ.ფოსტის მისამართი არასწორია. გთხოვთ, შეცვალოთ და ისევ სცადოთ.';
$_['squareup_override_error_phone_number']                  = 'თქვენი მომხმარებლის ტელეფონის ნომერი არ არის სწორი. გთხოვთ, შეცვალოთ და ისევ სცადოთ.';
$_['squareup_error_field']                                  = 'სფერო: %s';