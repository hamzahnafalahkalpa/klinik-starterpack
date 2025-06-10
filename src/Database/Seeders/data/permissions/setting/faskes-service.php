<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Layanan Faskes', 
    'alias'       => 'faskes-service',
    'icon'        => 'ri:service-fill',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/faskes-service/patient-type-service.php',
        include __DIR__.'/faskes-service/patient-type.php',
        include __DIR__.'/faskes-service/medical-service.php',
        include __DIR__.'/faskes-service/service-cluster.php',
        include __DIR__.'/faskes-service/jasa.php',
    ]
];

