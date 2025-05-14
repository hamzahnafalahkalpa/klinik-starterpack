<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Inventory Data Management', 
    'alias'           => 'inventory-data.index',
    'icon'        => 'tabler:building-warehouse',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Inventory Data',
            'alias'      => 'inventory-data.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Inventory Data',
            'alias'      => 'inventory-data.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Inventory Data Detail',
            'alias'      => 'inventory-data.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Inventory Data',
            'alias'      => 'inventory-data.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
