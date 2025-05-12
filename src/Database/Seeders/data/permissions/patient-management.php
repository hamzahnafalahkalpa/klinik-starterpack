<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = '';

return [
    'name'           => 'Patient Data Management',
    'alias'          => $prefix.'patient-management.',
    'props'          => [
        'icon'       => 'fluent:people-community-20-regular',
        'directory'  => 'patient-management'
    ],
    'type'       => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/patient-management/patient.php'),
        include(__DIR__.'/patient-management/patient-type.php'),
        include(__DIR__.'/patient-management/visit-patient.php'),
        include(__DIR__.'/patient-management/patient-referral.php'),
        include(__DIR__.'/patient-management/appointment.php'),
        include(__DIR__.'/patient-management/reservation.php'),
        include(__DIR__.'/patient-management/letter-queue.php'),
        include(__DIR__.'/patient-management/emergency-waiting-list.php'),
        include(__DIR__.'/patient-management/mcu-waiting-list.php'),
        include(__DIR__.'/patient-management/admin-waiting-list.php'),
        include(__DIR__.'/patient-management/outpatient-waiting-list.php'),
        include(__DIR__.'/patient-management/lab-waiting-list.php'),
        include(__DIR__.'/patient-management/radiology-waiting-list.php'),
    ]
];

