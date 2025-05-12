<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'lab-management.';
$prefix_directory = 'lab-management';

return [
        'name'       => 'Sample Management', 
        'alias'      => $prefix.'sample.index',
        'props'      => [
            'icon'        => 'healthicons:medical-sample',
            'directory'   => $prefix_directory.'/sample',
            'show_in_acl' => true
        ], 
        'type'  => Type::MENU->value,
        'guard_name' => 'api',
        'childs'     => [
            [
                'name'       => 'Add Sample',
                'alias'      => $prefix.'sample.store',
                'type'  => Type::PERMISSION->value,
                'guard_name' => 'api',
                'props'      => [
                    'show_in_acl' => true
                ]
            ],
            [
                'name'       => 'Update Sample',
                'alias'      => $prefix.'sample.update',
                'type'       => Type::PERMISSION->value,
                'guard_name' => 'api'
            ],
            [
                'name'       => 'Delete Sample',
                'alias'      => $prefix.'sample.destroy',
                'type'       => Type::PERMISSION->value,
                'guard_name' => 'api'
            ]
        ]
];
