<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'pharmacy-unit.';
$prefix_directory = 'pharmacy-unit';

return [
    'name'            => 'Penebusan Resep',
    'alias'           => 'prescription-redemption',
    'icon'        => 'fa-solid:prescription-bottle',
    'show_in_acl' => true,
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'View Frontline',
            'alias'      => 'frontline.view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Edit Frontline',
            'alias'      => 'frontline.edit',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'View Dispensing',
            'alias'      => 'dispensing.view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Process Dispensing',
            'alias'      => 'dispensing.process',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'View Penyerahan',
            'alias'      => 'penyerahan.view',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Confirm Penyerahan',
            'alias'      => 'penyerahan.confirm',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
