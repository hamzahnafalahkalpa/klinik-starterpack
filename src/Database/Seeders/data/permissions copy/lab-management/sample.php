<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'lab-management.';
$prefix_directory = 'lab-management';

return [
        'name'       => 'Sample Management', 
        'alias'      => 'sample',
        'icon'        => 'healthicons:medical-sample',
        'show_in_acl' => true,
        'type'  => Type::MENU->value,
        'guard_name' => 'api',
        'childs'     => [
            [
                'name'       => 'Add Sample',
                'alias'      => 'store',
                'type'  => Type::PERMISSION->value,
                'guard_name' => 'api',
                'show_in_acl' => true
            ],
            [
                'name'       => 'Update Sample',
                'alias'      => 'update',
                'type'       => Type::PERMISSION->value,
                'guard_name' => 'api'
            ],
            [
                'name'       => 'Delete Sample',
                'alias'      => 'destroy',
                'type'       => Type::PERMISSION->value,
                'guard_name' => 'api'
            ]
        ]
];
