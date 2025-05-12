<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medical-center.';
$prefix_directory = 'medical-center';

return [
    'name'       => 'Clinical Network and Information', 
    'alias'      => $prefix.'clinic.index',
    'props'      => [
        'icon'       => 'iconoir:healthcare',
        'directory'   => "$prefix_directory/clinic",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Update Clinic',
            'alias'      => $prefix.'clinic.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Detail',
            'alias'      => $prefix.'clinic.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

