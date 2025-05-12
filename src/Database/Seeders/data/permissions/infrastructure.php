<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Infrastructure Management',
    'alias'      => $prefix.'infrastructure.',
    'props'      => [
        'icon'       => 'bi:buildings-fill',
        'directory'  => 'infrastructure'
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/infrastructure/building.php'),
        include(__DIR__.'/infrastructure/room.php'),
        include(__DIR__.'/infrastructure/room-class.php')
    ]
];

