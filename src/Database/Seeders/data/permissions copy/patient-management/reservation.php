<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'           => 'Reservation',
    'alias'          => 'reservation',
    'icon'       => 'material-symbols:app-registration-outline-sharp',
    'show_in_acl' => true,
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Reservation',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Reservation',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Reservation',
            'alias'      => 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

