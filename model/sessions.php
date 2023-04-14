<?php

	function addSession(string $token, string $uid) : string {
		$sql = "INSERT sessions (token, user) VALUES (:token, :uid)";
		dbQuery($sql, ['token' => $token, 'uid' => $uid]);
		return true;
	}

	function getSession(string $token) : array {
		$sql = "SELECT * FROM sessions WHERE token=:token";
		return dbQuery($sql, ['token' => $token])->fetch();
	}