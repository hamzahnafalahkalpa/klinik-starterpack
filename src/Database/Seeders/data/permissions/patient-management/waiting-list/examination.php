<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.{{waiting-list}}.';
$prefix_directory = 'patient-management/{{dir-waiting-list}}';

return [
    'name'            => 'Examination', 
    'alias'           => $prefix.'examination.index',
    'props'           => [
        'icon'            => 'covid:virus-lab-research-microscope',
        'directory'   => "$prefix_directory/examination",
        'show_in_acl' => true
    ], 
    'type'  => Type::MODULE->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Examination Show',
            'alias'      => $prefix.'examination.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Examination Cancel',
            'alias'      => $prefix.'examination.cancel',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
