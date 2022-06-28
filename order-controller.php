<?php 
 require_once './config/DAO.php';
 session_start();

 $action=isset($_REQUEST["action"])? $_REQUEST["action"]:"";

 //var_dump($_REQUEST);

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // get akcije
   if($action=='Send'){
       
      $type=isset($_POST["type"])? test_input($_POST["type"]):"";
      $adress=isset($_POST["address"])? test_input($_POST["address"]):"";
      $date=isset($_POST["date"])? test_input($_POST["date"]):"";
      $dao=new DAO();
      $dao->insertOrder($adress,$type,$date);
      include_once 'orders.php';
   }
   elseif ($action == 'update') {
      $order_id = isset($_POST["order_id"])? test_input($_POST["order_id"]) : "";
      $model = isset($_POST["model"])? test_input($_POST["model"]) : "";
      $address = isset($_POST["address"])? test_input($_POST["address"]) : "";
      $city = isset($_POST["city"])? test_input($_POST["city"]) : "";
      $dao=new DAO();
     // $dao->updateOrder($model,$address,$city,$order_id);
      include_once 'orders.php';
  }

}  
if ($_SERVER['REQUEST_METHOD']=="GET"){
   
   
   if ($action == 'delete') {
       $order_id = isset($_GET["order_id"])? test_input($_GET["order_id"]) : "";
       $dao=new DAO();
       $dao->deleteOrder($_GET['order_id']);
       include 'orders.php';

   } 
 
} else {
   //...
   header("Location: index.php"); //opciono
   die();
}

//funkcija za preradu unetih podataka
function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

