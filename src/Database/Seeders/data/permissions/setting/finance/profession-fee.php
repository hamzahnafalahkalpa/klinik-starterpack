<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Upah Profesi', 
    'alias'       => 'profession-fee',
    'icon'        => 'solar:wallet-money-bold',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api'
];

