<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'           => 'Refund',
    'alias'          => $prefix . 'refund.index',
    'props'          => [
        'icon'       => 'gridicons:refund',
        'directory'  => $prefix_directory . '/refund',
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Refund Status',
            'alias'           => $prefix . 'refund.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Refund Status',
            'alias'           => $prefix . 'refund.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
