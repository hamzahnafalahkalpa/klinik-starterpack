<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.medicine.';
$prefix_directory = 'medicine-management.medicine';

return [
    'name'            => 'Data Card Stock',
    'alias'           => $prefix . 'card-stock.index',
    'props'           => [
        'icon'        => 'game-icons:medical-thermometer',
        'directory'   => "$prefix_directory/card-stock"
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Show Card Stock',
            'alias'      => $prefix . 'card-stock.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
