<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<div class="image-accueil">
    <div>
        <!-- <img class="" src="app\public\front\images\images\huitre (2).jpg" alt="huitre bretagne"> -->
    </div>
</div>

<div class="about row" >
    <!-- <div class="photo-about col-6">
        <img src="app\public\front\images\images\huitre (11).jpg" alt="huitre bretagne">
        <img src="app\public\front\images\images\huitre (14).jpg" alt="huitre bretagne">
    </div> -->
    <div class="text-about col-6">
        <div class="about-line"></div>
        <h1>About US</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere iusto mollitia aut exercitationem, ipsam
            voluptatum nesciunt officia quas repellat vitae nobis, nostrum odio quod modi saepe? Ipsum, voluptate?
            Repudiandae voluptas placeat aperiam itaque magni esse cumque, nisi eos, corrupti, repellendus ipsa magnam
            reprehenderit doloribus labore accusantium velit voluptatum. Quos, nostrum! Quo dignissimos minus
            perferendis et, accusamus exercitationem harum sapiente quod.</p>
            <h1>Nos services</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere iusto mollitia aut exercitationem, ipsam
            voluptatum nesciunt officia quas repellat vitae nobis, nostrum odio quod modi saepe? Ipsum, voluptate?
            Repudiandae voluptas placeat aperiam itaque magni esse cumque, nisi eos, corrupti, repellendus ipsa magnam
            reprehenderit doloribus labore accusantium velit voluptatum. Quos, nostrum! Quo dignissimos minus
            perferendis et, accusamus exercitationem harum sapiente quod.</p>
            <h1>nesciunt offic</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere iusto mollitia aut exercitationem, ipsam
            voluptatum nesciunt officia quas repellat vitae nobis, nostrum odio quod modi saepe? Ipsum, voluptate?
            Repudiandae voluptas placeat aperiam itaque magni esse cumque, nisi eos, corrupti, repellendus ipsa magnam
            reprehenderit doloribus labore accusantium velit voluptatum. Quos, nostrum! Quo dignissimos minus
            perferendis et, accusamus exercitationem harum sapiente quod.</p>
        
        </div>
</div>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>