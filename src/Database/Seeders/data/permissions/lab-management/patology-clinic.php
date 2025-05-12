<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'lab-management.';
$prefix_directory = 'lab-management';

return [
    'name'       => 'Clinical Pathology Master', 
    'alias'      => $prefix.'patology-clinic.index',
    'props'      => [
        'icon'        => 'entypo:lab-flask',
        'directory'   => $prefix_directory.'/patology-clinic',
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Clinical Pathology',
            'alias'      => $prefix.'patology-clinic.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Clinical Pathology',
            'alias'      => $prefix.'patology-clinic.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'View Clinical Pathology',
            'alias'      => $prefix.'patology-clinic.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Clinical Pathology',
            'alias'      => $prefix.'patology-clinic.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
