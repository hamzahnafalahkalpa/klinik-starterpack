<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'       => 'Patient Type Master', 
    'alias'      => $prefix.'patient-type.index',
    'props'      => [
        'icon'        => 'material-symbols:recent-patient-rounded',
        'directory'   => "$prefix_directory/patient-type",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Patient Type',
            'alias'      => $prefix.'patient-type.store',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Patient Type',
            'alias'      => $prefix.'patient-type.update',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Patient Type', 
            'alias'      => $prefix.'patient-type.destroy',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

