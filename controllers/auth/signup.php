<?php

	if (IS_AUTHED) {
		header('Location: ' . BASE_URL);
		exit();
	}

	$fields = [];
	$err = '';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$fields['login'] = trim($_POST['login']);
		$fields['name'] = trim($_POST['name']);
		$fields['password'] = trim($_POST['password']);
		$avatar = $_FILES['avatar'];

		if ($fields['login'] === '' || $fields['name'] === '' || $fields['password'] === '') {
			$err = 'Fields have some errors!';
		} else {
			$avatarExt = pathinfo($avatar['name'], PATHINFO_EXTENSION);
			$avatarName = mt_rand(100000000, 10000000000000) . '.' . $avatarExt;

			copy($avatar['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/' .  SITE_NAME . '/assets/img/users/' . $avatarName);

			$fields['avatar'] = $avatarName;

			$fields['password'] = password_hash($fields['password'], PASSWORD_DEFAULT);

			$userAdded = addUser($fields);

			header('Location: ' . BASE_URL . '/signin');
		}
	}

	$pageH1 = 'Sign up';
	$pageTitle = 'Harut Blog | Sign up';
	$pageContent = template('auth/v_signup', [
		'pageH1' => $pageH1,
		'err'    => $err
	]);