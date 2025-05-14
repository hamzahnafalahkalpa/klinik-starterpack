<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Reports Collection', 
    'alias'          => 'report',
    'icon'       => 'mdi:report-tree',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/report/transactional-report.php'),
        // include(__DIR__.'/report/outpatient-report.php'),
        // include(__DIR__.'/report/diagnose-report.php'),
    ]
];

