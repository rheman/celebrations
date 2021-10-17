<?php

return [
        'plugin' => [
                'version' => '4.0',
		'name' => 'Celebrations',
                'dependencies' => [
                        'profile' => [
                                'must_be_active' => true,
                                'position' => 'after',
                        ]
                ],
        ],
	'bootstrap' => \Pessek\PessekCelebrations\Bootstrap::class,
	'settings' => [
		'replaceage' => 'no',
		'celebrations_birthdate_field' => 'yes',
		'celebrations_weddingdate_field' => 'yes',
	],
	'actions' => [
		'celebrations/customselection' => [],
	],
	'routes' => [
		'celebrations:celebrations:shorttitle' => [
			'path' => '/celebrations/celebrations/{month?}/{filterid?}',
			'resource' => 'celebrations/celebrations',
		],
		'celebrations:todaycelebrations:shorttitle' => [
			'path' => '/celebrations/todaycelebrations/{month?}/{filterid?}/{day?}',
			'resource' => 'celebrations/todaycelebrations',
		],
		'celebrations:celebrations:customselection' => [
			'path' => '/celebrations/customselection',
			'resource' => 'celebrations/customselection',
		],
	],
	'widgets' => [
		'today_celebrations' => [
			'context' => ['dashboard'],
		],
		'next_celebrations' => [
			'context' => ['dashboard'],
		],
		'index_today_celebrations' => [
			'context' => ['index'],
		],
		'index_next_celebrations' => [
			'context' => ['index'],
		],
	]
];
