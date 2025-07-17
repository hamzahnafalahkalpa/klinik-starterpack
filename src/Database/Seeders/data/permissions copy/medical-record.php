<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Medical Record',
    'alias'      => 'medical-record',
    'icon'       => 'material-symbols-light:radiology-outline',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include_once(__DIR__ . '/medical-record/mcu-print-queue.php'),
    ]
];
