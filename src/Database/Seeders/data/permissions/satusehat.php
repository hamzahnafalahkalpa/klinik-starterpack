<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Satu Sehat',
    'alias'          => $prefix.'satusehat.',
    'props'          => [
        'icon'       => 'game-icons:medical-pack',
        'directory'  => 'satusehat'
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/satusehat/organization.php'),
        include(__DIR__.'/satusehat/location.php'),
        include(__DIR__.'/satusehat/patient.php'),
        include(__DIR__.'/satusehat/practitioner.php'),
        include(__DIR__.'/satusehat/examination.php'),
    ]
];

