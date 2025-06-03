<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Disease Encyclopedia',
    'alias'          => 'disease',
    'icon'       => 'fa-solid:disease',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/disease/disease-classification.php'),
        include(__DIR__.'/disease/disease.php'),
    ]
];