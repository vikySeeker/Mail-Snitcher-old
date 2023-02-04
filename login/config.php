<?php

require_once '../vendor/autoload.php';

session_start();

// init configuration
// $clientID = '766022450783-4iah38mgaqms5ls7d579o9vqm52ald63.apps.googleusercontent.com';
// $clientSecret = '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';
// $redirectUri = 'http://localhost/success.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setAuthConfig("../credentials.json");
$client->addScope("email");
$client->addScope("https://www.googleapis.com/auth/gmail.readonly");
$client->addScope("profile");
