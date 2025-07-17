<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'inventory.';
$prefix_directory = 'inventory';

return [
    'name'            => 'Pengadaan Mandiri',
    'alias'           => 'index',
    'icon'        => 'fluent:box-toolbox-20-filled',
    'show_in_acl' => true,
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Self Procurement',
            'alias'      => 'view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Create Self Procurement',
            'alias'      => 'create',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
