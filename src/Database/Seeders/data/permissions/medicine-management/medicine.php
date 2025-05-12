<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Data Obat',
    'alias'           => $prefix . 'medicine.index',
    'props'           => [
        'icon'        => 'icon-park-outline:medicine-bottle',
        'directory'   => "$prefix_directory/medicine"
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Medicine',
            'alias'      => $prefix . 'medicine.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Show Medicine',
            'alias'      => $prefix . 'medicine.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Edit Medicine',
            'alias'      => $prefix . 'medicine.edit',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Medicine',
            'alias'      => $prefix . 'medicine.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        include(__DIR__.'/medicine/card-stock.php'),
    ]
];
