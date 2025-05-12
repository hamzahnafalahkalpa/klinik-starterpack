<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medical-record.mcu-print-queue.';
$prefix_directory = 'medical-record/mcu-print-queue';

return [
    'name'            => 'MCU Print Queue',
    'alias'           => $prefix . 'index',
    'props'           => [
        'icon'        => 'mdi:printer',
        'directory'   => "$prefix_directory",
        'show_in_acl' => true
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Print Queue',
            'alias'      => $prefix . 'view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Add to Print Queue',
            'alias'      => $prefix . 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Update Print Queue',
            'alias'      => $prefix . 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
