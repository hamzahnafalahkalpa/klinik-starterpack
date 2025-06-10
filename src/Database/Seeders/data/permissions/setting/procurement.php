<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Aset Pengadaan', 
    'alias'       => 'procurement',
    'icon'        => 'game-icons:buy-card',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/procurement/supplier.php'
    ]
];

