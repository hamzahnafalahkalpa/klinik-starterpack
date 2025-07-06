<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'       => 'Program dan Kegiatan', 
    'alias'      => 'api.program-and-activity',
    'icon'       => 'fluent:patient-20-regular',
    'type'       => Type::MENU->value,
    'ordering'    => 4,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/program-and-activity/program.php'),
        include(__DIR__.'/program-and-activity/activity.php'),
    ]
];

 