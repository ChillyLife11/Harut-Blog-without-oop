<div class="row">
	<div class="col col-9">
		<h1 class="h1 mb-4"><?=$pageH1; ?></h1>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<?php if ($articles !== []): ?>
				<?php foreach ($articles as $article): ?>
					<div class="col">
						<?=template('v_card', ['article' => $article]);?>
			        </div>
				<?php endforeach ?>
			<?php else: ?>
				<h2 class="h2">Have no articles</h2>
			<?php endif ?>
	    </div>
	</div>
	
	<?=$sidebar?>

</div>