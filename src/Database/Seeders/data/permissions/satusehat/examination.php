<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Examination',
    'alias'          => 'examination.index',
    'icon'       => 'healthicons:exercise-walking',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Examination Satu Sehat',
            'alias'           => 'examination.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Examination Satu Sehat',
            'alias'           => 'examination.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
