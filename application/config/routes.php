<?php

return [

    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    "faq" => [
        'controller' => 'faq',
        'action' => 'index',
    ],

    "category" => [
        'controller' => 'category',
        'action' => 'index',
    ],

    "admin/category/create" => [
        'controller' => 'category',
        'action' => 'create',
    ],

    "admin/category" => [
        'controller' => 'category',
        'action' => 'admin',
    ],

    "admin/category/edit" => [
        'controller' => 'category',
        'action' => 'edit',
    ],

    "category/store" => [
        'controller' => 'category',
        'action' => 'store',
    ],

    "category/update" => [
        'controller' => 'category',
        'action' => 'update',
    ], 

    "admin/cards" => [
        'controller' => 'admin',
        'action' => 'admin',
    ],
    
    "cards/delete" => [
        'controller' => 'admin',
        'action' => 'delete',
    ],

    "faq/store" => [
        'controller' => 'faq',
        'action' => 'store',
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],

    'account/auth' => [
        'controller' => 'account',
        'action' => 'create',
    ],

    'account/logAuth' => [
        'controller' => 'account',
        'action' => 'logAuth',
    ],

    'config/migrate' => [
        'controller' => 'config',
        'action' => 'database',
    ],
    'admin/create' => [
        'controller' => 'admin',
        'action' => 'create'
    ],
    'admin/store' => [
        'controller' => 'admin',
        'action' => 'store'
    ],
    "admin/edit" => [
        "controller" => "admin",
        'action' => 'edit'
    ],
    "admin/update" => [
        "controller" => "admin",
        'action' => 'update'
    ],
];