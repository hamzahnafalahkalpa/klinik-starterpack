<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'lab-management.';
$prefix_directory = 'lab-management';

return [
        'name'       => 'Clinical Pathology Patient Queue', 
        'alias'      => 'patology-clinic-queue.index',
        'icon'        => 'material-symbols:lab-research-rounded',
        'show_in_acl' => true,
        'type'  => Type::MENU->value,
        'guard_name' => 'api',
        'childs'     => [
            [
                'name'       => 'Cancel Queue',
                'alias'      => 'patology-clinic-queue.update',
                'type'  => Type::PERMISSION->value,
                'guard_name' => 'api'
            ],
            [
                'name'       => 'Detail Transaction',
                'alias'      => 'patology-clinic-queue.show',
                'type'       => Type::PERMISSION->value,
                'guard_name' => 'api'
            ],
            include(__DIR__.'/queue-patology-clinic/examination.php'),
        ]
];
