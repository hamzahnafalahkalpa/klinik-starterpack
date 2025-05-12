<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Pengadaan Supplier',
    'alias'           => $prefix . 'index',
    'props'           => [
        'icon'        => 'fa-solid:boxes',
        'directory'   => "$prefix_directory",
        'show_in_acl' => true
    ],
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Supplier Procurement',
            'alias'      => $prefix . 'view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Create Supplier Procurement',
            'alias'      => $prefix . 'create',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
