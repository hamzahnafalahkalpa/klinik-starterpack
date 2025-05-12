<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'employee-management.';
$prefix_directory = 'employee-management';

return [
    'name'       => 'Employee Master Data',
    'alias'      => $prefix.'employee.index',
    'props'      => [
        'icon'          => 'fluent:people-team-20-regular',
        'directory'     => "$prefix_directory/employee",
        'show_in_acl'   => true
    ],
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Employee',
            'alias'      => $prefix.'employee.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Employee',
            'alias'      => $prefix.'employee.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Employee',
            'alias'      => $prefix.'employee.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
