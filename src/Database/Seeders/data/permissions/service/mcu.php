
<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'service.';
$prefix_directory = 'service';

return [
    'name'            => 'MCU Package',
    'alias'           => $prefix.'mcu.index',
    'props'           => [
        'icon'        => 'carbon:reminder-medical',
        'directory'   => "$prefix_directory/mcu",
        'show_in_acl' => true
    ],
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Add MCU Package',
            'alias'           => $prefix.'mcu.store',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'props'           => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'            => 'Update MCU Package',
            'alias'           => $prefix.'mcu.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail MCU Package',
            'alias'           => $prefix.'mcu.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Delete MCU Package',
            'alias'           => $prefix.'mcu.destroy',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
