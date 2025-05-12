<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.room.';
$prefix_directory = 'infrastructure/room';

return [
    'name'       => 'Room User Mapping', 
    'alias'      => $prefix.'mapping.index',
    'props'      => [
        'icon'       => 'oui:index-mapping',
        'directory'  => "$prefix_directory/mapping",
        'show_in_acl' => true
    ], 
    'type'  => Type::MODULE->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Room User',
            'alias'      => $prefix.'room.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Room User',
            'alias'      => $prefix.'room.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Room User',
            'alias'      => $prefix.'room.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
