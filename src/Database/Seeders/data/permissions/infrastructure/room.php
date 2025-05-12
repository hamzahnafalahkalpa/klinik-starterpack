<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.';
$prefix_directory = 'infrastructure';

return         [
    'name'       => 'Room Master Data', 
    'alias'      => $prefix.'room.index',
    'props'      => [
        'icon'        => 'fontisto:room',
        'directory'   => "$prefix_directory/room",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Room',
            'alias'      => $prefix.'room.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Room',
            'alias'      => $prefix.'room.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Room', 
            'alias'      => $prefix.'room.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Room', 
            'alias'      => $prefix.'room.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'childs'     => [                
                include(__DIR__.'/room/mapping.php')
            ]
        ]
    ]
];

