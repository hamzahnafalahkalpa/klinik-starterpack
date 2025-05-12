<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.';
$prefix_directory = 'infrastructure';

return         [
    'name'       => 'Room Classification Level', 
    'alias'      => $prefix.'room-classification.index',
    'props'      => [
        'icon'        => 'tabler:vip',
        'directory'   => "$prefix_directory/room-classification",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Room Class',
            'alias'      => $prefix.'room-classification.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Room Class',
            'alias'      => $prefix.'room-classification.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Room Class', 
            'alias'      => $prefix.'room-classification.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Room Class', 
            'alias'      => $prefix.'room-classification.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

