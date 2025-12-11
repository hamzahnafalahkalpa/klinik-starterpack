<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Pemantauan Wilayah Setempat', 
    'alias'       => 'api.pws',
    'icon'        => 'streamline:dashboard-3-remix',
    'type'        => Type::MENU->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'ordering'    => 98,
    'childs'      => [
        include(__DIR__.'/pws/cluster.php'),
        include(__DIR__.'/pws/cluster-1.php'),
        include(__DIR__.'/pws/cluster-2.php'),
        include(__DIR__.'/pws/cluster-3.php'),
        include(__DIR__.'/pws/cluster-4.php'),
        include(__DIR__.'/pws/lintas-cluster.php'),
    ]
];

