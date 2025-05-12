<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'component.';
$prefix_directory = 'component';

return [
    'name'            => 'Profession Fee', 
    'alias'           => $prefix.'profession-fee.index',
    'props'           => [
        'icon'        => 'solar:wallet-money-bold',
        'directory'   => "$prefix_directory/profession-fee",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Manage Profession Fee',
            'alias'      => $prefix.'profession-fee.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

