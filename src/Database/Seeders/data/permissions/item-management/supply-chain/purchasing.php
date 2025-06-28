<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Supply Chain Management',
    'alias'       => 'supply-chain',
    'icon'        => 'teenyicons:docker-outline',
    'type'        => Type::MENU->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'        => 'Tambah SCM',
            'alias'       => 'store',
            'type'        => Type::PERMISSION->value,
            'guard_name'  => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah SCM',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail SCM',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_data' => true,
            'show_in_acl' => true,
            'childs'      => [
                [
                    'name'        => 'Kartu Stok',
                    'alias'       => 'card-stock',
                    'icon'        => 'lsicon:management-stockout-filled',
                    'type'        => Type::MODULE->value,
                    'show_in_acl' => true,
                    'guard_name'  => 'api',
                ]
            ]
        ],
        [
            'name'       => 'Hapus Inventaris',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

