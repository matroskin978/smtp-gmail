<?php

return [
    'mail_settings_prod' => [
        'host' => 'smtp.gmail.com',
        'auth' => true,
        'port' => 465, // 587
        'secure' => 'ssl', // tls
        'username' => 'your_mail@gmail.com',
        'password' => 'your_password',
        'charset' => 'UTF-8',
        'from_email' => 'your_mail@gmail.com',
        'from_name' => 'Company Name',
        'is_html' => true,
    ],
];
