<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'outpatient-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'outpatient-waiting-list',$examination);
$examination = json_decode($examination,true);

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Rawat Jalan', 
    'alias'           => 'outpatient-waiting-list',
    'icon'            => 'healthicons:outpatient-department',
    'type'            => Type::MENU->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'       => 'Detail Rawat Jalan',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
