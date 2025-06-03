<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Pengaturan', 
    'alias'       => 'api.setting',
    'icon'        => 'mdi:cellphone-settings-variant',
    'type'        => Type::MENU->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/setting/acl.php'
    ]
];

