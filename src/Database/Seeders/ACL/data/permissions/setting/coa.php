<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'COA (Chart of Account)',
    'alias'       => 'coa',
    'icon'        => 'gravity-ui:code-trunk',
    'show_in_acl' => true,
    'type'        => Type::MENU->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah COA',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah COA',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Hapus COA',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
