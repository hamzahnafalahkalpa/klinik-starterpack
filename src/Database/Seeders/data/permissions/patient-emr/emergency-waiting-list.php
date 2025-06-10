<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'emergency-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'emergency-waiting-list',$examination);
$examination = json_decode($examination,true);

return [
    'name'            => 'Gawat Darurat', 
    'alias'           => 'emergency-waiting-list',
    'icon'            => 'healthicons:ambulance',
    'type'            => Type::MENU->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'       => 'Detail Pasien Gawat Darurat',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
