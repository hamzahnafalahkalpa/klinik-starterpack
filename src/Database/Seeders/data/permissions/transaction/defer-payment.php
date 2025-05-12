<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'           => 'Defer Payment',
    'alias'          => $prefix . 'defer-payment.index',
    'props'          => [
        'icon'       => 'ic:twotone-pending-actions',
        'directory'  => $prefix_directory . '/defer-payment',
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Defer Payment Status',
            'alias'           => $prefix . 'defer-payment.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Defer Payment Status',
            'alias'           => $prefix . 'defer-payment.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
