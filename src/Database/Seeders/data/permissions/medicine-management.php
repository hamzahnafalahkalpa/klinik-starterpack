<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Daftar Obat dan BMHP',
    'alias'          => 'medicine-management.',
    'icon'       => 'healthicons:pharmacy',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__ . '/medicine-management/medicine.php'),
        include(__DIR__ . '/medicine-management/bmhp.php'),
        include(__DIR__ . '/medicine-management/medical-procurement.php'),
        include(__DIR__ . '/medicine-management/opname-stock.php'),
        include(__DIR__ . '/medicine-management/supplier.php'),
        include(__DIR__ . '/medicine-management/distribution.php'),
        include(__DIR__ . '/medicine-management/order.php'),
    ]
];
