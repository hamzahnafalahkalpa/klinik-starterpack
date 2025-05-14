<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'       => 'Patient',
    'alias'      => 'patient.index',
    'icon'        => 'fluent:patient-20-regular',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Patient',
            'alias'      => 'patient.store',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Patient',
            'alias'      => 'patient.store',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Patient',
            'alias'      => 'patient.destroy',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        include_once __DIR__.'/patient/patient-register.php',
    ]
];

