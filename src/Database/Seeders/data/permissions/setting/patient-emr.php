<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Patient & Medical Record', 
    'alias'       => 'patient-emr',
    'icon'        => 'healthicons:medical-records-outline',
    'type'        => Type::MODULE->value,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/patient-emr/marital-status.php',
        include __DIR__.'/patient-emr/family-role.php',
        include __DIR__.'/patient-emr/education.php',
        include __DIR__.'/patient-emr/examination.php',
    ]
];

