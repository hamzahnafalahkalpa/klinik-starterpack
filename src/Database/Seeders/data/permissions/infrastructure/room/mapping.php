<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.room.';
$prefix_directory = 'infrastructure/room';

return [
    'name'       => 'Room User Mapping', 
    'alias'      => 'mapping',
    'icon'       => 'oui:index-mapping',
    'show_in_acl' => true,
    'type'  => Type::MODULE->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Room User',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Room User',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Room User',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
