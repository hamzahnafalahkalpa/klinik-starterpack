<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'infrastructure.';
$prefix_directory = 'infrastructure';

return         [
    'name'       => 'Master Gedung',
    'alias'      => 'building.index',
    'icon'        => 'hugeicons:building-04',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Tambah Gedung',
            'alias'      => 'building.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah Gedung',
            'alias'      => 'building.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
        ],
        [
            'name'       => 'Hapus Gedung',
            'alias'      => 'building.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
        ]
    ]
];
