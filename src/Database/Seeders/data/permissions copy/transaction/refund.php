<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'           => 'Refund',
    'alias'          => 'refund',
    'icon'       => 'gridicons:refund',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Refund Status',
            'alias'           => 'update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Refund Status',
            'alias'           => 'show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
