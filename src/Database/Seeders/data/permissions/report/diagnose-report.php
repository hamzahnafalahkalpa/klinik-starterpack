<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'report.';
$prefix_directory = 'report';

return [
    'name'            => 'Diagnose Report', 
    'alias'           => 'diagnose-report',
    'icon'        => 'fa-solid:diagnoses',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api'
];
