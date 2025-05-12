<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Pengadaan Mandiri',
    'alias'           => $prefix . 'index',
    'props'           => [
        'icon'        => 'fluent:box-toolbox-20-filled',
        'directory'   => "$prefix_directory",
        'show_in_acl' => true
    ],
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Self Procurement',
            'alias'      => $prefix . 'view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Create Self Procurement',
            'alias'      => $prefix . 'create',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
