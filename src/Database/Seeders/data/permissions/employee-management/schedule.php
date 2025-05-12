<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'employee-management.';
$prefix_directory = 'employee-management';

return [
    'name'       => 'Schedule Master Data', 
    'alias'      => $prefix.'schedule.',
    'props'      => [
        'directory'  => "$prefix_directory/schedule"
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/schedule/doctor-schedule.php')
    ]
];

