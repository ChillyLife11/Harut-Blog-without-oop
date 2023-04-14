<?php

	function dbConnect() : PDO {
		static $db;

		if ($db === null) {
			$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]);

			$db->exec('SET NAMES UTF8');
		}

		return $db;
	}

	function dbQuery(string $sql, array $params = []) : PDOStatement {
		$db = dbConnect();
		$query = $db->prepare($sql);
		$query->execute($params);
		return $query;
	}