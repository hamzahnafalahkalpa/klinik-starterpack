<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Data BMHP',
    'alias'           => $prefix . 'bmhp.index',
    'props'           => [
        'icon'        => 'game-icons:medical-thermometer',
        'directory'   => "$prefix_directory/bmhp"
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Show BMHP',
            'alias'      => $prefix . 'bmhp.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Add BMHP',
            'alias'      => $prefix . 'bmhp.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Edit BMHP',
            'alias'      => $prefix . 'bmhp.edit',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete BMHP',
            'alias'      => $prefix . 'bmhp.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        include(__DIR__.'/bmhp/card-stock.php')
    ]
];
