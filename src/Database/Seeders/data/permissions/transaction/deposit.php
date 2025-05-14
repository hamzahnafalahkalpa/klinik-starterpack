<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'            => 'Deposit', 
    'alias'           => 'deposit.index',
    'icon'        => 'ph:hand-deposit-duotone',
    'show_in_acl' => true,
    'type'            => Type::MENU->value,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'            => 'Add Deposit',
            'alias'           => 'deposit.store',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Deposit',
            'alias'      => 'deposit.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Invoice',
            'alias'      => 'deposit.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Deposit',
            'alias'      => 'deposit.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
