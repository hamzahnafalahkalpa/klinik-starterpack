<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Daftar Master Jenis Client',
    'alias'       => 'client-type',
    'icon'        => 'icon-park-outline:category-management',
    'show_in_acl' => true,
    'type'        => Type::MENU->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah Jenis Client',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Hapus Jenis Client',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
