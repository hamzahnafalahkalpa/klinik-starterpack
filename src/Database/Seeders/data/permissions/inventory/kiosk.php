<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Kiosk Management', 
    'alias'           => $prefix.'kiosk.index',
    'props'           => [
        'icon'        => 'fluent:kiosk-24-regular',
        'directory'   => "$prefix_directory/kiosk",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Kiosk',
            'alias'      => $prefix.'kiosk.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Kiosk',
            'alias'      => $prefix.'kiosk.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Kiosk Detail',
            'alias'      => $prefix.'kiosk.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Kiosk',
            'alias'      => $prefix.'kiosk.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

