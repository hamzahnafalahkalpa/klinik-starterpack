<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'organization.';
$prefix_directory = 'organization';

return [
    'name'            => 'Payer Management', 
    'alias'           => 'payer.index',
    'icon'        => 'game-icons:coins',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Payer',
            'alias'      => 'payer.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Payer',
            'alias'      => 'payer.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Payer',
            'alias'      => 'payer.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Payer',
            'alias'      => 'payer.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
