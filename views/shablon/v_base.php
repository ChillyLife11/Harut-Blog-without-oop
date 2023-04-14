<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="<?=BASE_URL; ?>/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=BASE_URL; ?>/assets/css/style.css">
</head>
<body>
	
	<div class="container">
		
		<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
			<a href="<?=BASE_URL; ?>" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
				Harut Blog
			</a>

			<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
				<li><a href="<?=BASE_URL;?>" class="nav-link px-2 link-dark">Home</a></li>
				<li><a href="<?=BASE_URL;?>/articles" class="nav-link px-2 link-dark">Articles</a></li>
				<li><a href="<?=BASE_URL;?>/authors" class="nav-link px-2 link-dark">Authors</a></li>
			</ul>

			<?php if (isset($_SESSION['token'])): ?>
				
				<div class="dropdown text-end">
				    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
				        <img src="<?=BASE_URL . '/assets/img/users/' . $_SESSION['user']['avatar']?>" alt="mdo" width="32" height="32" class="rounded-circle">
				    </a>
				    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
				        <li><a class="dropdown-item" href="<?=BASE_URL . '/profile/' . $_SESSION['user']['login']?>">Profile</a></li>
				        <li><a class="dropdown-item" href="<?=BASE_URL?>/articles/add">Add Article</a></li>
				        <li>
				            <hr class="dropdown-divider">
				        </li>
				        <li><a class="dropdown-item text-danger" href="<?=BASE_URL?>/logout">Sign out</a></li>
				    </ul>
				</div>

			<?php else: ?>
				
				<div class="col-md-3 text-end">
					<a href="<?=BASE_URL?>/signin" class="btn btn-outline-primary me-2">Sign in</a>
					<a href="<?=BASE_URL?>/signup" class="btn btn-primary">Sign up</a>
				</div>

			<?php endif ?>
		</header>

		<?=$pageContent; ?>


		<footer class="py-3 my-4">
		    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
				<li class="nav-item"><a href="<?=BASE_URL; ?>" class="nav-link px-2 text-muted">Home</a></li>
				<li class="nav-item"><a href="<?=BASE_URL . '/articles'?>" class="nav-link px-2 text-muted">Articles</a></li>
				<li class="nav-item"><a href="<?=BASE_URL . '/authors'?>" class="nav-link px-2 text-muted">Authors</a></li>
		    </ul>
		    <p class="text-center text-muted">© 2021 Company, Inc</p>
	  </footer>

	</div>

	<script src="<?=BASE_URL?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=BASE_URL?>/assets/js/script.js"></script>

</body>
</html>