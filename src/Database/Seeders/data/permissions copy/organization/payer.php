<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'organization.';
$prefix_directory = 'organization';

return [
    'name'            => 'Payer Management', 
    'alias'           => 'payer',
    'icon'        => 'game-icons:coins',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Payer',
            'alias'      => 'add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Payer',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Payer',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Payer',
            'alias'      => 'delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
