<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Patient',
    'alias'          => 'patient',
    'icon'       => 'medical-icon:outpatient',
    'show_in_acl' => true,
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Patient Satu Sehat',
            'alias'           => 'update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Patient Satu Sehat',
            'alias'           => 'show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
