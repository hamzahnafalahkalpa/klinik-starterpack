<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Distribusi Obat dan BMHP',
    'alias'           => 'index',
    'icon'        => 'fontisto:injection-syringe',
    'show_in_acl' => true,
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Distribution',
            'alias'      => 'view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Manage Distribution',
            'alias'      => 'manage',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
