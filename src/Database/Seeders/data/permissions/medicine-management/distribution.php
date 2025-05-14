<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Medical Item Distribution',
    'alias'           => 'distribution.index',
    'icon'        => 'lsicon:distribution-filled',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Distribution',
            'alias'      => 'distribution.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Show Distribution',
            'alias'      => 'distribution.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Report Distribution',
            'alias'      => 'distribution.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Distribution',
            'alias'      => 'distribution.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
