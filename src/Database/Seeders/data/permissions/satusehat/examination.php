<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Examination',
    'alias'          => $prefix . 'examination.index',
    'props'          => [
        'icon'       => 'healthicons:exercise-walking',
        'directory'  => $prefix_directory . '/examination',
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Examination Satu Sehat',
            'alias'           => $prefix . 'examination.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Examination Satu Sehat',
            'alias'           => $prefix . 'examination.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
