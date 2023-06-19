<?php

require_once __DIR__ . '/vendor/autoload.php';
$settings = require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/functions.php';

$body = "<h1>Письмо с сайта</h1>\n
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, esse ipsa itaque laudantium necessitatibus reprehenderit soluta? A accusamus alias aliquid, eius enim ipsum maxime mollitia perferendis quae, quod, suscipit unde?";

$attachments = [
    __DIR__ . '/img/4.jpg',
    __DIR__ . '/img/5.jpg',
];

var_dump(send_mail($settings['mail_settings_prod'], ['matroskin9782@gmail.com'], 'Письмо с сайта', $body, $attachments));
