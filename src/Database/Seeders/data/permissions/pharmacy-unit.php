<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Instalasi Farmasi',
    'alias'          => 'pharmacy-unit.',
    'icon'       => 'healthicons:pharmacy',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/pharmacy-unit/pharmacy-sales.php'),
        // include(__DIR__.'/pharmacy-unit/prescription-redemption.php'),
        // include(__DIR__.'/pharmacy-unit/request-queue.php'),
        include(__DIR__.'/pharmacy-unit/sales-history.php'),
    ]
];

