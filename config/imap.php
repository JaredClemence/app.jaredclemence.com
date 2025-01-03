<?php

return [
	'default'=> env('IMAP_DEFAULT_ACCOUNT','default'),
	'accounts'=>[
		//Default account configuration
    'default' => [
        'host'          => env('IMAP_HOST', 'imap.example.com'),
        'port'          => env('IMAP_PORT', 993),
        'encryption'    => env('IMAP_ENCRYPTION', 'ssl'), // 'ssl', 'tls', or null
        'validate_cert' => env('IMAP_VALIDATE_CERT', true),
        'username'      => env('IMAP_USERNAME', ''),
        'password'      => env('IMAP_PASSWORD', ''),
        'authentication' => env('IMAP_AUTHENTICATION', 'login'), // Use 'plain', 'login', or 'oauth'
    ],
	],

	//Available options: "mask" (default), "array", "collection"
	'options'=>[
		'delimiter'=>'/',
		'fetch'=>\Webklex\PHPIMAP\IMAP::FT_UID,
		'sequence'=>\Webklex\PHPIMAP\IMAP::ST_MSGN,
		'fetch_body'=>true,
		'fetch_flags'=>true,
		'message_key'=>'list',
		'fetch_order'=>'asc',
		'dispositions'=>['attachment','inline'],
	],
];
