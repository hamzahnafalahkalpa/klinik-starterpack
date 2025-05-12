

<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'service.';
$prefix_directory = 'service';

return [
    'name'            => 'Medical Service', 
    'alias'           => $prefix.'medic-service.index',
    'props'           => [
        'icon'        => 'uil:medical-drip',
        'directory'   => "$prefix_directory/medic-service",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Medic Service',
            'alias'           => $prefix.'medic-service.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'props'           => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'            => 'Detail Medic Service',
            'alias'           => $prefix.'medic-service.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
