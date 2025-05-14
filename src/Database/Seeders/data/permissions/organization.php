<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Organization Management', 
    'alias'          => 'organization.',
    'icon'       => 'clarity:organization-solid',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__.'/organization/agent.php'),
        include(__DIR__.'/organization/payer.php'),
        include(__DIR__.'/organization/boat.php')
    ]
];