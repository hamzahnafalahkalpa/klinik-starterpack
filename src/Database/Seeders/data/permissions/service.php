<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Service Management', 
    'alias'          => $prefix.'service.',
    'props'          => [
        'icon'       => 'ri:service-line',
        'directory'  => 'service'
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/service/medic-service.php'),
        include(__DIR__.'/service/mcu.php'),
    ]
];

