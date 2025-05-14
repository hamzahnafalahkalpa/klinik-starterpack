<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'component.';
$prefix_directory = 'component';

return [
    'name'            => 'Profession Fee', 
    'alias'           => 'profession-fee.index',
    'icon'        => 'solar:wallet-money-bold',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Manage Profession Fee',
            'alias'      => 'profession-fee.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

