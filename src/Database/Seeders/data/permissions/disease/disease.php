<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'disease.';
$prefix_directory = 'disease';

return [
    'name'            => 'Disease Icd', 
    'alias'           => $prefix.'icd.index',
    'props'           => [
        'icon'        => 'medical-icon:i-physical-therapy',
        'directory'   => "$prefix_directory/Icd",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Show Disease Icd Detail',
            'alias'      => $prefix.'icd.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
