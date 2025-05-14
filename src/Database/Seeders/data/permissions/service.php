<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Service Management', 
    'alias'          => 'service',
    'icon'       => 'ri:service-line',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/service/medic-service.php'),
        include(__DIR__.'/service/mcu.php'),
    ]
];

