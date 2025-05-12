<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'organization.';
$prefix_directory = 'organization';

return [
    'name'            => 'Boat Management', 
    'alias'           => $prefix.'boat.index',
    'props'           => [
        'icon'        => 'mdi:boat',
        'directory'   => "$prefix_directory/boat",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Boat',
            'alias'      => $prefix.'boat.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Boat',
            'alias'      => $prefix.'boat.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Boat',
            'alias'      => $prefix.'boat.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Boat',
            'alias'      => $prefix.'boat.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
