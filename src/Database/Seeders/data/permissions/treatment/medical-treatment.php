<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'treatment.';
$prefix_directory = 'treatment';

return [
    'name'            => 'Treatment List', 
    'alias'           => $prefix.'medical-treatment.index',
    'props'           => [
        'icon'        => 'medical-icon:i-physical-therapy',
        'directory'   => "$prefix_directory/medical-treatment",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Treatment',
            'alias'      => $prefix.'medical-treatment.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'          => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Treatment',
            'alias'      => $prefix.'medical-treatment.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Treatment Detail',
            'alias'      => $prefix.'medical-treatment.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Treatment',
            'alias'      => $prefix.'medical-treatment.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
