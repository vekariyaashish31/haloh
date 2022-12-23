<?php
// Heading
$_['heading_title']				= 'eWAY გადახდა';

// Text
$_['text_extension']			= 'გაგრძელება';
$_['text_success']				= 'წარმატება: თქვენ შეცვალეთ თქვენი eWAY დეტალები !';
$_['text_edit']					= 'რედაქტირება eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'ავტორიზაცია';
$_['text_sale']					= 'იყიდება';
$_['text_transparent']			= 'გამჭვირვალე გადამისამართება (გადახდის ფორმა ადგილზე)';
$_['text_iframe']				= 'IFrame (გადახდის ფორმა ფანჯარაში)';

// Entry
$_['entry_paymode']				= 'გადახდის რეჟიმი';
$_['entry_test']				= 'ტესტური რეჟიმი';
$_['entry_order_status']		= 'დაალაგე სტატუსი';
$_['entry_order_status_refund'] = 'თანხის დაბრუნების სტატუსი';
$_['entry_order_status_auth']	= 'ავტორიზებული ბრძანების სტატუსი';
$_['entry_order_status_fraud']	= 'ეჭვმიტანილი თაღლითობის წესრიგი';
$_['entry_status']				= 'სტატუსი';
$_['entry_username']			= 'eWAY API გასაღები';
$_['entry_password']			= 'eWAY პაროლი';
$_['entry_payment_type']		= 'გადახდის ტიპი';
$_['entry_geo_zone']			= 'ჯეო ზონა';
$_['entry_sort_order']			= 'დალაგების წესი';
$_['entry_transaction_method']	= 'გარიგების მეთოდი';

// Error
$_['error_permission']			= 'გაფრთხილება: თქვენ არ გაქვთ ნებართვა eWAY გადახდის მოდულის შეცვლა';
$_['error_username']			= 'eWAY API გასაღები საჭიროა !';
$_['error_password']			= 'eWAY პაროლი საჭიროა !';
$_['error_payment_type']		= 'მინიმუმ ერთი გადახდის ტიპი საჭიროა !';

// Help hints
$_['help_testmode']				= 'დააყენეთ დიახ, რათა გამოიყენოთ eWAY Sandbox.';
$_['help_username']				= 'თქვენი eWAY API Key თქვენი MYEWAY ანგარიშიდან.';
$_['help_password']				= 'თქვენი eWAY API პაროლი თქვენი MYEWAY ანგარიშიდან.';
$_['help_transaction_method']	= 'ავტორიზაცია ხელმისაწვდომია მხოლოდ ავსტრალიის ბანკებისთვის';

// Order page - payment tab
$_['text_payment_info']			= 'გადახდის ინფორმაცია';
$_['text_order_total']			= 'სულ უფლებამოსილი';
$_['text_transactions']			= 'გარიგებები';
$_['text_column_transactionid'] = 'eWAY ტრანზაქციის ID';
$_['text_column_amount']		= 'თანხა';
$_['text_column_type']			= 'ტიპი';
$_['text_column_created']		= 'შექმნილია';
$_['text_total_captured']		= 'სულ ტყვედ';
$_['text_capture_status']		= 'გადახდა დაიპყრო';
$_['text_void_status']			= 'გადახდა გაუქმდა';
$_['text_refund_status']		= 'გადახდა დააბრუნეს';
$_['text_total_refunded']		= 'სულ დაბრუნდა';
$_['text_refund_success']		= 'დაბრუნება დაბრუნდა !';
$_['text_capture_success']		= 'Capture წარმატებით გაიარა !';
$_['text_refund_failed']		= 'თანხის დაბრუნება ვერ მოხერხდა:';
$_['text_capture_failed']		= 'ხელში ჩაგდება ვერ მოხერხდა:';
$_['text_unknown_failure']		= 'არასწორი შეკვეთა ან თანხა';

$_['text_confirm_capture']		= 'დარწმუნებული ხართ, რომ გსურთ გადაიხადოთ გადახდის ?';
$_['text_confirm_release']		= 'დარწმუნებული ხართ, რომ გსურთ გაათავისუფლოთ გადახდის ?';
$_['text_confirm_refund']		= 'დარწმუნებული ხართ, რომ გსურთ გადახდილი გადახდა ?';

$_['text_empty_refund']			= 'გთხოვთ შეიყვანოთ თანხის დაბრუნება';
$_['text_empty_capture']		= 'გთხოვთ, შეიტანოთ თანხის აღრიცხვა';

$_['btn_refund']				= 'დაბრუნება';
$_['btn_capture']				= 'ხელში';

