<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Absensi',
    'alias'       => 'ttd',
    'icon'        => 'ri:rfid-fill',
    'show_in_acl' => true,
    'type'        => Type::NAVIGATION->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Update Absensi',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ]
    ]
];
