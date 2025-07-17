<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'employee-management.';
$prefix_directory = 'employee-management';

return [
    'name'       => 'Employee Master Data',
    'alias'      => 'employee',
    'icon'          => 'fluent:people-team-20-regular',
    'show_in_acl'   => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Employee',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Employee',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Employee',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
