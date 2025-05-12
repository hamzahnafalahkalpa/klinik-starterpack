<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'            => 'Deposit', 
    'alias'           => $prefix.'deposit.index',
    'props'           => [
        'icon'        => 'ph:hand-deposit-duotone',
        'directory'   => $prefix_directory.'/deposit',
        'show_in_acl' => true
    ], 
    'type'            => Type::MENU->value,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'            => 'Add Deposit',
            'alias'           => $prefix.'deposit.store',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'props'           => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Deposit',
            'alias'      => $prefix.'deposit.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Invoice',
            'alias'      => $prefix.'deposit.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Deposit',
            'alias'      => $prefix.'deposit.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
