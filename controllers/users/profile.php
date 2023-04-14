<?php

	if (!IS_AUTHED) {
		header('Location: ' . BASE_URL);
		exit();
	}

	$pageUser = getUserByLogin(URL_PARAMS['user_name']);
	
	if (empty($pageUser)) {
		header('Location: ' . BASE_URL . '/errors/e404');
	}
	
	$articles = getAllArticlesByUser($pageUser['id']);

	echo $pageUser['id'];
	echo $_SESSION['user']['id'];
	$isProfile = ($pageUser['id'] === $_SESSION['user']['id']) ? true : false;

	$pageH1 = 'Your Profile';
	$pageTitle = 'Harut Blog | Your Profile';
	$pageContent = template('users/v_profile', [
		'pageH1' => $pageH1,
		'articles' => $articles,
		'isProfile' => $isProfile,
		'pageUser' => $pageUser
	]);