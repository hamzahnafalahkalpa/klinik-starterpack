<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'disease.';
$prefix_directory = 'disease';

return [
    'alias'           => $prefix.'classification.index',
    'name'            => 'Disease Classification', 
    'props'           => [
        'icon'        => 'medical-icon:i-physical-therapy',
        'directory'   => "$prefix_directory/classification",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Disease Classification',
            'alias'      => $prefix.'classification.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Disease Classification',
            'alias'      => $prefix.'classification.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Disease Classification Detail',
            'alias'      => $prefix.'classification.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Disease Classification',
            'alias'      => $prefix.'classification.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
