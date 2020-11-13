<?php

return [
    'plugin' => [
        'name'        => 'RedirectToHTTPS',
        'description' => 'Простой плагин для переадресации всех запросов на HTTPS.'
    ],
    'settings' => [
        'label'       => 'HTTPS переадресация',
        'description' => 'Управление HTTPS переадресацией.',
        'status_code' => 'Status code'
    ],
    'permissions' => [
        'tab'   => 'RedirectToHTTPS',
        'label' => 'Управление HTTPS переадресацией'
    ]
];
