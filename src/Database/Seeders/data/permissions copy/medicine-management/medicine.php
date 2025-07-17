<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Data Obat',
    'alias'           => 'medicine',
    'icon'        => 'icon-park-outline:medicine-bottle',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Medicine',
            'alias'      => 'add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Show Medicine',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Edit Medicine',
            'alias'      => 'edit',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Medicine',
            'alias'      => 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        include(__DIR__.'/medicine/card-stock.php'),
    ]
];
