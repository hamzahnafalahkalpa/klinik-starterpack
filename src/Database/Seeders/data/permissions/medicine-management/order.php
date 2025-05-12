<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Order Medcal Item',
    'alias'           => $prefix . 'order.index',
    'props'           => [
        'icon'        => 'lsicon:distribution-filled',
        'directory'   => "$prefix_directory/order"
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Order Medical Item',
            'alias'      => $prefix . 'order.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Show Order Medical Item',
            'alias'      => $prefix . 'order.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Report Order Medical Item',
            'alias'      => $prefix . 'order.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Order Medical Item',
            'alias'      => $prefix . 'order.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
