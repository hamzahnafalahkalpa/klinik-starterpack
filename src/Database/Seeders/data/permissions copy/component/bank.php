<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Bank Management', 
    'alias'           => 'bank',
    'icon'        => 'noto:bank',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Bank',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Bank',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Bank', 
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

