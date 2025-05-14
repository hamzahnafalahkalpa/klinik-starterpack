<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'           => 'Payment History',
    'alias'          => 'payment-history.index',
    'icon'       => 'solar:bill-list-outline',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Payment History Status',
            'alias'           => 'payment-history.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Payment History',
            'alias'           => 'payment-history.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
