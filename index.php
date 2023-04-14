<?php

	session_start();

	include_once('init.php');

	$cname = $_GET['querysystemurl'] ?? 'home';

	$user = null;

	$token = $_SESSION['token'] ?? null;

	if ($token !== null) {
		$session = getSession($token);

		if ($session !== null) {
			$user = getUserById($session['user']);
		}
	}


	define('IS_AUTHED', $user !== null);

	if (IS_AUTHED) {
		$_SESSION['user'] = $user;
	}

	$routes = include_once('routes.php');
	$routerRes = parseUrl($cname, $routes);
	define('URL_PARAMS', $routerRes['params']);

	$pageTitle = '';
	$pageH1 = '';
	$pageContent = '';

	include_once('controllers/' . $routerRes['controller'] . '.php');

	$html = template('shablon/v_base', [
		'pageTitle' => $pageTitle,
		'pageH1' => $pageH1,
		'pageContent' => $pageContent,
	]);

	echo $html;