<?php

    session_start();
    require_once 'shop.php';
    require_once 'config/DAO.php';

    $action = isset($_REQUEST['action'])?$_REQUEST['action']:'';
    $id = isset($_GET['id'])?$_GET['id']:'';
    $email = isset($_POST['email'])?$_POST['email']:'';
    $password = isset($_POST['password'])?$_POST['password']:'';

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            switch($action){
                case 'addToOrder':
                    $dao = new DAO();
                    $products=$dao->selectProducts();
                    $_SESSION['cart'][] = $products;
                    
                    var_dump($_SESSION['cart']);
                    include_once 'shop.php';
                    break;

                case 'empty':
                    if(isset($_SESSION['cart'])){
                        session_unset();
                        session_destroy();
                        include_once 'shop.php';
                    }
                    break;
                    
            }
    }
?>
