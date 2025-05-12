<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'component.';
$prefix_directory = 'component';

return [
    'name'            => 'Voucher Management', 
    'alias'           => $prefix.'voucher.index',
    'props'           => [
        'icon'        => 'mdi:voucher',
        'directory'   => "$prefix_directory/voucher",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Voucher',
            'alias'      => $prefix.'voucher.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Voucher',
            'alias'      => $prefix.'voucher.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Voucher', 
            'alias'      => $prefix.'voucher.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

