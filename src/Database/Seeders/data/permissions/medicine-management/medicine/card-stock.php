<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.medicine.';
$prefix_directory = 'medicine-management.medicine';

return [
    'name'            => 'Data Card Stock',
    'alias'           => 'card-stock',
    'icon'        => 'game-icons:medical-thermometer',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Show Card Stock',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
