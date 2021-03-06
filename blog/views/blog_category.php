<?php include APPPATH.'views/header.php'; ?>
    <div class="container">
        <br/>
        <ol class="breadcrumb">
            <li><a href="<?= site_url() ?>"><?= lang('home') ?></a></li>
            <li class="active"><?= lang('category') ?></li>
            <li class="active"><?= $data['blog_category']['name'] ?></li>
        </ol>
    </div>
    <div class="container">
        <h1 class="text-center"><?= $data['blog_category']['name'] ?></h1>
        <div class="extranews_separator"></div>
        <?php foreach ($data['blogs'] as $blog): ?>
            <div class="row thumbnail">
                <div class="col-sm-2">
                    <img class="img-responsive" src="<?= $blog['image'] ?>"/>
                </div>
                <div class="col-sm-10">
                    <p style="font-size: 22px">
                        <a class="link-dich-vu" href="<?= site_url($blog['router_name'] . '.html') ?>">
                            <?= $blog['name'] ?>
                        </a>
                    </p>
                    <p style="color:#898B8B">
                        <?php
                        if ($blog['excerpt'] != '') echo getExcerpt($blog['excerpt'], 0, 500);
                        else echo getExcerpt($blog['content'], 0, 500);
                        ?>
                    </p>
                    <p style="color:#898B8B">
                        <i class="fa fa-clock-o"></i> <?= $blog['date_modifiled'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
        <?= $data['pagination'] ?>
    </div>
<?php include APPPATH.'views/footer.php'; ?>