<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'report.';
$prefix_directory = 'report';

return [
    'name'            => 'Outpatient Report', 
    'alias'           => $prefix.'outpatient-report.index',
    'props'           => [
        'icon'        => 'medical-icon:i-outpatient',
        'directory'   => "$prefix_directory/outpatient-report",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api'
];
