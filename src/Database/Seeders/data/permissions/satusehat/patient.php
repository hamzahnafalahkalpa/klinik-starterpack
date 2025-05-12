<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix           = 'satusehat.';
$prefix_directory = 'satusehat';

return [
    'name'           => 'Patient',
    'alias'          => $prefix . 'patient.index',
    'props'          => [
        'icon'       => 'medical-icon:outpatient',
        'directory'  => $prefix_directory . '/patient',
        'show_in_acl' => true
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Update Patient Satu Sehat',
            'alias'           => $prefix . 'patient.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail Patient Satu Sehat',
            'alias'           => $prefix . 'patient.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
