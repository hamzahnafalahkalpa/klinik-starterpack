<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Examination', 
    'alias'           => 'examination',
    'icon'            => 'covid:virus-lab-research-microscope',
    'show_in_acl' => true,
    'type'  => Type::MODULE->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Examination Show',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Examination Cancel',
            'alias'      => 'cancel',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
