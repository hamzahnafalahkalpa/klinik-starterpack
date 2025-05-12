<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'       => 'Patient',
    'alias'      => $prefix.'patient.index',
    'props'      => [
        'icon'        => 'fluent:patient-20-regular',
        'directory'   => "$prefix_directory/patient",
        'show_in_acl' => true
    ],
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Patient',
            'alias'      => $prefix.'patient.store',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Patient',
            'alias'      => $prefix.'patient.store',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Patient',
            'alias'      => $prefix.'patient.destroy',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        include_once __DIR__.'/patient/patient-register.php',
    ]
];

