<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'       => 'Component', 
    'alias'      => 'component',
    'icon'       => 'uiw:component',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/component/bank.php'),
        include(__DIR__.'/component/voucher.php'),
        include(__DIR__.'/component/funding.php'),
        include(__DIR__.'/component/tariff-component.php'),
        include(__DIR__.'/component/profession-fee.php')
    ]
];

