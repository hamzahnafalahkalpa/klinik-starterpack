<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'employee-management.schedule.';
$prefix_directory = 'employee-management.schedule';

return [
    'name'       => 'Doctor Schedule', 
    'alias'      => 'index',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Doctor Schedule',
            'alias'      => 'doctor.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Doctor Schedule',
            'alias'      => 'doctor.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Doctor Schedule', 
            'alias'      => 'doctor.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];