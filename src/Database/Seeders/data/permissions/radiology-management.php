<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Radiology Management', 
    'alias'      => $prefix.'radiology-management.',
    'props'      => [
        'icon'       => 'material-symbols-light:radiology-outline',
        'directory'  => 'radiology-management'
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include_once(__DIR__.'/radiology-management/master-radiology.php'),
    ]
];