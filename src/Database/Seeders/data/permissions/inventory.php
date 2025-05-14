<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Inventory Management', 
    'alias'      => 'inventory',
    'icon'       => 'fluent-mdl2:manufacturing',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/inventory/inventory-data.php'),
        include(__DIR__.'/inventory/kiosk.php'),
    ]
];

