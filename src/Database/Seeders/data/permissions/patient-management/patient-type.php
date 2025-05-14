<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'       => 'Patient Type Master', 
    'alias'      => 'patient-type.index',
    'icon'        => 'material-symbols:recent-patient-rounded',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Patient Type',
            'alias'      => 'patient-type.store',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Patient Type',
            'alias'      => 'patient-type.update',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Patient Type', 
            'alias'      => 'patient-type.destroy',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

