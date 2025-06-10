<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Konfigurasi Data Pasien', 
    'alias'       => 'patient',
    'icon'        => 'fluent:patient-20-regular',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    // 'childs'      => [
    // ]
];

