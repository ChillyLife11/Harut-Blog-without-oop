<aside class="col col-3">
	<div class="list-group">
		<a href="<?=BASE_URL . '/articles'?>" class="list-group-item <? echo URL_PARAMS['catName'] === '' ? 'active' : '';?>">All Articles</a>
		<?php foreach ($cats as $cat):
			$isCurrentCat = URL_PARAMS['catName'] === strtolower($cat['name']);
		?>
			<a href="<?=BASE_URL . '/articles/' . strtolower($cat['name'])?>" class="list-group-item <?=($isCurrentCat) ? 'active' : '';?>"><?=$cat['name'];?></a>
		<?php endforeach ?>
	</div>
</aside>