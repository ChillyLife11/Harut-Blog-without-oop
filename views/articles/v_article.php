<div class="row">
    <div class="col-9">
        <!-- Post content-->
        <article>
            <!-- Post header-->
            <header class="mb-4">
                <!-- Post title-->

                <h1 class="fw-bolder mb-1"><?=$article['title']?></h1>
                <!-- Post meta content-->
                <!-- <div class="text-muted fst-italic mb-2">Post Date: <?=date("F j, Y", strtotime($article['dt_add']));?></div>
                <div class="text-muted fst-italic mb-2">Category: <?=$article['cat_name'];?></div> -->
                <!-- Post categories-->
                <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
            </header>
            <!-- Preview image figure-->
            <figure class="mb-4"><img class="img-fluid rounded" src="<?=BASE_URL . '/assets/img/' . $article['image']?>" alt="..."></figure>
            <!-- Post content-->
            <section class="mb-5">
                <?=nl2br($article['text'])?>
            </section>

            <?php 
                if (isset($_SESSION['user'])):
                    if ($article['user_id'] === $_SESSION['user']['id']): 
            ?>
                <div>
                    <a href="<?=BASE_URL . '/articles/remove/' . $article['id']?>" class="col col-1 btn btn-outline-danger">Remove</a>
                    <a href="<?=BASE_URL . '/articles/edit/' . $article['id']?>" class="col col-1 btn btn-outline-secondary">Edit</a>
                </div>

            <?php 
                    endif;
                endif;
            ?>
        </article>
    </div>
    <?=$sidebar?>

</div>