<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Medical Item Distribution',
    'alias'           => $prefix . 'distribution.index',
    'props'           => [
        'icon'        => 'lsicon:distribution-filled',
        'directory'   => "$prefix_directory/distribution"
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Distribution',
            'alias'      => $prefix . 'distribution.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Show Distribution',
            'alias'      => $prefix . 'distribution.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Report Distribution',
            'alias'      => $prefix . 'distribution.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Distribution',
            'alias'      => $prefix . 'distribution.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
