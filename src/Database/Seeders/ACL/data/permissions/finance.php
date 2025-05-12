<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Finance', 
    'alias'          => 'finance',
    'icon'           => 'eos-icons:project',
    'directory'      => 'finance',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__.'/finance/coa.php'),
        include(__DIR__.'/finance/bank.php'),
        include(__DIR__.'/finance/funding.php'),
    ]
];

