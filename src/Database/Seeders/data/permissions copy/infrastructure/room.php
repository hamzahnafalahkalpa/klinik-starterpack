<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.';
$prefix_directory = 'infrastructure';

return         [
    'name'       => 'Room Master Data', 
    'alias'      => 'room',
    'icon'        => 'fontisto:room',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Room',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Room',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Room', 
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Room', 
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'childs'     => [                
                include(__DIR__.'/room/mapping.php')
            ]
        ]
    ]
];

