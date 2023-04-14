<?php

	const BASE_URL = 'http://localhost/harut-blog';

	const SITE_NAME = 'harut-blog';

	const DB_HOST = 'localhost';
	const DB_NAME = 'harutblog';
	const DB_USER = 'root';
	const DB_PASS = 'toor';

	include_once('core/db.php');
	include_once('core/system.php');


	// Подключение всех файлов из папки model/
	$dir = 'model/';
	$models = scandir($dir);
	foreach ($models as $model) {  
	    if (($model !== '.') AND ($model !== '..')) {
		    include_once $dir . '/' . $model;
	    }
	}