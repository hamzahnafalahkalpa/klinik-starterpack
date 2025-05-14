<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Medical Procurement',
    'alias'           => 'medical-procurement.index',
    'icon'        => 'icon-park-outline:medicine-bottle',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Add Procurement',
            'alias'      => 'medical-procurement.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Edit Procurement',
            'alias'      => 'medical-procurement.edit',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Procurement',
            'alias'      => 'medical-procurement.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
