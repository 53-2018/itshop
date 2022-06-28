<?php

require_once 'config/DAO.php';
session_start();
$action = isset($_REQUEST["action"])? $_REQUEST["action"] : ""; 

if ($_SERVER['REQUEST_METHOD']=="POST"){
    if ($action == 'LOGIN') {
        $email = isset($_POST["email"])? test_input($_POST["email"]) : ""; 
        $password = isset($_POST["password"])? test_input($_POST["password"]) : ""; 
       
      
        $dao = new DAO();
        $em = $dao->selectUserByEmailAndPassword($email,$password);
        if($em){
      
            
            $_SESSION['email'] = $em;
            $_SESSION['last-active'] = time();
        
            if (isset($_POST['rememberMe'])) {
                $userCookie = array('email' => $_POST['email'], 'password' => $_POST['password']);
            
                setcookie("userJSON", json_encode($userCookie), time() + 20, "/");
            }

           include_once 'shop.php';
        
        }else{
            $msg = "Pogresni parametri za logovanje!!!";
            include_once 'index.php';
        }   
    }  

}elseif ($_SERVER['REQUEST_METHOD']=="GET"){
    if ($action == 'logout') {
        session_start();
        session_unset();
        session_destroy();
    
        header('Location: index.php');
    } elseif ($action == 'akcijaGet2'){
        
    }elseif ($action == 'akcijaGet3'){
        
    }  
} else {
    
    header("Location: index.php"); 
    die();
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>