<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.';
$prefix_directory = 'infrastructure';

return         [
    'name'       => 'Master Gedung',
    'alias'      => $prefix.'building.index',
    'props'      => [
        'icon'        => 'hugeicons:building-04',
        'directory'   => "$prefix_directory/building",
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Tambah Gedung',
            'alias'      => $prefix.'building.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Ubah Gedung',
            'alias'      => $prefix.'building.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
        ],
        [
            'name'       => 'Hapus Gedung',
            'alias'      => $prefix.'building.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
        ]
    ]
];
