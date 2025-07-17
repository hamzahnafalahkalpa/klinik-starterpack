<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.bmhp.';
$prefix_directory = 'medicine-management.bmhp';

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
