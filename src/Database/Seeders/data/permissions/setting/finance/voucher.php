<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Pengaturan Voucher', 
    'alias'       => 'voucher',
    'icon'        => 'mdi:voucher',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api'
];

