<?php 

require_once('./vendor/autoload.php');

use Project\Controllers\Front\FrontController;

//得具体看一下session的操作
session_start();


if($_SERVER['HTTP_HOST'] !=  "test-ting-ting.herokuapp.com") {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

try{
    $frontController = new FrontController();

    if(isset($_GET['action']))
    {
        //各个页面之间的切换，还可以设置变量来切换
        if($_GET['action']=='blog'){
        $frontController->blog(); 
        }elseif($_GET['action']=='huitres'){
        $frontController->huitres(); 
        }elseif($_GET['action']=='producers'){
        $frontController->producers(); 
        }elseif($_GET['action']=='contact'){
        $frontController->contact(); 
        }
        elseif($_GET['action']=='contact'){
        $frontController->contact(); 
        }
        elseif($_GET['action']=='connect'){
        $frontController->connect(); 
        }
        //关于访问者user的设置
        elseif($_GET['action'] == 'creatUser'){
            $pseudo = $_POST['Pseudo'];
            $mail = $_POST['mail'];
            $mdp = $_POST['pass'];
           //把密码压碎加密
            $pass = password_hash($mdp, PASSWORD_DEFAULT);
          //然后执行frontController中的creatUser方程
            $frontController ->creatUser($pseudo,$mail,$pass);
        }elseif($_GET['action'] == 'connexionUser'){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];

            if(!empty($mail) && !empty($pass)){
                $frontController->connexionUser($mail,$pass);
            }else{
                throw new Exception('Renseigner vos identifiant');
            }
        }elseif($_GET['action'] == 'disConnect'){
            $frontController ->disConnect();
        }
        // elseif($_GET['action']=='admin'){
        //     $frontController->admin(); 
        //     }
        //留言的捕获
        elseif($_GET['action'] == 'getMessage'){
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $sujet = $_POST['sujet'];
            $message = $_POST['content'];
            //var_dump($name);
            $frontController->getMessage($name,$mail,$sujet,$message);
        }
        //对于文章的操作
        elseif($_GET['action']=='article'){
            $id = $_GET['id'];
            $frontController->article($id); 
        }elseif($_GET['action'] == 'commentaire'){
            $id = $_GET['id'];
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            //var_dump($name);
            //var_dump($id);
            $frontController->getComment($name,$comment,$id);
        }elseif($_GET['action']=='huitre'){
            $id = $_GET['id'];
            $frontController->huitre($id); 
        }elseif($_GET['action']=='producer'){
            $id = $_GET['id'];
            $frontController->producer($id); 
        }

            


    }else{
    $frontController->accueil();
    }
    
} catch(Exception $e){
    die('Erreur: ' .$e->getMessage());
}
