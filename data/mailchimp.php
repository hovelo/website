<?php

$mc = new Mailchimp($config['mailchimp']['api_key']);
$campaigns = $mc->campaigns->getList(array('status'=>'sent'));

foreach($campaigns['data'] as $i => $c) {
	$date = new DateTime($c['send_time']);
	$data['campaigns'][] = array(
		'subject' => $c['subject'],
		'archive_url' => $c['archive_url'],
		'date_sent' => $date->format('jS F Y')
	);
}

return $data;