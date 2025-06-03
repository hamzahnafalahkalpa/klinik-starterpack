<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Patient Visit', 
    'alias'           => 'visit-patient',
    'icon'            => 'healthicons:outpatient-department',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [        
        [
            'name'       => 'Show Patient Visit',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Update Patient Visit', 
            'alias'      => 'update',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Patient Visit', 
            'alias'      => 'destroy',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
