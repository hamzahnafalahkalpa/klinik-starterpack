<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'pharmacy-unit.';
$prefix_directory = 'pharmacy-unit';

return [
    'name'            => 'Pharmacy Sales',
    'alias'           => 'index',
    'icon'        => 'mdi:printer-point-of-sale',
    'show_in_acl' => true,
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Sale',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Sale',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Sale',
            'alias'      => 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
