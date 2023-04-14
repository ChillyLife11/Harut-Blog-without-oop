<?php

	function getAllUsers() : array {
		$sql = "SELECT * FROM users";
		return dbQuery($sql)->fetchAll();
	}

	function addUser(array $fields) : bool {
		$sql = "INSERT users (login, password, name, avatar) VALUES (:login, :password, :name, :avatar)";
		dbQuery($sql, $fields);
		return true;
	}

	function getUserByLogin(string $login) {
		$sql = "SELECT * FROM users WHERE login=:login";
		return dbQuery($sql, ['login' => $login])->fetch();
	}
	function getUserById(string $uid) : array {
		$sql = "SELECT * FROM users WHERE id=:uid";
		return dbQuery($sql, ['uid' => $uid])->fetch();
	}

	function editUser(array $fields) : bool {
		$sql = "UPDATE users SET login=:login, name=:name, avatar=:avatar WHERE id=:id";
		dbQuery($sql, $fields);
		return true;
	}