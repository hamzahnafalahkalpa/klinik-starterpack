<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'employee-management.';
$prefix_directory = 'employee-management';

return [
    'name'       => 'Schedule Master Data', 
    'alias'      => 'schedule',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/schedule/doctor-schedule.php')
    ]
];

