<?php

    require 'vendor/autoload.php';
    use Telegram\Bot\Api;
    use Telegram\Bot\Laravel\Facades\Telegram;

    $telegram = new Api('5800666028:AAGspF2LnprvX9D4IPtD_1LlKV0_nlMvARM');

    $response = $telegram->getMe();
    $botId = $response->getId();
    $firstName = $response->getFirstName();
    $username = $response->getUsername();
    $webhook_response = $telegram->removeWebhook();
    $webhook_response = $telegram->setWebhook(['url'=>"https://mail-snitcher.selfmade.technology/botHandler/recieve.php"]);
    print("$response\n$botId\n$firstName\n$username\n$webhook_response\n");
