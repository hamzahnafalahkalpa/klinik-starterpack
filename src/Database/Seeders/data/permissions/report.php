<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Reports Collection', 
    'alias'          => $prefix.'report.',
    'props'          => [
        'icon'       => 'mdi:report-tree',
        'directory'  => 'report'
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/report/transactional-report.php'),
        // include(__DIR__.'/report/outpatient-report.php'),
        // include(__DIR__.'/report/diagnose-report.php'),
    ]
];

