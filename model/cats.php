<?php

	function getCats() : array {
		$sql = "SELECT * FROM cats";
		return dbQuery($sql)->fetchAll();
	}

	function getCatByName(string $catName) : array {
		$sql = "SELECT * FROM cats WHERE name=:catName";
		return dbQuery($sql, ['catName' => $catName])->fetch();
	}
	function getCatById(int $cid) : array {
		$sql = "SELECT * FROM cats WHERE id=:cid";
		return dbQuery($sql, ['cid' => $cid])->fetch();
	}