<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Inventory Data Management', 
    'alias'           => $prefix.'inventory-data.index',
    'props'           => [
        'icon'        => 'tabler:building-warehouse',
        'directory'   => "$prefix_directory/inventory-data",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Inventory Data',
            'alias'      => $prefix.'inventory-data.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Inventory Data',
            'alias'      => $prefix.'inventory-data.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Inventory Data Detail',
            'alias'      => $prefix.'inventory-data.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Inventory Data',
            'alias'      => $prefix.'inventory-data.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
