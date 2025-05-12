<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Medical Center', 
    'alias'      => $prefix.'medical-center.',
    'props'      => [
        'icon'       => 'tabler:timeline-event',
        'directory'  => 'medical-center'
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include_once(__DIR__.'/medical-center/clinic.php'),
    ]
];