<?php

	return [
		[
			'test' => '/^$/',
			'controller' => 'home'
		],
		[
			'test' => '/^admin$/',
			'controller' => 'toadmin'
		],
		[
			'test' => '/^signin$/',
			'controller' => 'auth/signin'
		],
		[
			'test' => '/^authors$/',
			'controller' => 'users/authors'
		],
		[
			'test' => '/^logout$/',
			'controller' => 'auth/logout'
		],
		[
			'test' => '/^profile\/([1-9a-zA-Z]+\d*)$/',
			'controller' => 'users/profile',
			'params' => [
				'user_name' => 1
			]
		],
		[
			'test' => '/^profile\/edit\/([1-9a-zA-Z]+\d*)$/',
			'controller' => 'users/edit',
			'params' => [
				'user_name' => 1
			]
		],
		[
			'test' => '/^articles\/add$/',
			'controller' => 'articles/add'
		],
		[
			'test' => '/^articles\/remove\/([1-9]+\d*)$/',
			'controller' => 'articles/remove',
			'params' => [
				'aid' => 1
			]
		],
		[
			'test' => '/^articles\/edit\/([1-9]+\d*)$/',
			'controller' => 'articles/edit',
			'params' => [
				'aid' => 1
			]
		],
		[
			'test' => '/^articles\/?([a-z]+\d*)?\/?$/',
			'controller' => 'articles/articles',
			'params' => [
				'catName' => 1
			]
		],
		[
			'test' => '/^articles\/?([a-z]+\d*)?\/?([1-9]+\d*)?$/',
			'controller' => 'articles/article',
			'params' => [
				'catName' => 1,
				'aid'     => 2
			]
		],
	];