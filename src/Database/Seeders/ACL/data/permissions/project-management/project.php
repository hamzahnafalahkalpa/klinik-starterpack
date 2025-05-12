<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Daftar Proyek',
    'alias'       => 'project',
    'icon'        => 'game-icons:bulldozer',
    'show_in_acl' => true,
    'type'        => Type::MENU->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah Proyek',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Show Proyek',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Hapus Proyek',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        include_once(__DIR__.'/project/rencana-anggaran.php'),
        include_once(__DIR__.'/project/rap.php'),
        include_once(__DIR__.'/project/purchase-request.php'),
        include_once(__DIR__.'/project/receive-order.php')
    ]
];
