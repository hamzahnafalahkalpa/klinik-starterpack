<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'       => 'Navigasi', 
    'alias'      => 'navigation',
    'icon'       => 'ix:navigation-filled',
    'directory'  => 'navigation',
    'type'       => Type::NAVIGATION->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/navigation/profile.php'),
        include(__DIR__.'/navigation/digital-sign.php'),
        include(__DIR__.'/navigation/attendence.php')
    ]
];

