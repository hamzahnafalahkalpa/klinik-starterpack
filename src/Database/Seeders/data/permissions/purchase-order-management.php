<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Pengadaan dan Sistem PO', 
    'alias'       => 'api.purchase-order-management',
    'icon'        => 'mdi:cellphone-settings-variant',
    'type'        => Type::MENU->value, //MODULE //PERMISSION
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/purchase-order-management/request-order.php',
        include __DIR__.'/purchase-order-management/purchasing.php',
        include __DIR__.'/purchase-order-management/receive-order.php',
    ]
];

