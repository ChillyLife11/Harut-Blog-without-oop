<div class="card shadow-sm">
		                <img src="<?=BASE_URL . '/assets/img/' . $article['image']?>" alt="" class="h-article-img">
		                <div class="card-body">
		                	<p class="h4"><?=$article['title'];?></p>
		                    <p class="card-text h-preview-text"><?=$article['text'];?></p>
		                    <div class="d-flex justify-content-between align-items-center mb-2">
			                        <div class="btn-group">
			                            <a href="<?=BASE_URL . '/articles/' .  strtolower($article['cat_name']) . '/' . $article['id']?>" class="btn btn-sm btn-outline-secondary">View</a>
				                    	<?php if (isset($isProfile) && $isProfile): ?>
				                            <a href="<?=BASE_URL . '/articles/edit/' . $article['id']?>" class="btn btn-sm btn-outline-secondary">Edit</a>
				                            <a href="<?=BASE_URL . '/articles/remove/' . $article['id']?>" class="btn btn-sm btn-outline-danger">Remove</a>
				                    	<?php endif ?>
			                        </div>
			                        <small class="text-muted"><?=date('j F Y', strtotime($article['dt_add']))?></small>
		                    </div>
		                    <small><em>Author: <a href="<?=BASE_URL . '/profile/' . $article['user_login']?>"><?=$article['username']?></a></em></small> <br>
		                    <small><em>Category: <a href="<?=BASE_URL . '/articles/' . strtolower($article['cat_name'])?>"><?=$article['cat_name']?></a></em></small>
		                </div>
		            </div>