<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Pemeriksaan', 
    'alias'           => 'examination',
    'icon'            => 'covid:virus-lab-research-microscope',
    'type'            => Type::MODULE->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'       => 'Detail Pemeriksaan',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Batal Pemeriksaan',
            'alias'      => 'cancel',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
