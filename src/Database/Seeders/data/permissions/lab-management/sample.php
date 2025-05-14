<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'lab-management.';
$prefix_directory = 'lab-management';

return [
        'name'       => 'Sample Management', 
        'alias'      => 'sample.index',
        'icon'        => 'healthicons:medical-sample',
        'show_in_acl' => true,
        'type'  => Type::MENU->value,
        'guard_name' => 'api',
        'childs'     => [
            [
                'name'       => 'Add Sample',
                'alias'      => 'sample.store',
                'type'  => Type::PERMISSION->value,
                'guard_name' => 'api',
                'show_in_acl' => true
            ],
            [
                'name'       => 'Update Sample',
                'alias'      => 'sample.update',
                'type'       => Type::PERMISSION->value,
                'guard_name' => 'api'
            ],
            [
                'name'       => 'Delete Sample',
                'alias'      => 'sample.destroy',
                'type'       => Type::PERMISSION->value,
                'guard_name' => 'api'
            ]
        ]
];
