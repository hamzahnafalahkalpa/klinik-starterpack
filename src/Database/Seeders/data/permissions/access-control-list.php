<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'       => 'Access Control List', 
    'alias'      => 'acl.',
    'icon'       => 'game-icons:house-keys',
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Manajemen Role', 
            'alias'      => 'acl.role.index',
            'menu'       => true,
            'show_in_acl' => true,
            'type'  => Type::MENU->value,
            'guard_name' => 'api',
            'childs'     => [
                [
                    'name'       => 'Tambah Role',
                    'alias'      => 'acl.role.store',
                    'type'  => Type::PERMISSION->value,
                    'guard_name' => 'api',
                    'show_in_acl' => true
                ],
                [
                    'name'       => 'Ubah Role',
                    'alias'      => 'acl.role.update',
                    'type'  => Type::PERMISSION->value,
                    'guard_name' => 'api'
                ],
                [
                    'name'       => 'Hapus Role', 
                    'alias'      => 'acl.role.destroy',
                    'type'  => Type::PERMISSION->value,
                    'guard_name' => 'api'
                ]        
            ]
        ]
    ]
];

