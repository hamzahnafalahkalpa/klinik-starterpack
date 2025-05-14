<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'disease.';
$prefix_directory = 'disease';

return [
    'alias'           => 'classification.index',
    'name'            => 'Disease Classification', 
    'icon'        => 'medical-icon:i-physical-therapy',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Disease Classification',
            'alias'      => 'classification.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Disease Classification',
            'alias'      => 'classification.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Disease Classification Detail',
            'alias'      => 'classification.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Disease Classification',
            'alias'      => 'classification.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
