<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Medical Record',
    'alias'      => $prefix . 'medical-record.',
    'props'      => [
        'icon'       => 'material-symbols-light:radiology-outline',
        'directory'  => 'medical-record',
        'show_in_acl' => true
    ],
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include_once(__DIR__ . '/medical-record/mcu-print-queue.php'),
    ]
];
