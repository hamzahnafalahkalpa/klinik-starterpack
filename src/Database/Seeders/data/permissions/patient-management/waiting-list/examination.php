<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.{{waiting-list}}.';
$prefix_directory = 'patient-management/{{dir-waiting-list}}';

return [
    'name'            => 'Examination', 
    'alias'           => 'examination.index',
    'icon'            => 'covid:virus-lab-research-microscope',
    'show_in_acl' => true,
    'type'  => Type::MODULE->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Examination Show',
            'alias'      => 'examination.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Examination Cancel',
            'alias'      => 'examination.cancel',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
