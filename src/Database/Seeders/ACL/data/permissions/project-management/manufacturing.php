<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Manufacturing',
    'alias'       => 'manufacturing',
    'icon'        => 'game-icons:factory-arm',
    'type'        => Type::MENU->value,
    'guard_name'  => 'api',
    'childs'      => [
        include_once (__DIR__.'/manufacturing/bom.php'),
        include_once (__DIR__.'/manufacturing/material-management.php'),
        include_once (__DIR__.'/manufacturing/material-category.php'),
        include_once (__DIR__.'/manufacturing/shbj.php')
    ]
];
