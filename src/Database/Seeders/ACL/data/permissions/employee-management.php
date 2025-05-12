<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'       => 'Kepegawaian', 
    'alias'      => 'employee-management',
    'icon'       => 'clarity:employee-group-solid',
    'directory'  => 'employee-management',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/employee-management/employee.php'),
        // include(__DIR__.'/employee-management/schedule.php')
    ]
];

