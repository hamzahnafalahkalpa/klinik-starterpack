<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Treatment Management', 
    'alias'          => 'treatment',
    'icon'       => 'mdi:medical-bag',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/treatment/medical-treatment.php'),
    ]
];

