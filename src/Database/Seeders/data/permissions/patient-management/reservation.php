<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'           => 'Reservation',
    'alias'          => $prefix.'reservation.index',
    'props'          => [
        'icon'       => 'material-symbols:app-registration-outline-sharp',
        'directory'  => "$prefix_directory/reservation",
        'show_in_acl' => true
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Reservation',
            'alias'      => $prefix.'reservation.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Reservation',
            'alias'      => $prefix.'reservation.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Reservation',
            'alias'      => $prefix.'reservation.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

