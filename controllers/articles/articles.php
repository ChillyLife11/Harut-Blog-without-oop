<?php

	if (URL_PARAMS['catName'] !== '') {
		$crntCat = getCatByName(URL_PARAMS['catName']);
	}


	$cats = getCats();
	$sidebar = template('v_sidebar', [
		'cats' => $cats
	]);

	if (URL_PARAMS['catName'] === '') {
		$articles = getAllArticles();
	} else {
		$articles = getArticlesByCat($crntCat['id']);
	}

	$pageH1 = 'Articles';
	$pageTitle = 'Harut Blog | Articles';
	$pageContent = template('articles/v_articles', [
		'pageH1'   => $pageH1,
		'sidebar'  => $sidebar,
		'articles' => $articles,
	]);