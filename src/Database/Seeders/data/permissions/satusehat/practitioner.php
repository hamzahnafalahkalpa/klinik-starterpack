<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Practitioner',
    'alias'          => $prefix . 'practitioner.index',
    'props'          => [
        'icon'       => 'healthicons:doctor',
        'directory'  => $prefix_directory . '/practitioner',
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Practitioner Satu Sehat',
            'alias'           => $prefix . 'practitioner.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Practitioner Satu Sehat',
            'alias'           => $prefix . 'practitioner.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
