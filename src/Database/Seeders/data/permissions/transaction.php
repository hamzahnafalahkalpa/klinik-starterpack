<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Transaction',
    'alias'          => $prefix.'transaction.',
    'props'          => [
        'icon'       => 'tabler:transaction-dollar',
        'directory'  => 'transaction'
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/transaction/point-of-sale.php'),
        include(__DIR__.'/transaction/invoice.php'),
        // include(__DIR__.'/transaction/deposit.php'),
        include(__DIR__.'/transaction/refund.php'),
        // include(__DIR__.'/transaction/defer-payment.php'),
        include(__DIR__.'/transaction/payment-history.php'),
    ]
];

