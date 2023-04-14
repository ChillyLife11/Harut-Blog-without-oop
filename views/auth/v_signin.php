<form class="col col-5 mx-auto" method="POST">
    <h1 class="h1 mb-3 text-center"><?=$pageH1?></h1>
    <div class="mb-3">
        <label class="form-label">Login</label>
        <input type="text" class="form-control" name="login">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-success">Sign in</button>
    <? if ($err !== ''): ?>
        <div class="alert alert-danger"><?=$err?></div>
    <? endif ?>
    <a href="<?=BASE_URL?>/signup" class="d-block mt-2">Sign up</a>
</form>