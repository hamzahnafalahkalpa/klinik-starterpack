<?php

use Zahzah\LaravelPermission\Enums\Permission\Type;

$prefix = 'organization.';
$prefix_directory = 'organization';

return [
    'name'            => 'Agent Management', 
    'alias'           => $prefix.'agent.index',
    'props'           => [
        'icon'        => 'mdi:face-agent',
        'directory'   => "$prefix_directory/agent",
        'show_in_acl' => true
    ], 
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Agent',
            'alias'      => $prefix.'agent.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'props'      => [
                'show_in_acl' => true
            ]
        ],
        [
            'name'       => 'Update Agent',
            'alias'      => $prefix.'agent.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Agent',
            'alias'      => $prefix.'agent.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Agent',
            'alias'      => $prefix.'agent.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
