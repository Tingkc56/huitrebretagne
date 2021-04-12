<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section class="blog">
    <h1 class="text-center">Blog</h1>
    <header id="headerblog">
            <nav id="nav-categories">
                <button class="btn active" onclick="filter('tout')" id="tout"> tout</button>
                <button class="btn" onclick="filter('recettes')" id="recettes"> Recettes</button>
                <button class="btn" onclick="filter('astuces')" id="astuces"> astuces</button>
                <button class="btn" onclick="filter('tourisme')" id="tourisme"> tourisme</button>
            </nav>
        </header>
    <div class="flex-wrapper">
        <?php foreach($allArticles as $allArticle){?>
        <div class="<?=htmlspecialchars($allArticle['category']) ?> blogArticle flex-1-item-perline-s flex-1-item-perline-m flex-3-item-perline-l">
            <article class="case">
                <div class="case-img-container">
                    <img class="case-img-top" src="<?=htmlspecialchars($allArticle['img']) ?>"
                        alt="<?=htmlspecialchars($allArticle['title']) ?>">
                </div>
                <div class="case-body">
                    <h4 class="case-title"><?=htmlspecialchars($allArticle['title']) ?></h4>
                    <p class="case-text"><?=htmlspecialchars($allArticle['content']) ?> </p>
                    <a href="index.php?action=article&id=<?= $allArticle['id'] ?>"
                        class="btn">Lire plus</a>
                </div>
            </article>
        </div>
        <?php } ?>
    </div>
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>