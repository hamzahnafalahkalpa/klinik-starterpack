<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'component.';
$prefix_directory = 'component';

return [
    'name'            => 'Tariff Component Management', 
    'alias'           => $prefix.'tariff-component.index',
    'props'           => [
        'icon'        => 'healthicons:coins',
        'directory'   => "$prefix_directory/tariff-component",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Tariff Component',
            'alias'      => $prefix.'tariff-component.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Tariff Component',
            'alias'      => $prefix.'tariff-component.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Tariff Component', 
            'alias'      => $prefix.'tariff-component.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