// Validation Error codes
$_['text_card_message_V6000']	= 'Undefined Validation შეცდომა';
$_['text_card_message_V6001'] 	= 'არასწორი მომხმარებელთა IP';
$_['text_card_message_V6002'] 	= 'არასწორია DeviceID';
$_['text_card_message_V6011'] 	= 'არასწორი თანხა';
$_['text_card_message_V6012'] 	= 'არასწორი ინვოისის აღწერა';
$_['text_card_message_V6013'] 	= 'არასწორი ფაქტურა ნომერი';
$_['text_card_message_V6014'] 	= 'არასწორი ფაქტურა Reference';
$_['text_card_message_V6015'] 	= 'არასწორი ვალუტის კოდექსი';
$_['text_card_message_V6016'] 	= 'გადახდა აუცილებელია';
$_['text_card_message_V6017'] 	= 'გადახდა ვალუტის გადახდის ვალდებულება';
$_['text_card_message_V6018'] 	= 'უცნობია გადახდის ვალუტა კოდექსი';
$_['text_card_message_V6021'] 	= 'ბარათის მფლობელის სახელი საჭიროა';
$_['text_card_message_V6022'] 	= 'ბარათის ნომერი საჭიროა';
$_['text_card_message_V6023'] 	= 'საჭიროა CVN';
$_['text_card_message_V6031'] 	= 'არასწორი ბარათის ნომერი';
$_['text_card_message_V6032'] 	= 'არასწორი CVN';
$_['text_card_message_V6033'] 	= 'არასწორი ვადის გასვლის თარიღი';
$_['text_card_message_V6034'] 	= 'არასწორი გამოცდის ნომერი';
$_['text_card_message_V6035'] 	= 'არასწორი დაწყების თარიღი';
$_['text_card_message_V6036'] 	= 'არასწორი თვე';
$_['text_card_message_V6037'] 	= 'არასწორი წელი';
$_['text_card_message_V6040'] 	= 'არასწორი საქაღალდის აბონენტის Id';
$_['text_card_message_V6041'] 	= 'საჭიროა კლიენტი';
$_['text_card_message_V6042'] 	= 'კლიენტის პირველი სახელი საჭიროა';
$_['text_card_message_V6043'] 	= 'სამომხმარებლო ბოლო სახელი საჭიროა';
$_['text_card_message_V6044'] 	= 'სამომხმარებლო ქვეყნის კოდი საჭირო';
$_['text_card_message_V6045'] 	= 'კლიენტის სათაური საჭიროა';
$_['text_card_message_V6046'] 	= 'ქეშის სამომხმარებლო ID საჭიროა';
$_['text_card_message_V6047'] 	= 'საჭიროა RedirectURL';
$_['text_card_message_V6051'] 	= 'არასწორი სახელი';
$_['text_card_message_V6052'] 	= 'არასწორი გვარი';
$_['text_card_message_V6053'] 	= 'ქვეყნის კოდი არასწორია';
$_['text_card_message_V6054'] 	= 'არასწორი ელ. ფოსტა';
$_['text_card_message_V6055'] 	= 'არასწორი ტელეფონი';
$_['text_card_message_V6056'] 	= 'არასწორი მობილური';
$_['text_card_message_V6057'] 	= 'არასწორი ფაქსი';
$_['text_card_message_V6058'] 	= 'არასწორი სათაური';
$_['text_card_message_V6059'] 	= 'გადამისამართებული URL არასწორია';
$_['text_card_message_V6060'] 	= 'გადამისამართებული URL არასწორია';
$_['text_card_message_V6061'] 	= 'არასწორი მითითება';
$_['text_card_message_V6062'] 	= 'კომპანიის სახელი არასწორია';
$_['text_card_message_V6063'] 	= 'სამუშაოს აღწერა არასწორია';
$_['text_card_message_V6064'] 	= 'არასწორი Street1';
$_['text_card_message_V6065'] 	= 'არასწორი Street2';
$_['text_card_message_V6066'] 	= 'ქალაქი არასწორია';
$_['text_card_message_V6067'] 	= 'არასწორი სახელმწიფო';
$_['text_card_message_V6068'] 	= 'არასწორი საფოსტო კოდი';
$_['text_card_message_V6069'] 	= 'არასწორი ელ. ფოსტა';
$_['text_card_message_V6070'] 	= 'არასწორი ტელეფონი';
$_['text_card_message_V6071'] 	= 'არასწორი მობილური';
$_['text_card_message_V6072'] 	= 'არასწორი კომენტარები';
$_['text_card_message_V6073'] 	= 'არასწორი ფაქსი';
$_['text_card_message_V6074'] 	= 'არასწორი ლინკი';
$_['text_card_message_V6075'] 	= 'არასწორი გადაზიდვის მისამართი პირველი სახელი';
$_['text_card_message_V6076'] 	= 'არასწორი მიწოდება მისამართი გვარი';
$_['text_card_message_V6077'] 	= 'არასწორი მიწოდება Address Street1';
$_['text_card_message_V6078'] 	= 'არასწორი მიწოდება Address Street2';
$_['text_card_message_V6079'] 	= 'არასწორი გადაზიდვების მისამართი ქალაქი';
$_['text_card_message_V6080'] 	= 'არასწორი გადაზიდვების მისამართი';
$_['text_card_message_V6081'] 	= 'არასწორი მიწოდება მისამართი საფოსტო კოდი';
$_['text_card_message_V6082'] 	= 'არასწორი მიწოდება მისამართი ელ';
$_['text_card_message_V6083'] 	= 'არასწორი მიწოდება მისამართი ტელეფონი';
$_['text_card_message_V6084'] 	= 'არასწორი გადაზიდვების მისამართი ქვეყანა';
$_['text_card_message_V6091'] 	= 'უცნობი ქვეყნის კოდი';
$_['text_card_message_V6100'] 	= 'ბარათის სახელი არასწორია';
$_['text_card_message_V6101'] 	= 'არასწორი ბარათის ვადის გასვლის თვე';
$_['text_card_message_V6102'] 	= 'ბარათის ვადის გასვლის წელი';
$_['text_card_message_V6103'] 	= 'ბარათის დაწყება არასწორია';
$_['text_card_message_V6104'] 	= 'ბარათის დაწყება არასწორია';
$_['text_card_message_V6105'] 	= 'ბარათის ნომერი არასწორია';
$_['text_card_message_V6106'] 	= 'ბარათის არასწორი ბარათი CVN';
$_['text_card_message_V6107'] 	= 'არასწორი AccessCode';
$_['text_card_message_V6108'] 	= 'არასწორი მომხმარებელი';
$_['text_card_message_V6109'] 	= 'არასწორი UserAgent';
$_['text_card_message_V6110'] 	= 'არასწორი ბარათის ნომერი';
$_['text_card_message_V6111'] 	= 'არასანქცირებული API წვდომა, ანგარიში არ არის PCI Certified';
$_['text_card_message_V6112'] 	= 'გადაჭარბებული ბარათის მონაცემები, გარდა გასული წლის და თვის';
$_['text_card_message_V6113'] 	= 'დაბრუნების სანაცვლოდ არასწორი ტრანზაქცია';
$_['text_card_message_V6114'] 	= 'Gateway Validation შეცდომა';
$_['text_card_message_V6115'] 	= 'არასწორი DirectRefundRequest, გარიგების ID';
$_['text_card_message_V6116'] 	= 'ბარათის მონაცემები არასწორია TransactionID- ის შესახებ';
$_['text_card_message_V6124'] 	= 'არასწორი ხაზის ელემენტი. ხაზის ელემენტები უზრუნველყოფილია, თუმცა ტოტალიზატორის მთლიანი თანხა არ ემთხვევა';
$_['text_card_message_V6125'] 	= 'არჩეული გადახდის ტიპი არ არის ჩართული';
$_['text_card_message_V6126'] 	= 'არასწორი დაშიფრული ბარათის ნომერი, დეშიფრაცია ვერ მოხერხდა';
$_['text_card_message_V6127'] 	= 'არასწორი დაშიფრული cvn, დეშიფრაცია ვერ მოხერხდა';
$_['text_card_message_V6128'] 	= 'გადახდის მეთოდის არასწორი მეთოდი';
$_['text_card_message_V6129'] 	= 'ტრანზაქცია არ ექვემდებარება გადაფარვას /გაუქმებას';
$_['text_card_message_V6130'] 	= 'ზოგადი მომხმარებლის ინფორმაციის შეცდომა';
$_['text_card_message_V6131'] 	= 'ზოგადი გადაზიდვის ინფორმაციის შეცდომა';
$_['text_card_message_V6132'] 	= 'ტრანზაქცია უკვე დასრულებულია ან გაუქმდა, ოპერაცია ნებადართული არ არის';
$_['text_card_message_V6133'] 	= 'გადახდა არ არის ხელმისაწვდომი გადახდაზე';
$_['text_card_message_V6134'] 	= 'ძალადაკარგულად ჩაითვლება ავტორიზაციის გარიგება ID';
$_['text_card_message_V6135'] 	= 'PayPal შეცდომის დამუშავების პროცესი';
$_['text_card_message_V6140'] 	= 'მერჩანტის ანგარიში შეჩერებულია';
$_['text_card_message_V6141'] 	= 'არასწორი PayPal ანგარიშის დეტალები ან API ხელმოწერა';
$_['text_card_message_V6142'] 	= 'ავტორიზაცია არ არის ხელმისაწვდომი ბანკი /ფილიალი';
$_['text_card_message_V6150'] 	= 'არასწორი დაბრუნების თანხა';
$_['text_card_message_V6151'] 	= 'ანაბარზე თანხის დაბრუნება';
$_['text_card_message_D4406'] 	= 'უცნობი შეცდომა';
$_['text_card_message_S5010'] 	= 'უცნობი შეცდომა';