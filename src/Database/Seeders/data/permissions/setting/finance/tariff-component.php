<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Pengaturan Komponen Tarif', 
    'alias'           => 'tariff-component',
    'icon'            => 'healthicons:coins',
    'type'            => Type::MODULE->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api'
];

