<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'       => 'Finance', 
    'alias'      => 'api.finance',
    'icon'       => 'mdi:finance',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/finance/journal-entry.php'),
    ]
];

