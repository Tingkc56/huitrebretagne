<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->
<div class="welcome-image">
    <div>
        <img src="app\public\front\images\images\huitre (2).jpg" alt="huitre bretagne">
    </div>
</div>

<div class="welcome">
    <div class="welcome-anim"><h1>En Bretagne ? Envie de Huitres ? </h1></div>
    <h2>Ne cherchez pas plus loin, vous trouverez tous les producteurs de huitre en Bretagne ici !</h2>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere iusto mollitia aut exercitationem, ipsam
            voluptatum nesciunt officia quas repellat vitae nobis, nostrum odio quod modi saepe? Ipsum, voluptate?
            Repudiandae voluptas placeat aperiam itaque magni esse cumque, nisi eos, corrupti, repellendus ipsa magnam
            reprehenderit doloribus labore accusantium velit voluptatum. Quos, nostrum! Quo dignissimos minus
            perferendis et, accusamus exercitationem harum sapiente quod.</p>
</div>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>