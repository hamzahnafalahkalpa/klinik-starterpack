<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Registrasi Kunjungan Poli',
    'alias'          => 'register',
    'icon'           => 'mdi:patient',
    'show_in_acl'    => true,
    'type'           => Type::MODULE->value,
    'guard_name'     => 'api'
];

