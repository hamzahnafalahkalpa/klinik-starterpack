<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Organization Management', 
    'alias'          => $prefix.'organization.',
    'props'          => [
        'icon'       => 'clarity:organization-solid',
        'directory'  => 'organization'
    ], 
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__.'/organization/agent.php'),
        include(__DIR__.'/organization/payer.php'),
        include(__DIR__.'/organization/boat.php')
    ]
];