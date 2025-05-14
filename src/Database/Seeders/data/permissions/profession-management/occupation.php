<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'profession-management.occupation.';
$prefix_directory = 'profession-management/occupation';

return [
    'name'            => 'Occupation Management',
    'alias'           => 'index',
    'icon'        => 'mdi:briefcase-outline',
    'show_in_acl' => true,
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Occupation',
            'alias'      => 'add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
        ],
        [
            'name'       => 'Update Occupation',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Occupation',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Occupation',
            'alias'      => 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
