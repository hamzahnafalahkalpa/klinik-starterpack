<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.register.';
$prefix_directory = 'patient-management/register';

return [
    'name'            => 'Appointment', 
    'alias'           => 'appointment',
    'icon'        => 'icon-park-solid:appointment',
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Appointment',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Update Appointment',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Appointment',
            'alias'      => 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

