<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'treatment.';
$prefix_directory = 'treatment';

return [
    'name'            => 'Treatment List', 
    'alias'           => 'medical-treatment.index',
    'icon'        => 'medical-icon:i-physical-therapy',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Treatment',
            'alias'      => 'medical-treatment.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Treatment',
            'alias'      => 'medical-treatment.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Show Treatment Detail',
            'alias'      => 'medical-treatment.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Treatment',
            'alias'      => 'medical-treatment.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
