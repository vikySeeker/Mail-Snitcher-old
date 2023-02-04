<?php

require_once 'config.php';

if (isset($_SESSION['user_token'])) {
    header("Location: /success.php");
    die();
} else {
    header("Location: ".$client->createAuthUrl());
    die();
}
