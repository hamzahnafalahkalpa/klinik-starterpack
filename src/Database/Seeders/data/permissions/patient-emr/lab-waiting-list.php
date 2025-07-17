<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$examination = json_encode(include(__DIR__.'/waiting-list/examination.php'));
$examination = str_replace("{{dir-waiting-list}}",'lab-waiting-list',$examination);
$examination = str_replace("{{waiting-list}}",'lab-waiting-list',$examination);
$examination = json_decode($examination,true);

return [
    'name'            => 'Pemeriksaan Laboratorium', 
    'alias'           => 'lab-waiting-list',
    'icon'            => 'covid:virus-lab-research-microscope',
    'type'            => Type::MENU->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'       => 'Detail Lab',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        $examination
    ]
];
