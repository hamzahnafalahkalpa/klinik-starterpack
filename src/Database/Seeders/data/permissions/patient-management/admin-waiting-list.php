<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'admin-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'admin-waiting-list',$examination);
$examination = json_decode($examination,true);

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'            => 'Admin Waiting List', 
    'alias'           => 'admin-waiting-list.index',
    'icon'        => 'medical-icon:i-medical-records',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Detail Patient',
            'alias'      => 'admin-waiting-list.show',
            'type'  => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
