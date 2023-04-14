<?php
    
    $users = getAllUsers();

    $pageH1 = 'Authors';
	$pageTitle = 'Harut Blog | Authors';
	$pageContent = template('users/v_authors', [
		'pageH1' => $pageH1,
		'users'  => $users,
	]);