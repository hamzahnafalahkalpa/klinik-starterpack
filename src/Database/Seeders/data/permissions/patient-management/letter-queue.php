<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Surat Penunjang', 
    'alias'           => 'letter-queue.index',
    'icon'            => 'uil:envelopes',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Letter',
            'alias'      => 'letter-queue.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Letter',
            'alias'      => 'letter-queue.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Letter Detail',
            'alias'      => 'letter-queue.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Letter', 
            'alias'      => 'letter-queue.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
