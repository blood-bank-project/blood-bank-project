<?php
require_once 'library/vendor/autoload.php';
$clientID = '693978443108-ujibd2jjr46ml0qu6n22lqc4ld0pfbrd.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/blood-bank-management-system/donor/index.php';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
$client->setPrompt("consent"); // Add this line to force the consent screen

require "backend/connect.php";
?>