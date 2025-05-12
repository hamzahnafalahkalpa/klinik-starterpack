<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'       => 'Patient in Referral', 
    'alias'      => $prefix.'referral.index',
    'props'      => [
        'icon'       => 'healthicons:referral',
        'directory'   => "$prefix_directory/referral",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Patient Detail',
            'alias'           => $prefix.'referral.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];

