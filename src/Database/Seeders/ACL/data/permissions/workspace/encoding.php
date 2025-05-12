<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'          => 'Pengaturan Pengodean',
    'alias'         => 'encoding',
    'icon'          => 'streamline:device-database-encryption-1-solid',
    'show_in_acl'   => true,
    'type'          => Type::MENU->value,
    'guard_name'    => 'api',
    'childs'        => [
        [
            'name'       => 'Update Informasi Perusahaan',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ]
    ]
];
