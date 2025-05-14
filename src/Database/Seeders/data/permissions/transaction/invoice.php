<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'           => 'Invoice Collection', 
    'alias'          => 'invoice.index',
    'icon'       => 'la:file-invoice-dollar',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Invoice Status',
            'alias'           => 'invoice.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Invoice Status',
            'alias'           => 'invoice.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
