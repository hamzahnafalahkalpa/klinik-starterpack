<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'outpatient-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'outpatient-waiting-list',$examination);
$examination = json_decode($examination,true);

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Outpatient Waiting List', 
    'alias'           => $prefix.'outpatient-waiting-list.index',
    'props'           => [
        'icon'            => 'healthicons:outpatient-department',
        'directory'   => "$prefix_directory/outpatient-waiting-list",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Detail Patient',
            'alias'      => $prefix.'outpatient-waiting-list.show',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
