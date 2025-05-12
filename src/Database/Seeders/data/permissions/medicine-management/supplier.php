<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Supplier Data',
    'alias'           => $prefix . 'supplier.index',
    'props'           => [
        'icon'        => 'lsicon:distribution-filled',
        'directory'   => "$prefix_directory/supplier"
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add & Edit Supplier',
            'alias'      => $prefix . 'supplier.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Delete Supplier',
            'alias'      => $prefix . 'supplier.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
