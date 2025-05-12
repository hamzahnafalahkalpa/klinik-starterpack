<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Treatment Management', 
    'alias'          => $prefix.'treatment.',
    'props'          => [
        'icon'       => 'mdi:medical-bag',
        'directory'  => 'treatment'
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/treatment/medical-treatment.php'),
    ]
];

