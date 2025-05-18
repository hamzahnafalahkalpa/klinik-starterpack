<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Admin Waiting List', 
    'alias'           => 'admin-waiting-list',
    'icon'        => 'medical-icon:i-medical-records',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Detail Patient',
            'alias'      => 'show',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        include(__DIR__.'/waiting-list/examination.php'),
    ]
];
