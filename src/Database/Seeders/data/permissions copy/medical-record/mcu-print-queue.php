<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medical-record.mcu-print-queue.';
$prefix_directory = 'medical-record/mcu-print-queue';

return [
    'name'            => 'MCU Print Queue',
    'alias'           => 'index',
    'icon'        => 'mdi:printer',
    'show_in_acl' => true,
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Print Queue',
            'alias'      => 'view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Add to Print Queue',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Update Print Queue',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
