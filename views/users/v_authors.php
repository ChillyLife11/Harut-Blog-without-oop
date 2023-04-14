
		<h1 class="h1 mb-4"><?=$pageH1; ?></h1>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <? foreach ($users as $user): ?>
                <div class="col-lg-4">
                    <div class="img">
                        <img src="<?=BASE_URL . '/assets/img/users/' . $user['avatar']?>" alt="" class="rounded-circle" style="width: 60px; height:60px">
                    </div>

                    <h2 class="h5"><?=$user['name']?></h2>
                    <p><a class="btn btn-secondary" href="<?=BASE_URL . '/profile/' . $user['login']?>">Check Author Profile</a></p>
                </div>
            <? endforeach; ?>
	    </div>