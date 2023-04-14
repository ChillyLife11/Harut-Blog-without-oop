<?php

	unset($_SESSION['token']);
	header('Location: ' . BASE_URL . '/signin');