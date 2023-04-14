<?php

	if (!IS_AUTHED) {
		header('Location: ' . BASE_URL);
		exit();
	}

    $user = getUserByLogin(URL_PARAMS['user_name']);
    
	$fields = [
        'id'       => $user['id'],
        'login'    => $user['login'],
        'name'     => $user['name'],
        'avatar'   => $user['avatar']
    ];
	$err = '';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$fields['login'] = trim($_POST['login']);
		$fields['name'] = trim($_POST['name']);
		$avatar = $_FILES['avatar']['name'] === '' ? $fields['avatar'] : $_FILES['avatar'];

		if ($fields['login'] === '' || $fields['name'] === '') {
			$err = 'Fields have some errors!';
		} else {
            if (isset($avatar['name'])) {
                $avatarExt = pathinfo($avatar['name'], PATHINFO_EXTENSION);
                $avatarName = mt_rand(100000000, 10000000000000) . '.' . $avatarExt;
    
                copy($avatar['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/' .  SITE_NAME . '/assets/img/users/' . $avatarName);
                $fields['avatar'] = $avatarName;
            }


			$userAdded = editUser($fields);

			header('Location: ' . BASE_URL . '/profile/' . $fields['login']);
		}
	}

	$pageH1 = 'Edit';
	$pageTitle = 'Harut Blog | Edit';
	$pageContent = template('users/v_edit', [
		'pageH1' => $pageH1,
		'err'    => $err,
        'fields' => $fields
	]);