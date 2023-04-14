<?php

	$article = getOneArticle(URL_PARAMS['aid']);

	if (!IS_AUTHED || $user['id'] !== $article['user_id']) {
		header('Location: ' . BASE_URL);
		exit();
	}

	removeArticle(URL_PARAMS['aid']);

	header('Location: ' . BASE_URL . '/articles');