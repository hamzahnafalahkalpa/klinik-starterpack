<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Disease Encyclopedia',
    'alias'          => $prefix.'disease.',
    'props'          => [
        'icon'       => 'fa-solid:disease',
        'directory'  => 'disease'
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/disease/disease-classification.php'),
        include(__DIR__.'/disease/disease.php'),
    ]
];