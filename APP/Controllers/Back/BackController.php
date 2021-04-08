<?php

namespace Project\Controllers\Back;
use Project\Models\UserManager;
use Project\Models\ArticleManager;
use Project\Models\HuitreManager;
use Project\Models\MessageManager;
use Project\Models\CommentManager;
use Project\Models\ProducerManager;

class BackController
{
    // gerer la page de connection admin 
    function connexionAdmin(){
        require 'APP/views/back/connexionAdmin.php';
    }


    function connexion($mail,$pass)
    {
        $userManager = new UserManager();

        $connexAdm = $userManager->recupAdmin($mail, $pass);

        $result = $connexAdm->fetch();

        $isPasswordCorrect = password_verify($pass,$result['pass']);

        $_SESSION['mail'] = $result['mail'];
        $_SESSION['[pass]'] = $result['pass'];
        $_SESSION['id'] = $result['id'];
        $_SESSION['name'] = $result['adminname'];

        if($isPasswordCorrect){
            require 'APP/views/back/hbtable.php';
        }else{
            echo 'Vos identifients sont incorrect';
        }
    }

    function accueilAdmin(){
        require 'APP/views/back/hbtable.php';
    }

    function deconnexion(){
        session_unset();
        require 'APP/views/back/connexionAdmin.php';
    }

    function articles(){
        $articles = new ArticleManager();
        $allArticles = $articles->getArticles();

        require 'APP/views/back/articles.php';
    }

    function addArticle(){
        require 'APP/views/back/newArticle.php';
    }



    function updateArticle($id,$title,$category,$content,$alt,$target_file)
    {
        // get image
        $upfile=$_FILES["img"];
        //var_dump($_FILES['img']);
        // update without new image , use the original target_file (input hidden) 
        if($upfile["name"]!=''){ 
            //set upload type
            $typelist=array("image/jpeg","image/jpg","image/png","image/gif");
            // set upload path
            $path="APP\public\back\images\hb";
            // n'est pas encore utilisé (sera utilisé plus tard)

                // spécifie le chemin du fichier à télécharger
            $target_file = $path  . basename($upfile["name"]);
           // var_dump($target_file);


            // on vérifie que le fichier image est une image réelle??
            if (isset($_POST["submit"])) 
            {
                
                $check = getimagesize($upfile["tmp_name"]);
                    if ($check !== false) {
                    // Check file size
                        if($upfile['size']>500000){
                        }
                        // Allow certain file formats
                        if(!in_array($upfile["type"],$typelist)){
                            die("Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés.");
                        }
                        if (move_uploaded_file($upfile["tmp_name"], $target_file)) {
                            
                // new or update? 
                    if($id>0){
                        $articles = new ArticleManager();
                        $updateArticle = $articles->updateArticle($id,$title,$category,$content,$target_file);
                
                        header('Location: hbAdmin.php?action=articles');
                    }else{
                    $articlesManager = new ArticleManager();
                    $newArticle = $articlesManager->newArticle($title,$category,$content,$alt,$target_file);

                    header('location: hbAdmin.php?action=articles');}
                }else
                {
                echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                } 
                }
             
            } else {
                echo "Ce fichier n'est pas une image. ";
                }
        }else{
            if($id>0){
                $articles = new ArticleManager();
                $updateArticle = $articles->updateArticle($id,$title,$category,$content,$target_file);
        
                header('Location: hbAdmin.php?action=articles');
            }else{
            $articlesManager = new ArticleManager();
            $newArticle = $articlesManager->newArticle($title,$category,$content,$alt,$target_file);

            header('location: hbAdmin.php?action=articles');}
        }
    }

    function deleteArticle($id){
        $articles = new ArticleManager();
        $deleteArticle = $articles->deleteArticle($id);
        header('Location: hbAdmin.php?action=articles');
    }

    function editArticle($id){
            $articles = new ArticleManager();
            $article = $articles->getArticle($id);
            //var_dump($article);
            require 'APP/views/back/editArticle.php';
    }

    function huitres(){
        $huitres = new HuitreManager();
        $allHuitres = $huitres->getHuitres();

        require 'APP/views/back/huitres.php';
    }

    function addHuitre(){
        require 'APP/views/back/newHuitre.php';
    }

