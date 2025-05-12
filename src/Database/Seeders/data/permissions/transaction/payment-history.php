<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'           => 'Payment History',
    'alias'          => $prefix . 'payment-history.index',
    'props'          => [
        'icon'       => 'solar:bill-list-outline',
        'directory'  => $prefix_directory . '/payment-history',
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Payment History Status',
            'alias'           => $prefix . 'payment-history.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Payment History',
            'alias'           => $prefix . 'payment-history.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
