<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'radiology-management.';
$prefix_directory = 'radiology-management';

return [
    'name'       => 'Radiology Master', 
    'alias'      => $prefix.'master-radiology.index',
    'props'      => [
        'icon'        => 'material-symbols-light:radiology-outline-rounded',
        'directory'   => $prefix_directory.'/master-radiology',
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Radiology',
            'alias'      => $prefix.'master-radiology.store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Radiology',
            'alias'      => $prefix.'master-radiology.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'View Radiology',
            'alias'      => $prefix.'master-radiology.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Radiology',
            'alias'      => $prefix.'master-radiology.destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