    function updateHuitre($id,$nomHuitre,$content,$alt,$target_file)
    {
                // get image
                $upfile=$_FILES["img"];
                //var_dump($_FILES['img']);
            // update without new image , use the original target_file (input hidden) 
            if($upfile["name"]!=''){ 
                    //set upload type
                    $typelist=array("image/jpeg","image/jpg","image/png","image/gif");
                    // set upload path
                    $path="APP\public\back\images\hb";
                    // n'est pas encore utilisé (sera utilisé plus tard)

                        // spécifie le chemin du fichier à télécharger
                    $target_file = $path  . basename($upfile["name"]);
                // var_dump($target_file);


                    // on vérifie que le fichier image est une image réelle??
                    if (isset($_POST["submit"])) 
                    {
                        
                        $check = getimagesize($upfile["tmp_name"]);
                            if ($check !== false) {
                            // Check file size
                                if($upfile['size']>500000){
                                }
                                // Allow certain file formats
                                if(!in_array($upfile["type"],$typelist)){
                                    die("Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés.");
                                }
                                if (move_uploaded_file($upfile["tmp_name"], $target_file)) {
                                    
                                    // new or update? 
                                    if($id>0){
                                        $huitres = new HuitreManager();
                                        $updateHuitre = $huitres->updateHuitre($id,$nomHuitre,$content,$target_file);
                                
                                        header('Location: hbAdmin.php?action=huitres');
                                    }else{
                                        $huitres = new HuitreManager();
                                        $newHuitre = $huitres->newHuitre($nomHuitre,$content,$alt,$target_file);
                                
                                    header('Location: hbAdmin.php?action=huitres');}
                                }else
                                {
                                echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                                } 
                        }
                    
                    } else {
                        echo "Ce fichier n'est pas une image. ";
                        }
                }else{
                    if($id>0){
                        $huitres = new HuitreManager();
                        $updateHuitre = $huitres->updateHuitre($id,$nomHuitre,$content,$target_file);

                        header('Location: hbAdmin.php?action=huitres');
                    }else{
                        $huitres = new HuitreManager();
                        $newHuitre = $huitres->newHuitre($nomHuitre,$content,$alt,$target_file);

                    header('Location: hbAdmin.php?action=huitres');}
                }
    }
    
    function editHuitre($id){
        $huitres = new HuitreManager();
        $huitre = $huitres->getHuitre($id);
        //var_dump($huitre);
        require 'APP/views/back/editHuitre.php';
}

    function deleteHuitre($id){
        $huitres = new HuitreManager();
        $deleteHuitre = $huitres->deleteHuitre($id);
        header('Location: hbAdmin.php?action=huitres');
    }

    function producers(){

        $producers = new ProducerManager();
        $allProducers = $producers->getproducers();

        require 'APP/views/back/producers.php';
    }

    function addProducer(){
        $huitres = new HuitreManager();
        $allHuitres = $huitres->getHuitres();
        
        require 'APP/views/back/newProducer.php';
    }

    function updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file)
    {

            // get image
            $upfile=$_FILES["img"];
        // update without new image , use the original target_file (input hidden) 
        if($upfile["name"]!=''){ 
            //set upload type
            $typelist=array("image/jpeg","image/jpg","image/png","image/gif");
            // set upload path
            $path="APP\public\back\images\hb";
            // n'est pas encore utilisé (sera utilisé plus tard)

                // spécifie le chemin du fichier à télécharger
            $target_file = $path  . basename($upfile["name"]);
            //var_dump($target_file);


                // on vérifie que le fichier image est une image réelle??
            if (isset($_POST["submit"])) 
            {
            $check = getimagesize($upfile["tmp_name"]);
            if ($check !== false)
            {
            // Check file size
                if($upfile['size']>500000){
                 }
                 // Allow certain file formats
                if(!in_array($upfile["type"],$typelist)){
                    die("Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés.");
                }
                if (move_uploaded_file($upfile["tmp_name"], $target_file)) {
                    
            // 从这来分支决定是否是修改还是新增
                    if($id>0){
                        $producers = new ProducerManager();
                        $updateProducer = $producers->updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);
                
                        header('Location: hbAdmin.php?action=producers');
                    }else{
                        $producers = new ProducerManager();
                        $newProducer = $producers->newProducer($nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);

                    header('location: hbAdmin.php?action=producers');}
                }else
                {
                echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                } 
            }
        } else {
            echo "Ce fichier n'est pas une image. ";
        }
    }else{
        if($id>0){
            $producers = new ProducerManager();
            $updateProducer = $producers->updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);
    
            header('Location: hbAdmin.php?action=producers');
        }else{
            $producers = new ProducerManager();
            $newProducer = $producers->newProducer($nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);

        header('location: hbAdmin.php?action=producers');}
    }
}

    function editProducer($id){
        $huitres = new HuitreManager();
        $allHuitres = $huitres->getHuitres();

        $producers = new ProducerManager();
        $producer = $producers->getProducer($id);
        // var_dump($producer);
        require 'APP/views/back/editproducer.php';
    }

    function deleteProducer($id){
        $producers = new ProducerManager();
        $producer = $producers->deleteProducer($id);
        header('Location: hbAdmin.php?action=producers');
    }







    

    
    function messages(){
        $messages = new MessageManager();
        $messages = $messages->showMessages();
        require 'APP/views/back/messages.php';

    }
    function deletMessage($id){
        $messages = new MessageManager();
        $deleteMessage = $messages->deletMessage($id);
        header('Location: hbAdmin.php?action=messages');
    }

    function comments(){
        $comments = new CommentManager();
        $allComments = $comments->showComments();
        // var_dump($allComments);
        require 'APP/views/back/commentaires.php';
    }

    function deletComment($id){
        $comments = new CommentManager();
        $deleteMessage = $comments->deletComment($id);
        header('Location: hbAdmin.php?action=commentaires');
    }
    


}
        
