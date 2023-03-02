<?php

require_once __DIR__."/../__configs/telegram/config.php";

use Telegram\Bot\Api;

$token = Telegram::getToken();
$base_url = "https://api.telegram.com/bot".$token;

$telegram = new Api($token);

$data=file_get_contents("php://input");
if (!$data) {
    echo "Error Occured";
    die();
}

$data = json_decode($data, true);
$chatID = $data['message']['from']['id'];
$username = $data['message']['from']['username'];
$message = $data['message']['text'];

switch($message) {
    case '/start':
        $params = [
            "chat_id"=>$chatID,
            "text"=>"hi, $username",
        ];
        $telegram->sendMessage($params);
        break;
    case '/show_new_mail':
        $params = [
            "chat_id"=>$chatID,
            "text"=>"hi, $username\nThis will shows you recent email with body",
        ];
        $telegram->sendMessage($params);
        break;
    case '/list_keyword':
        $params = [
            "chat_id"=>$chatID,
            "text"=>"hi, $username\nThis will return you list of keywords you added to our service",
        ];
        $telegram->sendMessage($params);
        break;
    default:
        $params = [
            "chat_id"=>$chatID,
            "text"=>"hi, $username you didn't specify any commands!",
        ];
        $telegram->sendMessage($params);
        break;
}

die();


/* $data = <<<jsonData
    "ok": true,
    "result": [
        {
            "update_id": 496519153,
            "message": {
                "message_id": 10,
                "from": {
                    "id": 942136206,
                    "is_bot": false,
                    "first_name": "Viky",
                    "username": "vignesh_magalingam",
                    "language_code": "en"
                },
                "chat": {
                    "id": 942136206,
                    "first_name": "Viky",
                    "username": "vignesh_magalingam",
                    "type": "private"
                },
                "date": 1676022416,
                "text": "/show_new_mail",
                "entities": [
                    {
                        "offset": 0,
                        "length": 14,
                        "type": "bot_command"
                    }
                ]
            }
        }
    ]
});
jsonData; */
