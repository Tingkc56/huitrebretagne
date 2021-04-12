<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->
<section class="producer text-center">

        <div class="article-page">
    <div class="article-img flex-1-item-perline-s flex-2-item-perline-m">
        <img class="img-fluid img-br-10px" src="<?= htmlspecialchars($producer['img']) ?>" alt="<?= htmlspecialchars($producer['alt']) ?>">
    </div>

    <div class="article-body flex-1-item-perline-s flex-2-item-perline-m">
        <h1 class="text-center"><?= htmlspecialchars($producer['p_name']) ?></h1>

        <h3>TEL: <?=htmlspecialchars($producer['tel']) ?></h3>
        <h3>Adresse : <?=htmlspecialchars($producer['adresse']) ?></h3>

        <p class="article-text"><?= htmlspecialchars($producer['p_content']) ?></p>

    </div>

</div>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>