<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Purchase & Order', 
    'alias'          => 'procurement',
    'icon'           => 'eos-icons:project',
    'directory'      => 'procurement',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__.'/procurement/supplier.php'),
        include(__DIR__.'/procurement/purchase-request.php'),
        include(__DIR__.'/procurement/purchasing.php'),
    ]
];

