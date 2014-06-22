<?php

use Dirtproof\Strapha\Wrapper;
use Dirtproof\Strapha\Cache\ResponseCache;
use Doctrine\Common\Cache\FilesystemCache;

$strava = new Wrapper($config['strava']['example_token']);
$club = $strava->getClub($config['strava']['club_id']);
$clubMembers = $strava->getClubMembers($config['strava']['club_id']);

$data['club'] = array(
	'id' => $club['id'],
	'title' => $club['name'],
	'url' => sprintf('http://www.strava.com/clubs/%s', $club['id']),
	'profile_picture' => $club['profile']
);

foreach($clubMembers as $i => $m) {
	$data['members'][] = array(
		'name' => sprintf('%s %s', $m['firstname'], $m['lastname']),
		'id' => $m['id'],
		'url' => sprintf('http://www.strava.com/athletes/%s', $m['id']),
		'profile_pic' => $m['profile']
	);
}

return $data;