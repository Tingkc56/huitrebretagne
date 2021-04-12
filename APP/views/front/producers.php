<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section class="producers">
    <h1 class="text-center">Nos producteurs</h1>
    <div class="flex-wrapper">
        <?php foreach($producers as $producer){?>
        <div class="flex-1-item-perline-s flex-2-item-perline-m flex-4-item-perline-l">
            <article class="case">
                <div class="case-img-container" >
                    <img class="case-img-top" src="<?=htmlspecialchars($producer['img']) ?>" alt="<?=htmlspecialchars($producer['p_name']) ?>">
                </div> 
                <div class="case-body">
                    <h4 class="case-title"><?=htmlspecialchars($producer['p_name']) ?></h4>
                    <h5>TEL: <?=htmlspecialchars($producer['tel']) ?></h5>
                    <h5>Adresse : <?=htmlspecialchars($producer['adresse']) ?></h5>
                    <p class="case-text"><?=htmlspecialchars($producer['p_content']) ?></p>
                    <a href="index.php?action=producer&id=<?= $producer['id'] ?>"
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