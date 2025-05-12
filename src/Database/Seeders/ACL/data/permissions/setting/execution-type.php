<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Jenis Pelaksanaan Projek',
    'alias'       => 'execution-type',
    'icon'        => 'stash:plan-duotone',
    'show_in_acl' => true,
    'type'        => Type::MENU->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah Jenis Pelaksanaan',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Hapus Jenis Pelaksanaan',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        
    ]
];
