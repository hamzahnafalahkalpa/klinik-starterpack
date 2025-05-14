<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'component.';
$prefix_directory = 'component';

return [
    'name'            => 'Voucher Management', 
    'alias'           => 'voucher.index',
    'icon'        => 'mdi:voucher',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Voucher',
            'alias'      => 'voucher.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Voucher',
            'alias'      => 'voucher.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Voucher', 
            'alias'      => 'voucher.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

