<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'           => 'Invoice Collection', 
    'alias'          => $prefix.'invoice.index',
    'props'          => [
        'icon'       => 'la:file-invoice-dollar',
        'directory'  => $prefix_directory.'/invoice',
        'show_in_acl' => true
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Invoice Status',
            'alias'           => $prefix.'invoice.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Invoice Status',
            'alias'           => $prefix.'invoice.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
