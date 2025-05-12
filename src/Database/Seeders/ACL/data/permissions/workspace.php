<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Pengaturan Umum Aplikasi', 
    'alias'          => 'workspace',
    'icon'           => 'eos-icons:project',
    'directory'      => 'workspace',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__.'/workspace/setting.php'),
        include(__DIR__.'/workspace/encoding.php'),
    ]
];

