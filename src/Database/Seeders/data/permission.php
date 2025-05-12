<?php

$prefix = '';

$list_permissions = array_map(function ($permission) {
    return include_once(__DIR__.'/permissions/'.$permission);
}, array_filter(scandir(__DIR__.'/permissions'), function ($permission) {
    return strpos($permission, '.php') !== false;
}));

$list_permissions = array_values($list_permissions);
return $list_permissions;   