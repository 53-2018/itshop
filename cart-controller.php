<?php

    session_start();
    require_once './config/DAO.php';

    $action = isset($_REQUEST['action'])?$_REQUEST['action']:'';
    $id = isset($_GET['id'])?$_GET['id']:'';

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            switch($action){
                case 'addToCart':
                    $dao = new DAO();
                    $product = $dao->getProductById($id);
                    $_SESSION['cart'][] = $product;
                    
                    var_dump($_SESSION['cart']);
                    include_once './shop.php';
                    break;

                case 'empty':
                    if(isset($_SESSION['cart'])){
                        session_unset();
                        session_destroy();
                        include_once 'shop.php';
                    }
                    break;
                case 'Charge':
                    if(!isset($_SESSION['user'])){
                        include_once 'order-entry.php';
                        $msg = "You must me logined before pay!";

                    }else{
                        //insert into data...
                    }
                case 'Login':
                    if(!empty($email) && !empty($password)){
                       // $dao = new User();
                        //$exist = $dao->existUser($email, md5($password));
                        if($exist==true){
                            header('Location: cart.php');
                            $_SESSION['user'] = $email;
                            break;
                               
                        }
                    }
                    else{
                            $msg = "User doesnt exist!";
                            //include_once './login.php';
                    }
                    
            }
    }
?>
