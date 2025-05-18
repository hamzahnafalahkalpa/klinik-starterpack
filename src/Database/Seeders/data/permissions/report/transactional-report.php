<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'report.';
$prefix_directory = 'report';

return [
    'name'            => 'Transactional Report', 
    'alias'           => 'transactional-report',
    'icon'        => 'tabler:transaction-dollar',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api'
];
