<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Unit Penerimaan Barang',
    'alias'       => 'receive-unit',
    'icon'        => 'streamline-plump:page-setting-solid',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs' => [
        [
            'name'       => 'Tambah Unit Penerimaan Barang',
            'alias'      => 'create',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah Unit Penerimaan Barang',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Hapus Unit Penerimaan Barang',
            'alias'      => 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
