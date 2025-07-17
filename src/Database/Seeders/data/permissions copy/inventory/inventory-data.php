<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Inventory Data Management', 
    'alias'           => 'inventory-data',
    'icon'        => 'tabler:building-warehouse',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Inventory Data',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Inventory Data',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Inventory Data Detail',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Inventory Data',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
