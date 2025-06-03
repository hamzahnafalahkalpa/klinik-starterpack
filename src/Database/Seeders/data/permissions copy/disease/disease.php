<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'disease.';
$prefix_directory = 'disease';

return [
    'name'            => 'Disease Icd', 
    'alias'           => 'icd',
    'icon'        => 'medical-icon:i-physical-therapy',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Show Disease Icd Detail',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
