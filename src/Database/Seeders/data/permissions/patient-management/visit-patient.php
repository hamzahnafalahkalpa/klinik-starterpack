<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Patient Visit', 
    'alias'           => $prefix.'visit-patient.index',
    'props'           => [
        'icon'            => 'healthicons:outpatient-department',
        'directory'   => "$prefix_directory/visit-patient",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [        
        [
            'name'       => 'Show Patient Visit',
            'alias'      => $prefix.'visit-patient.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Update Patient Visit', 
            'alias'      => $prefix.'patient-type.update',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Patient Visit', 
            'alias'      => $prefix.'patient-type.destroy',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
