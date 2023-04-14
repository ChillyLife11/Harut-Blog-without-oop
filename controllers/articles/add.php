<?php

	if (!IS_AUTHED) {
		header('Location: ' . BASE_URL);
		exit();
	}

	$fields = [
		'title' => '',
		'text' => '',
		'cat' => ''
	];
	$err = '';
	$cats = getCats();

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$fields['title'] = trim($_POST['title']);
		$fields['text'] = trim($_POST['text']);
		$fields['cat'] = trim($_POST['cat']);
		$image = $_FILES['image'];

		if ($fields['title'] === '' || $fields['text'] === '') {
			$err = 'Check your fields!';
		} else if ($image['type'] === '') {
			$err = 'Image required!';
		} else if ($image['type'] !== 'image/png' && $image['type'] !== 'image/jpeg') {
			$err = 'Image only .png, .jpg or .jpeg';
		} else {
			$imageExt = pathinfo($image['name'], PATHINFO_EXTENSION);
			$imageName = mt_rand(100000000, 10000000000000) . '.' . $imageExt;

			copy($image['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/' .  SITE_NAME . '/assets/img/' . $imageName);

			$fields['image'] = $imageName;
			$fields['user'] = $user['id'];

			if (addArticle($fields)) {
				header('Location: ' . BASE_URL);
			}
		}
	}

	$pageH1 = 'Add Article';
	$pageTitle = 'Harut Blog | Add Article';
	$isArticleEdit = false;
	$pageContent = template('articles/v_form', [ 
		'pageH1'          => $pageH1,
		'err'             => $err,
		'fields'          => $fields,
		'cats'            => $cats,
		'isArticleEdit'   => $isArticleEdit
	]);