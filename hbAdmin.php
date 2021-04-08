<?php

use Project\Controllers\Back\BackController;

session_start();
require_once __DIR__ .'/vendor/autoload.php';

require('./vendor/autoload.php');

if($_SERVER['HTTP_HOST'] !="huitre-bretagne.herokuapp.com/hbAdmin.php"){$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();}

try{
    $backController = new \Project\Controllers\Back\BackController();

    if(isset($_GET['action'])){
        
        if($_GET['action'] == 'connexionAdmin'){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];

            if(!empty($mail) && !empty($pass)){
                $backController->connexion($mail,$pass);
            }else{
                throw new Exception('Renseigner vos identifiant');
            }
        }
        
        elseif($_GET['action'] == 'accueilAdmin'){
            $backController ->accueilAdmin();
        }

        elseif($_GET['action'] == 'deconnexion'){
            $backController ->deconnexion();
        }
        
        //les articles
        elseif($_GET['action'] == 'articles'){
            $backController-> articles();
        }
        
        elseif($_GET['action']=='addArticle'){
            $backController->addArticle();
        }

        elseif($_GET['action']=='newArticle'){
            $title = htmlspecialchars($_POST['title']) ;
            $category = htmlspecialchars($_POST['category_blog']) ;
            $content = htmlspecialchars($_POST['content']) ;
            $alt = htmlspecialchars($_POST['alt']);
            $target_file = htmlspecialchars($_POST['img']);
            //var_dump($target_file);
     
            $backController ->updateArticle($id,$title,$category,$content,$alt,$target_file);
        }

        elseif($_GET['action'] == 'deleteArticle'){
            $id = $_GET['id'];
            $backController-> deleteArticle($id);
        }

        elseif($_GET['action'] == 'editArticle'){
            $id = $_GET['id'];
            $backController-> editArticle($id);
        }

        elseif($_GET['action'] == 'updateArticle'){
            $id = $_GET['id'];
            $title = htmlspecialchars($_POST['title']) ;
            $category = htmlspecialchars($_POST['category_blog']) ;
            $content = htmlspecialchars($_POST['content']) ;
            $alt = htmlspecialchars($_POST['alt']);
            if(isset($_POST['img'])){
            $target_file = htmlspecialchars($_POST['img']);}else{$target_file = htmlspecialchars($_POST['imageValue']);}
            $backController ->updateArticle($id,$title,$category,$content,$alt,$target_file);
        }
        

        //les huitres

        elseif($_GET['action'] == 'huitres'){
            $backController-> huitres();
        }

        elseif($_GET['action']=='addHuitre'){
            $backController->addHuitre();
        }

        elseif($_GET['action']=='newHuitre'){
            $nomHuitre = htmlspecialchars($_POST['title']) ;
            $content = htmlspecialchars($_POST['content']) ;
            $alt = htmlspecialchars($_POST['alt']);
            $target_file = htmlspecialchars($_POST['img']);
            $backController ->updateHuitre($id,$nomHuitre,$content,$alt,$target_file);
        }

        elseif($_GET['action'] == 'editHuitre'){
            $id = $_GET['id'];
            $backController-> editHuitre($id);
        }

        elseif($_GET['action'] == 'updateHuitre'){
            $id = $_GET['id'];
            var_dump($id);
            $nomHuitre = htmlspecialchars($_POST['title']) ;
            $content = htmlspecialchars($_POST['content']) ;
            $content = htmlspecialchars($_POST['content']) ;
            $alt = htmlspecialchars($_POST['alt']);
            if(isset($_POST['img'])){
                $target_file = htmlspecialchars($_POST['img']);}else{$target_file = htmlspecialchars($_POST['imageValue']);}
            $backController ->updateHuitre($id,$nomHuitre,$content,$alt,$target_file);
        }

        elseif($_GET['action'] == 'deleteHuitre'){
            $id = $_GET['id'];
            $backController-> deleteHuitre($id);
        }

        //les producteurs

        elseif($_GET['action'] == 'producers'){
            $backController-> producers();
        }

        elseif($_GET['action']=='addProducer'){
            $backController->addProducer();
        }

        elseif($_GET['action']=='newProducer'){
            $nomproducteur = htmlspecialchars($_POST['name']) ;
            $adresse = htmlspecialchars($_POST['adresse']);
            $tel = htmlspecialchars($_POST['tel']);
            $huitre_n =$_POST['huitre_n'];
            $content = htmlspecialchars($_POST['content']) ;
            $alt = htmlspecialchars($_POST['alt']);
            $target_file = htmlspecialchars($_POST['img']);
            $backController ->updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);
        }

        elseif($_GET['action'] == 'editProducer'){
            $id = $_GET['id'];
            $backController-> editProducer($id);
        }

        elseif($_GET['action'] == 'updateProducer'){
            $id = $_GET['id'];
            $nomproducteur = htmlspecialchars($_POST['name']) ;
            $adresse = htmlspecialchars($_POST['adresse']);
            $tel = htmlspecialchars($_POST['tel']);
            $huitre_n =$_POST['huitre_n'];
            $content = htmlspecialchars($_POST['content']) ;
            $alt = htmlspecialchars($_POST['alt']);
            if(isset($_POST['img'])){
                $target_file = htmlspecialchars($_POST['img']);}else{$target_file = htmlspecialchars($_POST['imageValue']);}
            $backController ->updateProducer($id,$nomproducteur,$adresse,$tel,$huitre_n,$content,$alt,$target_file);
        }

        elseif($_GET['action'] == 'deleteProducer'){
            $id = $_GET['id'];
            $backController-> deleteProducer($id);
        }


        // les messages

        elseif($_GET['action'] == 'messages'){
            $backController-> messages();
        }

        elseif($_GET['action'] == 'deletMessage'){
            $id = $_GET['id'];
            $backController-> deletMessage($id);
        }

        elseif($_GET['action'] == 'commentaires'){
            $backController-> comments();
        }

        elseif($_GET['action'] == 'deleteComment'){
            $id = $_GET['id'];
            $backController-> deletComment($id);
        }

    }else{
        $backController->connexionAdmin();
    }
    
}catch(Exception $e){
die('Erreur :' . $e->getMessage());
}