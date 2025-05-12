<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'lab-management.patology-clinic-queue.';
$prefix_directory = 'lab-management/patology-clinic-queue';

return [
    'name'       => 'Examination', 
    'alias'      => $prefix.'examination.index',
    'props'      => [
        'icon'       => 'jam:medical',
        'directory'  => $prefix_directory.'/examination'
    ], 
    'type'       => Type::MODULE->value,
    'guard_name' => 'api'
    // 'childs'     => [

    // ]
];
