<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'component.';
$prefix_directory = 'component';

return [
    'name'            => 'Bank Management', 
    'alias'           => $prefix.'bank.index',
    'props'           => [
        'icon'        => 'noto:bank',
        'directory'   => "$prefix_directory/bank",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Bank',
            'alias'      => $prefix.'bank.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Bank',
            'alias'      => $prefix.'bank.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Bank', 
            'alias'      => $prefix.'bank.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

