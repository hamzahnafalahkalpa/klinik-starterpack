<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'component.';
$prefix_directory = 'component';

return [
    'name'        => 'Profession Fee', 
    'alias'       => 'profession-fee',
    'icon'        => 'solar:wallet-money-bold',
    'show_in_acl' => true,
    'type'        => Type::MENU->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Manage Profession Fee',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

