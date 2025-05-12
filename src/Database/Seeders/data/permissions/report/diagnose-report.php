<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'report.';
$prefix_directory = 'report';

return [
    'name'            => 'Diagnose Report', 
    'alias'           => $prefix.'diagnose-report.index',
    'props'           => [
        'icon'        => 'fa-solid:diagnoses',
        'directory'   => "$prefix_directory/diagnose-report",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api'
];
