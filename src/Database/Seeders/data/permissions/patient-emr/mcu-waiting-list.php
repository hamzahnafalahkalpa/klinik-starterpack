<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'mcu-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'mcu-waiting-list',$examination);
$examination = json_decode($examination,true);

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Medical Checkup', 
    'alias'           => 'mcu-waiting-list',
    'icon'            => 'carbon:reminder-medical',
    'type'            => Type::MENU->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'       => 'Detail MCU',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
