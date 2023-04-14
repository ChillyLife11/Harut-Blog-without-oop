<form class="col col-5 mx-auto h-article-form" method="POST" enctype="multipart/form-data">
    <h1 class="h1 mb-3 text-center"><?=$pageH1?></h1>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?=$fields['title'];?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Text</label>
        <textarea class="form-control" name="text"><?=$fields['text'];?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">
            <input class="form-control h-image-inp" type="file" name="image" hidden>
            Image <br>
            <div class="btn btn-success">Добавить картинку</div>
        </label>
        <div class="h-image-preview">
            <?php if (isset($fields['image'])): ?>
                <img src="<?=BASE_URL . '/assets/img/' . $fields['image']?>" alt="">
            <?php endif ?>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select class="form-select" name="cat">
            <?php foreach ($cats as $cat): ?>
                <option value="<?=$cat['id']?>" <?=($cat['id'] === $fields['cat']) ? 'selected' : ''?>><?=$cat['name']?></option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success"><?=$isArticleEdit ? 'Edit Article' : 'Add Article'?></button>
    <? if ($err !== ''): ?>
        <div class="alert alert-danger"><?=$err?></div>
    <? endif ?>
</form>