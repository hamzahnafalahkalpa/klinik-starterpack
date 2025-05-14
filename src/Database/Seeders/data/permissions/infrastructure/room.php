<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.';
$prefix_directory = 'infrastructure';

return         [
    'name'       => 'Room Master Data', 
    'alias'      => 'room.index',
    'icon'        => 'fontisto:room',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Room',
            'alias'      => 'room.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Room',
            'alias'      => 'room.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Room', 
            'alias'      => 'room.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Room', 
            'alias'      => 'room.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'childs'     => [                
                include(__DIR__.'/room/mapping.php')
            ]
        ]
    ]
];

