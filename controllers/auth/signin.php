<?php

	if (IS_AUTHED) {
		header('Location: ' . BASE_URL);
		exit();
	}

	$fields = [];
	$err = '';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$fields['login'] = trim($_POST['login']);
		$fields['password'] = trim($_POST['password']);

		if ($fields['login'] === '' || $fields['password'] === '') {
			$err = 'Fields have some errors!';
		} else {
			$user = getUserByLogin($fields['login']);

			if (!$user) {
				$err = 'User does not exist!';
			} else {
				if (password_verify($fields['password'], $user['password'])) {

					echo 1;

					// генерация 128-символьного токена
					$token = bin2hex(random_bytes(64));

					$_SESSION['token'] = $token;

					addSession($_SESSION['token'], $user['id']);
				} else {
					$err = 'Wrong password!';
				}
			}
		}
	}

	$pageH1 = 'Sign in';
	$pageTitle = 'Harut Blog | Sign in';
	$pageContent = template('auth/v_signin', [
		'pageH1' => $pageH1,
		'err'    => $err
	]);