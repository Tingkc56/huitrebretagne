<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->
<section class="huitre text-center">

        <div class="article-page">
                <div class="article-img flex-1-item-perline-s flex-2-item-perline-m">
                        <img class="img-fluid img-br-10px" src="<?= htmlspecialchars($huitre['img']) ?>"
                                alt="<?= htmlspecialchars($huitre['alt']) ?>">
                </div>
                <div class="article-body flex-1-item-perline-s flex-2-item-perline-m">
                <h1 class="text-center"><?= htmlspecialchars($huitre['h_name']) ?></h1>
                <p class="article-text"><?= htmlspecialchars($huitre['h_content']) ?></p>
                <h2>Liste de Producteurs</h2>
                <!-- foreach producors who get the good huitre id -->
                <div class="huitre-page-producors flex-wrapper">
                <?php foreach($producers as $producer){?>
                        <div class="huitre-page-producor-info flex-2-item-perline-s flex-2-item-perline-m text-center">
                                <div >
                                        <a href="index.php?action=producer&id=<?= $producer['id'] ?>">
                                                <img class="circular-thumbnail-img" src="<?= htmlspecialchars($producer['img']) ?>">
                                                <div class="text-center">
                                                        <h3><?= htmlspecialchars($producer['p_name']) ?></h3>
                                                </div>
                                        </a>
                                </div>
                        </div>
                <?php } ?>
                </div></div>
        </div>
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>