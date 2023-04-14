<?php
	
	function selArticlesSql(string $cond = '', string $limit = '') : string {
		return "SELECT articles.id, articles.title, articles.text, articles.dt_add, articles.image, articles.cat, articles.user as user_id, articles.dt_add, cats.id as cat_id, cats.name as cat_name, users.name as username, users.login as user_login FROM articles JOIN cats ON articles.cat=cats.id JOIN users ON articles.user=users.id $cond ORDER BY dt_add DESC $limit";
	}

	function getAllArticles() : ?array {
		$sql = selArticlesSql();
		return dbQuery($sql)->fetchAll();
	}
	function getArticlesByCat(int $cid) : ?array {
		$sql = selArticlesSql('WHERE cat=:cid');
		return dbQuery($sql, ['cid' => $cid])->fetchAll();
	}

	function addArticle(array $fields) : bool {
		$sql = "INSERT articles (title, text, image, user, cat) VALUES (:title, :text, :image, :user, :cat)";
		dbQuery($sql, $fields);
		return true;
	}

	function getLast3Articles() : array {
		$sql = selArticlesSql('', "LIMIT 1, 3");
		return dbQuery($sql)->fetchAll();
	}

	function editArticle(array $fields) : bool {
		$sql = "UPDATE articles SET title=:title, text=:text, image=:image, user=:user, cat=:cat WHERE id=:id";
		dbQuery($sql, $fields);
		return true;
	}

	function getOneArticle(int $aid) : array {
		$sql = selArticlesSql('WHERE articles.id=:aid');
		return dbQuery($sql, ['aid' => $aid])->fetch();
	}

	function removeArticle(int $id) : bool {
		$sql = "DELETE FROM articles WHERE id=:id";
		dbQuery($sql, ['id' => $id]);
		return true;
	}

	function getAllArticlesByUser(int $uid) : ?array {
		$sql = selArticlesSql('WHERE users.id=:uid');
		return dbQuery($sql, ['uid' => $uid])->fetchAll();
	}