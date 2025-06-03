<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Supplier',
    'alias'       => 'supplier',
    'icon'        => 'lsicon:distribution-filled',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api'
];
