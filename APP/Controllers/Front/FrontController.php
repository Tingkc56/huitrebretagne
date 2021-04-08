<?php

namespace Project\Controllers\Front;

use Project\Models\CommentManager;

class FrontController{
    function accueil(){
        require 'app/views/front/accueil.php';
    }

    function blog(){
        $articles = new \Project\Models\ArticleManager();
        $allArticles = $articles->getArticles();
        require 'app/views/front/blog.php';
    }

    //get the differents types of huitre
    function huitres(){
        $huitres = new \Project\Models\HuitreManager();
        $huitres = $huitres->getHuitres();
        require 'app/views/front/huitres.php';
    }

    
    function contact(){
        require 'app/views/front/contact.php';
    }

    function connect(){
        require 'app/views/front/connexion.php';
    }

    //user connection
    function creatUser($pseudo,$mail,$pass){
        $users = new \Project\Models\UserManager();
        $newUser = $users ->creatUser($pseudo,$mail,$pass);
        require 'app/views/front/accueil.php';
       }



       // redirecting to connexion.php
        function contactPage($errors=array()){
            require 'app/views/front/connexion.php';
        }
    
       function connexionUser($mail,$pass)
       {
           $userManager = new \Project\Models\UserManager();
   
           $cxUser = $userManager->checkUser($mail, $pass);
           $result = $cxUser->fetch();
            // check if the mail exist
           if($result){
                
                $isPasswordCorrect = password_verify($pass,$result['pass']);

                if($isPasswordCorrect){
                        $_SESSION['mail'] = $result['mail'];
                        $_SESSION['pass'] = $result['pass'];
                        $_SESSION['pseudo'] = $result['pseudo'];

                        require 'app/views/front/accueil.php';
                }else{
                    echo 'Le mot de passe est incorrect';
                }
            }
            else{
                echo 'Vous êtes pas inscrit';
            }
   
       }

       function disConnect(){
        session_unset();
        require 'app/views/front/accueil.php';
    }



    //recuperer les messages de clients

    function getMessage($name,$mail,$sujet,$message){
        $messageManager = new \Project\Models\MessageManager();
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            $message = $messageManager ->getMessage($name,$mail,$sujet,$message);

            require 'app/views/front/confirmMessage.php';
        }else{
            header('location: app/views/front/404.php');
        }
        
    }

    // affichier un article en detail 
    function article($id){
        $articles = new \Project\Models\ArticleManager();
        $article = $articles->getArticle($id);

        $comments = new CommentManager();
        $articleComments = $comments->getArticleComments($id);

        require 'app/views/front/article.php';
    }

    // pour les commentaires des articles

    function getComment($name,$comment,$id){
        $commentManager = new \Project\Models\CommentManager();
        $comment = $commentManager ->getComment($name,$comment,$id);
        var_dump($comment);

            require 'app/views/front/confirmMessage.php';
    }

    // page detail de chaque huitre
    function huitre($id){
        $huitres = new \Project\Models\HuitreManager();
        $huitre = $huitres->getHuitre($id);
        
        $producers = new \Project\Models\ProducerManager();
        $producers = $producers->getHuitreProducer($id);


        require 'app/views/front/huitre.php';
    }

    // get producers
    function producers(){
        $producers = new \Project\Models\ProducerManager();
        $producers = $producers->getProducers();
        require 'app/views/front/producers.php';
    }

    //get single producer
    function producer($id){
        $producers = new \Project\Models\ProducerManager();
        $producer = $producers->getProducer($id);
        require 'app/views/front/producer.php';
    }


    


    }
