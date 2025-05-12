<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'pharmacy-unit.';
$prefix_directory = 'pharmacy-unit';

return [
    'name'            => 'Pharmacy Sales',
    'alias'           => $prefix . 'index',
    'props'           => [
        'icon'        => 'mdi:printer-point-of-sale',
        'directory'   => "$prefix_directory/pharmacy-sale",
        'show_in_acl' => true
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Sale',
            'alias'      => $prefix . 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'          => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Sale',
            'alias'      => $prefix . 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Sale',
            'alias'      => $prefix . 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
