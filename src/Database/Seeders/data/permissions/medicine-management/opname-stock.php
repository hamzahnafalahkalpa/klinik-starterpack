<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Opname Stock',
    'alias'           => 'opname-stock.index',
    'icon'        => 'tabler:building-warehouse',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add & Edit Opname',
            'alias'      => 'opname-stock.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Delete Opname',
            'alias'      => 'opname-stock.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
