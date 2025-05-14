<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medical-center.';
$prefix_directory = 'medical-center';

return [
    'name'       => 'Clinical Network and Information', 
    'alias'      => 'clinic.index',
    'icon'       => 'iconoir:healthcare',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Update Clinic',
            'alias'      => 'clinic.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Detail',
            'alias'      => 'clinic.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

