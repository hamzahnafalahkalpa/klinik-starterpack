<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'report.';
$prefix_directory = 'report';

return [
    'name'            => 'Transactional Report', 
    'alias'           => $prefix.'transactional-report.index',
    'props'           => [
        'icon'        => 'tabler:transaction-dollar',
        'directory'   => "$prefix_directory/transactional-report",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api'
];
