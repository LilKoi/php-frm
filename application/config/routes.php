<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],

	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
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
	]
];