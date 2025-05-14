<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Radiology Management', 
    'alias'      => 'radiology-management',
    'icon'       => 'material-symbols-light:radiology-outline',
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include_once(__DIR__.'/radiology-management/master-radiology.php'),
    ]
];