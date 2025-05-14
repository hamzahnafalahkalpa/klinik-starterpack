<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'outpatient-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'outpatient-waiting-list',$examination);
$examination = json_decode($examination,true);

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Outpatient Waiting List', 
    'alias'           => 'outpatient-waiting-list.index',
    'icon'            => 'healthicons:outpatient-department',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Detail Patient',
            'alias'      => 'outpatient-waiting-list.show',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
