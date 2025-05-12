<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Profession Management',
    'alias'          => $prefix.'profession-management.',
    'props'          => [
        'icon'       => 'tabler:briefcase-filled',
        'directory'  => 'profession-management',
        'show_in_acl' => true
    ],
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__. '/profession-management/occupation.php'),
    ]
];
