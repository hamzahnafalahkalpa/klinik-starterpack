<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Satu Sehat',
    'alias'          => 'satusehat.',
    'icon'       => 'game-icons:medical-pack',
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

