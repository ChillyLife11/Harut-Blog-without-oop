<form class="col col-5 mx-auto" method="POST" enctype="multipart/form-data">
    <h1 class="h1 mb-3 text-center"><?=$pageH1?></h1>
    <div class="mb-3">
        <label class="form-label">Login</label>
        <input type="text" class="form-control" name="login" value="<?=$fields['login']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?=$fields['name']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">
            <input type="file" class="h-image-inp" name="avatar" hidden>
            <div class="btn btn-success">Add Avatar</div>
        </label>
        <div class="h-image-preview">
            <?php if (isset($fields['avatar'])): ?>
                <img src="<?=BASE_URL . '/assets/img/users/' . $fields['avatar']?>" alt="">
            <?php endif ?>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
    <? if ($err !== ''): ?>
        <div class="alert alert-danger"><?=$err?></div>
    <? endif ?>
</form>