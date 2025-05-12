<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Daftar Shbj (Standar Harga Barang dan Jasa)',
    'alias'       => 'material-category',
    'icon'        => 'lucide:book-key',
    'show_in_acl' => true,
    'type'        => Type::MENU->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah Shbj',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Hapus Shbj',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
