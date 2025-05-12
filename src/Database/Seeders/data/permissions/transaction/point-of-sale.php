<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'            => 'Point of Sale', 
    'alias'           => $prefix.'pos.index',
    'props'           => [
        'icon'        => 'mdi:point-of-sale',
        'directory'   => $prefix_directory.'/pos',
        'show_in_acl' => true
    ], 
    'type'       => Type::MENU->value,
    'guard_name' => 'api'
];

