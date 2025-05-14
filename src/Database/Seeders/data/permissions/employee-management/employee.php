<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'employee-management.';
$prefix_directory = 'employee-management';

return [
    'name'       => 'Employee Master Data',
    'alias'      => 'employee.index',
    'icon'          => 'fluent:people-team-20-regular',
    'show_in_acl'   => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Employee',
            'alias'      => 'employee.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Employee',
            'alias'      => 'employee.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Employee',
            'alias'      => 'employee.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
