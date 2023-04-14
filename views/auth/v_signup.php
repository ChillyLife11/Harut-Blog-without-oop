<form class="col col-5 mx-auto" method="POST" enctype="multipart/form-data">
    <h1 class="h1 mb-3 text-center"><?=$pageH1?></h1>
    <div class="mb-3">
        <label class="form-label">Login</label>
        <input type="text" class="form-control" name="login">
    </div>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Avatar</label>
        <input class="form-control" type="file" id="formFile" name="avatar">
    </div>
    <button type="submit" class="btn btn-success">Sign up</button>
    <? if ($err !== ''): ?>
        <div class="alert alert-danger"><?=$err?></div>
    <? endif ?>
</form>