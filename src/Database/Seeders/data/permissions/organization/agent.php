<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'organization.';
$prefix_directory = 'organization';

return [
    'name'            => 'Agent Management', 
    'alias'           => 'agent.index',
    'icon'        => 'mdi:face-agent',
    'show_in_acl' => true,
    'type'  => Type::MENU->value,
    'guard_name' => 'api',
    'childs'     => [
        [
            'name'       => 'Add Agent',
            'alias'      => 'agent.add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Update Agent',
            'alias'      => 'agent.update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Agent',
            'alias'      => 'agent.show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Delete Agent',
            'alias'      => 'agent.delete',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
