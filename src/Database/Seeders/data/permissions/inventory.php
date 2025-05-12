<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Inventory Management', 
    'alias'      => $prefix.'inventory.',
    'props'      => [
        'icon'       => 'fluent-mdl2:manufacturing',
        'directory'  => 'Inventory'
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/inventory/inventory-data.php'),
        include(__DIR__.'/inventory/kiosk.php'),
    ]
];

