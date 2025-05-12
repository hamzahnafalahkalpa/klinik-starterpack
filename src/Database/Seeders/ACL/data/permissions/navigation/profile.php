<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Profile',
    'alias'       => 'profile',
    'icon'        => 'streamline:user-profile-focus-solid',
    'show_in_acl' => true,
    'type'        => Type::NAVIGATION->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Update Profile',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ]
    ]
];
