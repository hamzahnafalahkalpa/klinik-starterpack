
<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'pharmacy-unit.sales-history';
$prefix_directory = 'pharmacy-unit/sales-history';

return [
    'name'            => 'View Sales History',
    'alias'           => $prefix . 'index',
    'props'           => [
        'icon'        => 'streamline:desktop-dollar-solid',
        'directory'   => "$prefix_directory",
        'show_in_acl' => true
    ],
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Show Sales History',
            'alias'      => $prefix . 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
