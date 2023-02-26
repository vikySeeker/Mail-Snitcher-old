<?php

require_once __DIR__.'/../../__configs/google/config.php';

if (isset($_SESSION['user_token'])) {
    header("Location: http://localhost/app/");
    die();
} else {
    header("Location: ".$client->createAuthUrl());
    die();
}
