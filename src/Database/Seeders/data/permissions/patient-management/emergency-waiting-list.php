<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'emergency-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'emergency-waiting-list',$examination);
$examination = json_decode($examination,true);

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Emergency Waiting List', 
    'alias'           => $prefix.'emergency-waiting-list.index',
    'props'           => [
        'icon'            => 'healthicons:ambulance',
        'directory'   => "$prefix_directory/emergency-waiting-list",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Detail Patient',
            'alias'      => $prefix.'emergency-waiting-list.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
