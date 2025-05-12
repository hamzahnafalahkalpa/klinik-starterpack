<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Location',
    'alias'          => $prefix . 'location.index',
    'props'          => [
        'icon'       => 'duo-icons:location',
        'directory'  => $prefix_directory . '/location',
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Location Satu Sehat',
            'alias'           => $prefix . 'location.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Location Satu Sehat',
            'alias'           => $prefix . 'location.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
