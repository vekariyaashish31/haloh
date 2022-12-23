<?php
// Heading
$_['heading_title']                           = 'FraudLabs Pro';

// Text
$_['text_fraud']                              = 'ป้องกันการทุจริต';
$_['text_success']                            = 'สำเร็จ: คุณทำการแก้ไข  FraudLabs Pro!';
$_['text_edit']                               = 'การตั้งค่า';
$_['text_signup']                             = 'FraudLabsPro is a fraud detection service. If you don\'t have a API key you can <a href="http://www.fraudlabspro.com/plan?ref=1730" target="_blank"><u>sign up here</u></a>.';
$_['text_id']                                 = 'FraudLabs Pro ID';
$_['text_ip_address']                         = 'IP Address';
$_['text_ip_net_speed']                       = 'IP Net Speed';
$_['text_ip_isp_name']                        = 'IP ISP Name';
$_['text_ip_usage_type']                      = 'IP Usage Type';
$_['text_ip_domain']                          = 'IP Domain';
$_['text_ip_time_zone']                       = 'IP Time Zone';
$_['text_ip_location']                        = 'IP Location';
$_['text_ip_distance']                        = 'IP Distance';
$_['text_ip_latitude']                        = 'IP Latitude';
$_['text_ip_longitude']                       = 'IP Longitude';
$_['text_risk_country']                       = 'ประเทศมีความเสี่ยงสูง';
$_['text_free_email']                         = 'ฟรีอีเมล์';
$_['text_ship_forward']                       = 'Ship Forward';
$_['text_using_proxy']                        = 'Using Proxy';
$_['text_bin_found']                          = 'BIN Found';
$_['text_email_blacklist']                    = 'Email Blacklist';
$_['text_credit_card_blacklist']              = 'Credit Card Blacklist';
$_['text_score']                              = 'FraudLabsPro Score';
$_['text_status']                             = 'FraudLabs Pro สถานะ';
$_['text_message']                            = 'ข้อความ';
$_['text_transaction_id']                     = 'ID การทำธุรกรรม';
$_['text_credits']                     		  = 'ความสมดุล';
$_['text_error']                              = 'ความผิดพลาด:';
$_['text_flp_upgrade']                        = '<a href="http://www.fraudlabspro.com/plan" target="_blank">[Upgrade]</a>';
$_['text_flp_merchant_area']                  = 'Please login to <a href="http://www.fraudlabspro.com/login" target="_blank">FraudLabs Pro Merchant Area</a> for more information about this order.';


// Entry
$_['entry_status']                            = 'สถานะ';
$_['entry_key']                               = 'API Key';
$_['entry_score']                             = 'คะแนนความเสี่ยง';
$_['entry_order_status']                      = 'สถานะ สถานะการสั่งซื้อ';
$_['entry_review_status']                     = 'สถานะ รีวิว';
$_['entry_approve_status']                    = 'สถานะ อนุมัติ';
$_['entry_reject_status']                     = 'สถานะ ปฏิเสธ';
$_['entry_simulate_ip']                       = 'Simulate IP';

// Help
$_['help_order_status']                       = 'Orders that have a score over your set risk score will be assigned this order status and will not be allowed to reach the complete status automatically.';
$_['help_review_status']                      = 'Orders that marked as review by FraudLabs Pro will be assigned this order status.';
$_['help_approve_status']                     = 'Orders that marked as approve by FraudLabs Pro will be assigned this order status.';
$_['help_reject_status']                      = 'Orders that marked as reject by FraudLabs Pro will be assigned this order status.';
$_['help_simulate_ip']                        = 'Simulate the visitor IP address for testing. Leave blank for production run.';
$_['help_fraudlabspro_id']                    = 'Unique identifier to identify a transaction screened by FraudLabs Pro system.';
$_['help_ip_address']                         = 'IP Address.';
$_['help_ip_net_speed']                       = 'Connection speed.';
$_['help_ip_isp_name']                        = 'Estimated ISP of the IP address.';
$_['help_ip_usage_type']                      = 'Estimated usage type of the IP address. E.g, ISP, Commercial, Residential.';
$_['help_ip_domain']                          = 'Estimated domain name of the IP address.';
$_['help_ip_time_zone']                       = 'Estimated time zone of the IP address.';
$_['help_ip_location']                        = 'Estimated location of the IP address.';
$_['help_ip_distance']                        = 'Distance from IP address to Billing Location.';
$_['help_ip_latitude']                        = 'Estimated latitude of the IP address.';
$_['help_ip_longitude']                       = 'Estimated longitude of the IP address.';
$_['help_risk_country']                       = 'Whether IP address or billing address country is in the latest high risk list.';
$_['help_free_email']                         = 'Whether e-mail is from free e-mail provider.';
$_['help_ship_forward']                       = 'Whether shipping address is in database of known mail drops.';
$_['help_using_proxy']                        = 'Whether IP address is from Anonymous Proxy Server.';
$_['help_bin_found']                          = 'Whether the BIN information matches our BIN list.';
$_['help_email_blacklist']                    = 'Whether the email address is in our blacklist database.';
$_['help_credit_card_blacklist']              = 'Whether the credit card is in our blacklist database.';
$_['help_score']                              = 'Risk score, 0 (low risk) - 100 (high risk).';
$_['help_status']                             = 'FraudLabs Pro status.';
$_['help_message']                            = 'FraudLabs Pro error message description.';
$_['help_transaction_id']                     = 'Click the link to view the details fraud analysis.';
$_['help_credits']                            = 'Balance of queries in your account after this transaction.';

// Error
$_['error_permission']                        = 'คำเตือน: คุณไม่ได้รับอนุญาติเข้าแก้ไข การตั้งค่า FraudLabs Pro!';
$_['error_key']		                          = 'คำเตือน: License Key Required!';