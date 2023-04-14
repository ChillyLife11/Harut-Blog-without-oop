<?php
	$article = getOneArticle(URL_PARAMS['aid']);


	$cats = getCats();
	$sidebar = template('v_sidebar', [
		'cats' => $cats
	]);

	$pageH1 = 'Articles';
	$pageTitle = 'Harut Blog | Articles';
	$pageContent = template('articles/v_article', [
		'pageH1'   => $pageH1,
		'article'  => $article,
		'sidebar'  => $sidebar
	]);