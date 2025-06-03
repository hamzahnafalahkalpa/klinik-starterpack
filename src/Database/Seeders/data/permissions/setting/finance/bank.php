<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Pengaturan Bank', 
    'alias'       => 'bank',
    'icon'        => 'noto:bank',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api'
];

