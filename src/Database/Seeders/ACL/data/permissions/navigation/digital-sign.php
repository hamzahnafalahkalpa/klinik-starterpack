<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Tanda Tangan Digital',
    'alias'       => 'ttd',
    'icon'        => 'mdi:sign',
    'show_in_acl' => true,
    'type'        => Type::NAVIGATION->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Update Tanda Tangan Digital',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ]
    ]
];
