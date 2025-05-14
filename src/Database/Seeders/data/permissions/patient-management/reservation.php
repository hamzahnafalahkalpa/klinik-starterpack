<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'           => 'Reservation',
    'alias'          => 'reservation.index',
    'icon'       => 'material-symbols:app-registration-outline-sharp',
    'show_in_acl' => true,
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Reservation',
            'alias'      => 'reservation.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Reservation',
            'alias'      => 'reservation.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Reservation',
            'alias'      => 'reservation.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

