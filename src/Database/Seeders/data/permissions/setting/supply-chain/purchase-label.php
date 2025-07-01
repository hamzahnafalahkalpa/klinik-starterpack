<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Label Pembelian',
    'alias'       => 'purchase-label',
    'icon'        => 'streamline-plump:page-setting-solid',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs' => [
        [
            'name'       => 'Tambah Label Pembelian',
            'alias'      => 'create',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah Label Pembelian',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Hapus Label Pembelian',
            'alias'      => 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
