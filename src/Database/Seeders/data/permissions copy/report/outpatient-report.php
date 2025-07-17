<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'report.';
$prefix_directory = 'report';

return [
    'name'            => 'Outpatient Report', 
    'alias'           => 'outpatient-report',
    'icon'        => 'medical-icon:i-outpatient',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api'
];
