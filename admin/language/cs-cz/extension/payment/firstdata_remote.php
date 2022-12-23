<?php
// Heading
$_['heading_title']					 = 'První data API pro webovou službu EMEA';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Rozšíření';
$_['text_success']					 = 'Úspěšnost: Upravili jste údaje účtu First Data!';
$_['text_edit']                      = 'Upravit první data EMEA Web Service API';
$_['text_card_type']				 = 'Typ karty';
$_['text_enabled']					 = 'Povoleno';
$_['text_merchant_id']				 = 'ID obchodu';
$_['text_subaccount']				 = 'Podúčte';
$_['text_user_id']					 = 'uživatelské ID';
$_['text_capture_ok']				 = 'Capture byl úspěšný';
$_['text_capture_ok_order']			 = 'Capture byl úspěšný, stav objednávky byl úspěšně aktualizován - uspokojen';
$_['text_refund_ok']				 = 'Vrácení platby bylo úspěšné';
$_['text_refund_ok_order']			 = 'Vrácení platby bylo úspěšné, stav objednávky byl aktualizován a vrácen';
$_['text_void_ok']					 = 'Neplatnost byla úspěšná a stav objednávky byl aktualizován';
$_['text_settle_auto']				 = 'Prodej';
$_['text_settle_delayed']			 = 'Pre aut';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'Vízum';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Informace o platbě';
$_['text_capture_status']			 = 'Zaplacená platba';
$_['text_void_status']				 = 'Platba byla zrušena';
$_['text_refund_status']			 = 'Platba byla vrácena';
$_['text_order_ref']				 = 'Objednávka ref';
$_['text_order_total']				 = 'Celkem schváleno';
$_['text_total_captured']			 = 'Celkem zachyceno';
$_['text_transactions']				 = 'Transakce';
$_['text_column_amount']			 = 'Množství';
$_['text_column_type']				 = 'Typ';
$_['text_column_date_added']		 = 'Vytvořeno';
$_['text_confirm_void']				 = 'Opravdu chcete zrušit platbu?';
$_['text_confirm_capture']			 = 'Opravdu chcete zachytit platbu?';
$_['text_confirm_refund']			 = 'Opravdu chcete vrátit platbu?';

// Entry
$_['entry_certificate_path']		 = 'Cesta certifikátu';
$_['entry_certificate_key_path']	 = 'Soukromá cesta klíče';
$_['entry_certificate_key_pw']		 = 'Heslo soukromého klíče';
$_['entry_certificate_ca_path']		 = 'Cesta CA';
$_['entry_merchant_id']				 = 'ID obchodu';
$_['entry_user_id']					 = 'uživatelské ID';
$_['entry_password']				 = 'Heslo';
$_['entry_total']					 = 'Celkový';
$_['entry_sort_order']				 = 'Řazení pořadí';
$_['entry_geo_zone']				 = 'Geo zóna';
$_['entry_status']					 = 'Postavení';
$_['entry_debug']					 = 'Ladění protokolování';
$_['entry_auto_settle']				 = 'Typ vyrovnání';
$_['entry_status_success_settled']	 = 'Úspěšně vyřešeno';
$_['entry_status_success_unsettled'] = 'Úspěch - neuskutečněný';
$_['entry_status_decline']			 = 'Pokles';
$_['entry_status_void']				 = 'Zrušeno';
$_['entry_status_refund']			 = 'Vráceno';
$_['entry_enable_card_store']		 = 'Aktivujte žetony ukládání karet';
$_['entry_cards_accepted']			 = 'Typy karet jsou akceptovány';

// Help
$_['help_total']					 = 'Pokladna celkově musí být před odesláním této platební metody aktivní';
$_['help_certificate']				 = 'Certifikáty a soukromé klíče by měly být uloženy mimo vaše veřejné webové složky';
$_['help_card_select']				 = 'Požádejte uživatele, aby si zvolil svůj typ karty předtím, než bude přesměrován';
$_['help_notification']				 = 'Tuto adresu URL musíte poskytnout společnosti First Data k zasílání oznámení o platbách';
$_['help_debug']					 = 'Povolením ladění budou zapisovány citlivé údaje do souboru protokolu. Vždy byste měli vypnout, pokud nebudete instruován jinak.';
$_['help_settle']					 = 'Pokud používáte předběžnou autorizaci, musíte do 3-5 dnů dokončit akci post-auth, jinak se vaše transakce zruší';

// Tab
$_['tab_account']					 = 'Informace o rozhraní API';
$_['tab_order_status']				 = 'Stav objednávky';
$_['tab_payment']					 = 'Nastavení plateb';

// Button
$_['button_capture']				 = 'Zachyťte';
$_['button_refund']					 = 'Vrácení platby';
$_['button_void']					 = 'Neplatné';

// Error
$_['error_merchant_id']				 = 'ID obchodu je povinné';
$_['error_user_id']					 = 'Je vyžadováno ID uživatele';
$_['error_password']				 = 'Heslo je vyžadováno';
$_['error_certificate']				 = 'Je vyžadována cesta certifikátu';
$_['error_key']						 = 'Klíč certifikátu je vyžadován';
$_['error_key_pw']					 = 'Je vyžadováno heslo klíče certifikátu';
$_['error_ca']						 = 'Certifikační úřad (CA) je povinný';