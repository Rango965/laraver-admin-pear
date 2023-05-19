<?php
$prefix = 'admin';
$namePrefix = $prefix . '.';
$urlPrefix = '/' . $prefix;
$roles = [
    [
        'key' => 'system',
        'label' => '系统管理员',
        'disabled' => false,
    ],
];
return [
    'prefix' => $prefix,
    'namePrefix' => $namePrefix,
    'roles' => $roles,
];
