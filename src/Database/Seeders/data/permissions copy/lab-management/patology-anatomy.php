<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';
$prefix_directory = 'lab-management';

return [
    'name'       => 'Master Pathology Anatomy', 
    'alias'      => 'pathology-anatomy',
    'icon'        => 'game-icons:anatomy',
    'directory'   => $prefix_directory.'/pathology-anatomy',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Pathology Anatomy',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Pathology Anatomy',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Pathology Anatomy',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Pathology Anatomy', 
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
