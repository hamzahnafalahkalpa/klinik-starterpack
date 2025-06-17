<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Supplier',
    'alias'          => 'index',
    'icon'           => 'icon-park-twotone:people-top-card',
    'show_in_acl'    => true,
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Supplier Procurement',
            'alias'      => 'view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Create Supplier Procurement',
            'alias'      => 'create',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
