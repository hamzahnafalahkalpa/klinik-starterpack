<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'transaction.';
$prefix_directory = 'transaction';

return [
    'name'            => 'Point of Sale', 
    'alias'           => 'pos.index',
    'icon'        => 'mdi:point-of-sale',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api'
];

