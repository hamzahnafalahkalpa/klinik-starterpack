<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Komponen', 
    'alias'          => 'component',
    'icon'           => 'eos-icons:project',
    'directory'      => 'component',
    'type'           => Type::MENU->value,
    'guard_name'     => 'api',
    'childs'         => [
        include(__DIR__.'/component/jasa.php'),
    ]
];

