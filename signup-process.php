<?php

	include dirname(__FILE__) . '/vendor/autoload.php';
	$config = require dirname(__FILE__) . '/data/config.php';

	$mc = new Mailchimp($config['mailchimp']['api_key']);

	$email = $_POST['email'];

	header('Content-Type: application/json');

	try {
		$return = $mc->lists->subscribe(
			'74cc8e85b3',
			array('email' => $email)
		);
		echo json_encode(array_merge(array('success' => true), $return));
	} catch (Exception $e) {
		echo json_encode(array('error' => $e->getMessage()));
	}