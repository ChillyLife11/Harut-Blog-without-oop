<?php

	$newArticles = getLast3Articles();

	$pageTitle = 'Home';
	$pageH1 = 'Harut Blog | Home Page';
	$pageContent = template('v_home', [
		'newArticles' => $newArticles
	]);

	