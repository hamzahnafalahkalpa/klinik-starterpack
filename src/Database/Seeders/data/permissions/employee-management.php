<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Manajemen Pegawai', 
    'alias'          => $prefix.'employee-management.',
    'props'          => [
        'icon'       => 'clarity:employee-group-solid',
        'directory'  => 'employee-management'
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/employee-management/employee.php'),
        include(__DIR__.'/employee-management/schedule.php')
    ]
];

