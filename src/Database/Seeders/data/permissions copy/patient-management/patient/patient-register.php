<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'           => 'Visit Registration',
    'alias'          => 'register',
    'icon'       => 'mdi:patient',
    'show_in_acl' => true,
    'type'      => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Visit Registration',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'        => 'Medical Record',
            'alias'       => 'show',
            'type'        => Type::PERMISSION->value,
            'guard_name'  => 'api'
        ],
        [
            'name'       => 'Delete Patient',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],

    ]
];

