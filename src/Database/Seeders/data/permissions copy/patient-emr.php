<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Patient Data Management',
    'alias'          => 'patient-emr',
    'icon'       => 'fluent:people-community-20-regular',
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/patient-emr/patient.php'),
        include(__DIR__.'/patient-emr/patient-type.php'),
        include(__DIR__.'/patient-emr/visit-patient.php'),
        include(__DIR__.'/patient-emr/patient-referral.php'),
        include(__DIR__.'/patient-emr/appointment.php'),
        include(__DIR__.'/patient-emr/reservation.php'),
        include(__DIR__.'/patient-emr/letter-queue.php'),
        include(__DIR__.'/patient-emr/emergency-waiting-list.php'),
        include(__DIR__.'/patient-emr/mcu-waiting-list.php'),
        include(__DIR__.'/patient-emr/admin-waiting-list.php'),
        include(__DIR__.'/patient-emr/outpatient-waiting-list.php'),
        include(__DIR__.'/patient-emr/lab-waiting-list.php'),
        include(__DIR__.'/patient-emr/radiology-waiting-list.php'),
    ]
];

