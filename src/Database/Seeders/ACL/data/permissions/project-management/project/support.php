<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Project Support Sistem',
    'alias'       => 'support',
    'icon'        => 'stash:plan-duotone',
    'show_in_acl' => true,
    'type'        => Type::MODULE->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah Support',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Show Support',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Hapus Support',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        
    ]
];
