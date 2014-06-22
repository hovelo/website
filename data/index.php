<?php

include dirname(__FILE__) . '/../vendor/autoload.php';
$config = require dirname(__FILE__) . '/config.php';
$file = 'data.json';

$data['strava'] = require dirname(__FILE__) . '/strava.php';
$data['mailchimp'] = require dirname(__FILE__) . '/mailchimp.php';

$data = json_encode($data);
file_put_contents($file, $data);