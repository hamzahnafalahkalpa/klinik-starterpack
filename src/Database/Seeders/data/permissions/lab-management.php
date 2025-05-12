<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Laboratory Management', 
    'alias'      => $prefix.'lab-management.',
    'props'      => [
        'icon'       => 'entypo:lab-flask',
        'directory'  => 'lab-management'
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include_once(__DIR__.'/lab-management/patology-clinic.php'),
        include_once(__DIR__.'/lab-management/patology-anatomy.php'),
        include_once(__DIR__.'/lab-management/sample.php'),
    ]
];