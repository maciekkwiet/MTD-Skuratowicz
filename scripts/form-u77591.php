<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.1.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Kontakt RU Form zgłoszenie',
	'heading' => 'Przesłano nowy formularz',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Zaznaczone',
		'checkbox_unchecked' => 'Niezaznaczone',
		'submitted_from' => 'Formularz wysłany z witryny:%s',
		'submitted_by' => 'Adres IP gościa:%s',
		'too_many_submissions' => 'Z tego IP przesłano ostatnio zbyt wiele zgłoszeń',
		'failed_to_send_email' => 'Nie udało się wysłać wiadomości e-mail',
		'invalid_reCAPTCHA_private_key' => 'Nieprawidłowy klucz prywatny reCAPTCHA.',
		'invalid_reCAPTCHA2_private_key' => 'Nieprawidłowy klucz prywatny reCAPTCHA 2.0.',
		'invalid_reCAPTCHA2_server_response' => 'Nieprawidłowa odpowiedź serwera reCAPTCHA 2.0.',
		'invalid_field_type' => 'Nieznany typ pola „%s”.',
		'invalid_form_config' => 'Pole „%s” ma nieprawidłową konfigurację.',
		'unknown_method' => 'Nieznana metoda żądania serwera'
	),
	'email' => array(
		'from' => 'mtd@mtdskuratowicz.com.pl',
		'to' => 'mtd@mtdskuratowicz.com.pl'
	),
	'recaptcha2' => array(
		'private_key' => '6LcvBUEaAAAAAOP3XYARli7-Nzeec6IoKUawOn0T'
	),
	'fields' => array(
		'custom_U77592' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'имя',
			'required' => true,
			'errors' => array(
				'required' => 'Pole „имя” jest wymagane.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Электронная почта',
			'required' => true,
			'errors' => array(
				'required' => 'Pole „Электронная почта” jest wymagane.',
				'format' => 'Adres e-mail znajdujący się w polu „Электронная почта” jest nieprawidłowy.'
			)
		),
		'custom_U77598' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'сообщение',
			'required' => false,
			'errors' => array(
			)
		),
		'g-recaptcha-response' => array(
			'order' => 4,
			'type' => 'recaptcha2',
			'label' => 'Weryfikacja obrazów',
			'required' => true,
			'errors' => array(
				'required' => 'Pole „Weryfikacja obrazów” jest wymagane.',
				'format' => 'Nieprawidłowa wartość reCAPTCHA 2.0.'
			)
		)
	)
);

process_form($form);
?>
