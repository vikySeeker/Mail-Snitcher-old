<?php

    require __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../__configs/telegram/config.php';
    use Telegram\Bot\Api;
    use Telegram\Bot\Laravel\Facades\Telegram;

    $token = Telegram::getToken();
    $telegram = new Api($token);

    $response = $telegram->getMe();
    $botId = $response->getId();
    $firstName = $response->getFirstName();
    $username = $response->getUsername();
    $webhook_response = $telegram->removeWebhook();
    $webhook_response = $telegram->setWebhook(['url'=>"https://mail-snitcher.selfmade.technology/botHandler/recieve.php"]);
    print("$response\n$botId\n$firstName\n$username\n$webhook_response\n");
