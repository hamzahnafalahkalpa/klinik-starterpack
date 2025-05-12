<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'profession-management.occupation.';
$prefix_directory = 'profession-management/occupation';

return [
    'name'            => 'Occupation Management',
    'alias'           => $prefix . 'index',
    'props'           => [
        'icon'        => 'mdi:briefcase-outline',
        'directory'   => "$prefix_directory",
        'show_in_acl' => true
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Occupation',
            'alias'      => $prefix . 'add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
        ],
        [
            'name'       => 'Update Occupation',
            'alias'      => $prefix . 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Occupation',
            'alias'      => $prefix . 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Occupation',
            'alias'      => $prefix . 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
