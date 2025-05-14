<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.';
$prefix_directory = 'infrastructure';

return         [
    'name'       => 'Room Classification Level', 
    'alias'      => 'room-classification.index',
    'icon'        => 'tabler:vip',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Room Class',
            'alias'      => 'room-classification.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Room Class',
            'alias'      => 'room-classification.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Room Class', 
            'alias'      => 'room-classification.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Room Class', 
            'alias'      => 'room-classification.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

