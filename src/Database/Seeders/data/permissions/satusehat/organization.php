<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Organization',
    'alias'          => $prefix . 'organization.index',
    'props'          => [
        'icon'       => 'clarity:organization-line',
        'directory'  => $prefix_directory . '/organization',
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Organization Satu Sehat',
            'alias'           => $prefix . 'organization.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Organization Satu Sehat',
            'alias'           => $prefix . 'organization.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
