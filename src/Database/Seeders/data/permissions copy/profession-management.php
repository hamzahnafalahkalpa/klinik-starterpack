<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Profession Management',
    'alias'          => 'profession-management',
    'icon'       => 'tabler:briefcase-filled',
    'show_in_acl' => true,
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__. '/profession-management/occupation.php'),
    ]
];
