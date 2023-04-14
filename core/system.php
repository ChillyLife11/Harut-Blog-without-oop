<?php

	function template(string $path, array $arrs = []) : string {
		$templateFullPathFromPath = "views/$path.php";
		extract($arrs);
		ob_start();
		include($templateFullPathFromPath);
		return ob_get_clean();
	}

	function parseUrl(string $url, array $routes) : array {
		$res = [
			'controller' => 'errors/e404',
			'params'     => []
		];


		foreach ($routes as $route) {

			$matches = [];

			if (preg_match($route['test'], $url, $matches)) {
				$res['controller'] = $route['controller'];

				if (isset($route['params'])) {
					foreach ($route['params'] as $key => $value) {
						$res['params'][$key] = $matches[$value] ?? '';
					}
				}
				break;
			}
		}

		return $res;
	}