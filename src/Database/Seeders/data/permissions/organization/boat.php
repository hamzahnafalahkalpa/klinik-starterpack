<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'organization.';
$prefix_directory = 'organization';

return [
    'name'            => 'Boat Management', 
    'alias'           => 'boat.index',
    'icon'        => 'mdi:boat',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Boat',
            'alias'      => 'boat.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Boat',
            'alias'      => 'boat.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Boat',
            'alias'      => 'boat.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Boat',
            'alias'      => 'boat.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
