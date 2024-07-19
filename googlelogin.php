<?php
require_once 'library/vendor/autoload.php';
$clientID = '254373923670-orpf9di5fmjfdjg4jt7pm057i0odkg1r.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/blood-bank-management-system/donor/index.php';


$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

require "backend/connect.php";
?>