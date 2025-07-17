<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Location',
    'alias'          => 'location',
    'icon'       => 'duo-icons:location',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Location Satu Sehat',
            'alias'           => 'update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Location Satu Sehat',
            'alias'           => 'show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
