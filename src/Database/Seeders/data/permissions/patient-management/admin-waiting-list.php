<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'admin-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'admin-waiting-list',$examination);
$examination = json_decode($examination,true);

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Admin Waiting List', 
    'alias'           => $prefix.'admin-waiting-list.index',
    'props'           => [
        'icon'        => 'medical-icon:i-medical-records',
        'directory'   => "$prefix_directory/admin-waiting-list",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Detail Patient',
            'alias'      => $prefix.'admin-waiting-list.show',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
