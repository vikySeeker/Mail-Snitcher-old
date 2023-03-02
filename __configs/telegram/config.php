<?php

require_once __DIR__."/../../__telegram/vendor/autoload.php";

class Telegram
{
    private $file_data;
    public static function getToken()
    {
        $file_data = file_get_contents(__DIR__."/../../token.json");
        $file_data = json_decode($file_data, true);
        return $file_data['token'];
    }
}
