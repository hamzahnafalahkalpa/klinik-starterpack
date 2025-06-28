<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Penerimaan Barang',
    'alias'       => 'receive-order',
    'icon'        => 'lsicon:goods-filled',
    'show_in_acl' => true,
    'type'        => Type::MODULE->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah Penerimaan Barang',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Show Penerimaan Barang',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Hapus Penerimaan Barang',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
