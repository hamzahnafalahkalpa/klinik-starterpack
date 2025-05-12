<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Medical Procurement',
    'alias'           => $prefix . 'medical-procurement.index',
    'props'           => [
        'icon'        => 'icon-park-outline:medicine-bottle',
        'directory'   => "$prefix_directory/medical-procurement"
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Procurement',
            'alias'      => $prefix . 'medical-procurement.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Edit Procurement',
            'alias'      => $prefix . 'medical-procurement.edit',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Procurement',
            'alias'      => $prefix . 'medical-procurement.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
