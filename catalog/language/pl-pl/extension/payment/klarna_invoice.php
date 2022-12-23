<?php
// Text
$_['text_title']				= 'Faktura Klarna - Płatność w terminie 14 dni';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script></span>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Faktura Klarna wymaga dodatkowych informacji, zanim będzie mogła przetworzyć zamówienie.';
$_['text_male']					= 'Męski';
$_['text_female']				= 'Płeć żeńska';
$_['text_year']					= 'Rok';
$_['text_month']				= 'Miesiąc';
$_['text_day']					= 'Dzień';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Płeć';
$_['entry_pno']					= 'Numer osobisty';
$_['entry_dob']					= 'Data urodzenia';
$_['entry_phone_no']			= 'Numer telefonu';
$_['entry_street']				= 'Ulica';
$_['entry_house_no']			= 'House No.';
$_['entry_house_ext']			= 'Dom zew.';
$_['entry_company']				= 'Numer rejestracyjny firmy';

// Help
$_['help_pno']					= 'Podaj swój numer ubezpieczenia społecznego tutaj.';
$_['help_phone_no']				= 'Proszę podać swój numer telefonu.';
$_['help_street']				= 'Należy pamiętać, że dostawa może odbywać się wyłącznie na zarejestrowany adres przy płatności w Klarna.';
$_['help_house_no']				= 'Proszę podać numer domu.';
$_['help_house_ext']			= 'Tutaj prześlij swoje rozszerzenie domu. Na przykład. A, B, C, czerwony, niebieski ect.';
$_['help_company']				= 'Podaj swój numer rejestracyjny firmy';

// Error
$_['error_deu_terms']			= 'Musisz wyrazić zgodę na politykę prywatności Klarna (Datenschutz)';
$_['error_address_match']		= 'Adresy rozliczeniowe i wysyłki muszą być zgodne, jeśli chcesz używać faktury Klarna';
$_['error_network']				= 'Wystąpił błąd podczas łączenia z Klarną. Spróbuj ponownie później.';