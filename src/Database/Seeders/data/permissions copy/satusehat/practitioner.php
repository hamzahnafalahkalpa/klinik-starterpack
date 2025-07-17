<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Practitioner',
    'alias'          => 'practitioner',
    'icon'       => 'healthicons:doctor',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Practitioner Satu Sehat',
            'alias'           => 'update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Practitioner Satu Sehat',
            'alias'           => 'show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
