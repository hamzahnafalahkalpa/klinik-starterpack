<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Pengelolaan Proyek', 
    'alias'          => 'project-management',
    'icon'           => 'eos-icons:project',
    'directory'      => 'project-management',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__.'/project-management/client-management.php'),
        include(__DIR__.'/project-management/client-type.php'),
        include(__DIR__.'/project-management/manufacturing.php'),
        include(__DIR__.'/project-management/rencana-anggaran.php'),
        include(__DIR__.'/project-management/rencana-anggaran-pelaksana.php'),
        include(__DIR__.'/project-management/execution-type.php'),
        include(__DIR__.'/project-management/project-category.php'),
        include(__DIR__.'/project-management/document-type.php'),
        include(__DIR__.'/project-management/subcon.php'),
        include(__DIR__.'/project-management/project.php'),
    ]
];

