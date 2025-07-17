<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Pengadaan Supplier',
    'alias'           => 'index',
    'icon'        => 'fa-solid:boxes',
    'show_in_acl' => true,
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
