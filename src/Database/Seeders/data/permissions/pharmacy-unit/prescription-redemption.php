<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'pharmacy-unit.';
$prefix_directory = 'pharmacy-unit';

return [
    'name'            => 'Penebusan Resep',
    'alias'           => $prefix . 'prescription-redemption.index',
    'props'           => [
        'icon'        => 'fa-solid:prescription-bottle',
        'directory'   => "$prefix_directory/prescription-redemption",
        'show_in_acl' => true
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Frontline',
            'alias'      => $prefix . 'frontline.view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Edit Frontline',
            'alias'      => $prefix . 'frontline.edit',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'View Dispensing',
            'alias'      => $prefix . 'dispensing.view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Process Dispensing',
            'alias'      => $prefix . 'dispensing.process',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'View Penyerahan',
            'alias'      => $prefix . 'penyerahan.view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Confirm Penyerahan',
            'alias'      => $prefix . 'penyerahan.confirm',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
