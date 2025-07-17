<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Medical Center', 
    'alias'      => 'medical-center',
    'icon'       => 'tabler:timeline-event',
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include_once(__DIR__.'/medical-center/clinic.php'),
    ]
];