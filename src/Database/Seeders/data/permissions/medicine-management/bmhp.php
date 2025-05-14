<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'medicine-management.';
$prefix_directory = 'medicine-management';

return [
    'name'            => 'Data BMHP',
    'alias'           => 'bmhp.index',
    'icon'        => 'game-icons:medical-thermometer',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Show BMHP',
            'alias'      => 'bmhp.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Add BMHP',
            'alias'      => 'bmhp.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Edit BMHP',
            'alias'      => 'bmhp.edit',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete BMHP',
            'alias'      => 'bmhp.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        include(__DIR__.'/bmhp/card-stock.php')
    ]
];
