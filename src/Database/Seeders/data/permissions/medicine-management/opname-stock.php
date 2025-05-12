<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Opname Stock',
    'alias'           => $prefix . 'opname-stock.index',
    'props'           => [
        'icon'        => 'tabler:building-warehouse',
        'directory'   => "$prefix_directory/opname-stock"
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add & Edit Opname',
            'alias'      => $prefix . 'opname-stock.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Delete Opname',
            'alias'      => $prefix . 'opname-stock.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
