<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';
$prefix_directory = 'lab-management';

return [
    'name'       => 'Master Pathology Anatomy', 
    'alias'      => 'pathology-anatomy.index',
    'icon'        => 'game-icons:anatomy',
    'directory'   => $prefix_directory.'/pathology-anatomy',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Pathology Anatomy',
            'alias'      => 'pathology-anatomy.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Pathology Anatomy',
            'alias'      => 'pathology-anatomy.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Pathology Anatomy',
            'alias'      => 'pathology-anatomy.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Pathology Anatomy', 
            'alias'      => 'pathology-anatomy.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
