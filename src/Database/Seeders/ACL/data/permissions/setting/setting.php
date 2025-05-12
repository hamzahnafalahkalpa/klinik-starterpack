<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'          => 'Informasi Perusahaan',
    'alias'         => 'setting',
    'icon'          => 'mdi:company',
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
