<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'lab-management.';
$prefix_directory = 'lab-management';

return [
    'name'       => 'Clinical Pathology Master', 
    'alias'      => 'patology-clinic',
    
        'icon'        => 'entypo:lab-flask',
        'directory'   => $prefix_directory.'/patology-clinic',
        'show_in_acl' => true,
        'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Clinical Pathology',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Clinical Pathology',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'View Clinical Pathology',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Clinical Pathology',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
