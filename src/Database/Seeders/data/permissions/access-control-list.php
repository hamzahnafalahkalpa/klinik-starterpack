<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Access Control List', 
    'alias'      => $prefix.'acl.',
    'props'      => [
        'icon'       => 'game-icons:house-keys',
        'directory'  => 'acl',
        'menu'       => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Manajemen Role', 
            'alias'      => $prefix.'acl.role.index',
            'props'      => [
                'directory'  => 'acl/role',
                'menu'       => true,
                'show_in_acl' => true
            ], 
            'type'  => Type::MENU->value,
            'guard_name' => 'api',
            'childs'     => [
                [
                    'name'       => 'Tambah Role',
                    'alias'      => $prefix.'acl.role.store',
                    'type'  => Type::PERMISSION->value,
                    'guard_name' => 'api',
                    'props'      => [
                        'show_in_acl' => true
                    ]
                ],
                [
                    'name'       => 'Ubah Role',
                    'alias'      => $prefix.'acl.role.update',
                    'type'  => Type::PERMISSION->value,
                    'guard_name' => 'api'
                ],
                [
                    'name'       => 'Hapus Role', 
                    'alias'      => $prefix.'acl.role.destroy',
                    'type'  => Type::PERMISSION->value,
                    'guard_name' => 'api'
                ]        
            ]
        ]
    ]
];

