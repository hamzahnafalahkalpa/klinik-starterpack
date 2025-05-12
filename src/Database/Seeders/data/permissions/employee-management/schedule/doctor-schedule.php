<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'employee-management.schedule.';
$prefix_directory = 'employee-management.schedule';

return [
    'name'       => 'Doctor Schedule', 
    'alias'      => $prefix.'index',
    'props'      => [
        'directory'   => "$prefix_directory/doctor-schedule",
        'show_in_acl' => true
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Doctor Schedule',
            'alias'      => $prefix.'doctor.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Doctor Schedule',
            'alias'      => $prefix.'doctor.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Doctor Schedule', 
            'alias'      => $prefix.'doctor.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];