<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'radiology-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'radiology-waiting-list',$examination);
$examination = json_decode($examination,true);

return [
    'name'            => 'Radiologi', 
    'alias'           => 'radiology-waiting-list',
    'icon'            => 'healthicons:radiology',
    'show_in_acl'     => true,
    'type'            => Type::MENU->value,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'       => 'Detail Patient',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
