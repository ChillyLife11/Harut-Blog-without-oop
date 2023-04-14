
    
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-lg-9 col-xl-7">
                <div class="card">
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img src="<?=BASE_URL . '/assets/img/users/' . $pageUser['avatar']?>" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2 h-avatar" style="width: 150px; z-index: 1">
                            <? if ($pageUser['id'] === $_SESSION['user']['id']): ?>
                                <a href="<?=BASE_URL . '/profile/edit/' . $pageUser['login']?>" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                                    Edit profile
                                </a>
                            <? endif; ?>
                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                            <h5><?=$pageUser['name']?></h5>
                        </div>
                    </div>
                    <div class="p-4 text-black" style="background-color: #f8f9fa;">
                    </div>
                    <div class="card-body p-4 text-black">
                        <!-- <div class="mb-5">
                            <p class="lead fw-normal mb-1">About</p>
                            <div class="p-4" style="background-color: #f8f9fa;">
                                <p class="font-italic mb-1">Web Developer</p>
                                <p class="font-italic mb-1">Lives in New York</p>
                                <p class="font-italic mb-0">Photographer</p>
                            </div>
                        </div> -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="lead fw-normal mb-0">Recent posts</p>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach ($articles as $article): ?>
                                <div class="col col-6">
                                    <?=template('v_card', ['article' => $article, 'isProfile' => $isProfile]);?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>