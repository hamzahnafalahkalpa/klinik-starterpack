<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'component.';
$prefix_directory = 'component';

return [
    'name'            => 'Funding Management', 
    'alias'           => $prefix.'funding.index',
    'props'           => [
        'icon'        => 'solar:wallet-money-bold',
        'directory'   => "$prefix_directory/funding",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Funding',
            'alias'      => $prefix.'funding.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Funding',
            'alias'      => $prefix.'funding.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Funding', 
            'alias'      => $prefix.'funding.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

