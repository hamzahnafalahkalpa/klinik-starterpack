
<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'service.';
$prefix_directory = 'service';

return [
    'name'            => 'MCU Package',
    'alias'           => 'mcu.index',
    'icon'        => 'carbon:reminder-medical',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'            => 'Add MCU Package',
            'alias'           => 'mcu.store',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'show_in_acl' => true
        ],
        [
            'name'            => 'Update MCU Package',
            'alias'           => 'mcu.update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Detail MCU Package',
            'alias'           => 'mcu.show',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Delete MCU Package',
            'alias'           => 'mcu.destroy',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
