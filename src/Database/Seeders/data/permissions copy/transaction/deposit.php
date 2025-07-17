<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'            => 'Deposit', 
    'alias'           => 'deposit',
    'icon'        => 'ph:hand-deposit-duotone',
    'show_in_acl' => true,
    'type'            => Type::MENU->value,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'            => 'Add Deposit',
            'alias'           => 'store',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Deposit',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Invoice',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Deposit',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
