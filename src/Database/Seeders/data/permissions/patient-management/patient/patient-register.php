<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'           => 'Visit Registration',
    'alias'          => $prefix.'register.index',
    'props'          => [
        'icon'       => 'mdi:patient',
        'directory'  => "$prefix_directory/register",
        'show_in_acl' => true
    ],
    'type'      => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Visit Registration',
            'alias'      => $prefix.'register.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'        => 'Medical Record',
            'alias'       => $prefix.'register.show',
            'type'        => Type::PERMISSION->value,
            'guard_name'  => 'api'
        ],
        [
            'name'       => 'Delete Patient',
            'alias'      => $prefix.'register.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],

    ]
];

