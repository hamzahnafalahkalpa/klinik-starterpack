
<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'pharmacy-unit.sales-history';
$prefix_directory = 'pharmacy-unit/sales-history';

return [
    'name'            => 'View Sales History',
    'alias'           => 'index',
    'icon'        => 'streamline:desktop-dollar-solid',
    'show_in_acl' => true,
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Show Sales History',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
