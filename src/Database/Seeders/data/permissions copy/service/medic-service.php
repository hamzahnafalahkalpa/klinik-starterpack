

<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'service.';
$prefix_directory = 'service';

return [
    'name'            => 'Medical Service', 
    'alias'           => 'medic-service',
    'icon'        => 'uil:medical-drip',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Medic Service',
            'alias'           => 'update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'show_in_acl' => true
        ],
        [
            'name'            => 'Detail Medic Service',
            'alias'           => 'show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
