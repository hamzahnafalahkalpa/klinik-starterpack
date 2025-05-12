<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.register.';
$prefix_directory = 'patient-management/register';

return [
    'name'            => 'Appointment', 
    'alias'           => $prefix.'appointment.index',
    'props'           => [
        'icon'        => 'icon-park-solid:appointment',
        'directory'   => "$prefix_directory/appointment"
    ], 
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Appointment',
            'alias'      => $prefix.'appointment.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Update Appointment',
            'alias'      => $prefix.'appointment.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Appointment',
            'alias'      => $prefix.'appointment.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

