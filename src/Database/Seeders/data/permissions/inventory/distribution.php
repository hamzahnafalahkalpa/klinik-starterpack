<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Distribusi Obat dan BMHP',
    'alias'           => $prefix . 'index',
    'props'           => [
        'icon'        => 'fontisto:injection-syringe',
        'directory'   => "$prefix_directory",
        'show_in_acl' => true
    ],
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Distribution',
            'alias'      => $prefix . 'view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Manage Distribution',
            'alias'      => $prefix . 'manage',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
