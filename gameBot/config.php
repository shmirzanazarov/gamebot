<? session_start();
// header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Tashkent');

define('API_KEY','5501973042:AAG0DvzBsJ8vYs2-67JhR7pkFa57YAuEqlw');
$admin = "1020678098";
$system_pass = "123";
$logging = true; 
$share_btn = [
    'share_btn' => "Do'stlarni taklif qilish 👭",
    'share_text' => "🤩🥳 Salom, biz o'yin boshladik siz ham bizga qo'shiling ?!",
    'share_link' => "https://t.me/game_o_x_bot"
];
$db_mysql = [
    "status" => false,
    "host" => "host",
    "name" => "u6178_darknet",
    "user" => "u6178_darknet",
    "pass" => "darknetuzb02"
];
$comands = [
    [
         'commands' => json_encode([
             ["command" => "/start", "description" => "Botni qayta ishga tushirish."],
             ["command" => "/info", "description" => "Bot faoliyati haqida."],
             ["command" => "/startgame", "description" => "Mavjud barcha o'yinlar."],
         ]),
         'scope' => json_encode([
             'type' => "chat",
             'chat_id' => $admin
         ])
         ],
     [
         'commands' => json_encode([
             ["command" => "/start", "description" => "Botni qayta ishga tushirish."],
             ["command" => "/startgame", "description" => "Mavjud barcha o'yinlar."],
         ]),
         'scope' => json_encode([
             'type' => "all_private_chats"
         ])
     ]
 ];
 $games_list = [
    [
        'list_text' => "Mevalar kartasi ✌️",
        'short_name' => "cards",
        'url' => "https://u6178.xvest4.ru/infomiruz/gameBot/games/cards"
    ],
    [
        'list_text' => "Omadshou Virtual 🏵",
        'short_name' => "omadshou",
        'url' => "https://u6178.xvest4.ru/infomiruz/gameBot/games/omadshou"
    ]
 ];
 $games_name_list = [];
 foreach ($games_list as $game) {
     array_push($games_name_list, $game['short_name']);
 }
