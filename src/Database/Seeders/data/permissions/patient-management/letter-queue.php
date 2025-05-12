<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Surat Penunjang', 
    'alias'           => $prefix.'letter-queue.index',
    'props'           => [
        'icon'            => 'uil:envelopes',
        'directory'   => "$prefix_directory/letter-queue",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Letter',
            'alias'      => $prefix.'letter-queue.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Letter',
            'alias'      => $prefix.'letter-queue.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Letter Detail',
            'alias'      => $prefix.'letter-queue.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Letter', 
            'alias'      => $prefix.'letter-queue.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
