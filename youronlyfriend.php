<?php

require('yo.php');

$apiKey = 'YOUR_API_KEY';

$yo = new Yo($apiKey);

// wait a bit to seem a little more human :'(
$min_wait_time = 5;
$max_wait_time = 15;
sleep(rand($min_wait_time,$max_wait_time));

$username = htmlspecialchars($_GET["username"]);
$yo->user($username);

?>