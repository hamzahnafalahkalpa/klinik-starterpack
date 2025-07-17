<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'lab-management.patology-clinic-queue.';
$prefix_directory = 'lab-management/patology-clinic-queue';

return [
    'name'       => 'Examination', 
    'alias'      => 'examination',
    'icon'       => 'jam:medical',
    'type'       => Type::MODULE->value,
    'guard_name' => 'api'
    // 'childs'     => [

    // ]
];
