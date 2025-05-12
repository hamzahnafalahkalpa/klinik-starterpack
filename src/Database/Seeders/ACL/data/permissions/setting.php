<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Settings', 
    'alias'          => 'setting',
    'icon'           => 'vaadin:cogs',
    'directory'      => 'workspace',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__.'/setting/setting.php'),
        include(__DIR__.'/workspace/encoding.php'),
    ]
];

