<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Kiosk Management', 
    'alias'           => 'kiosk.index',
    'icon'        => 'fluent:kiosk-24-regular',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Kiosk',
            'alias'      => 'kiosk.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Kiosk',
            'alias'      => 'kiosk.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Kiosk Detail',
            'alias'      => 'kiosk.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Kiosk',
            'alias'      => 'kiosk.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

