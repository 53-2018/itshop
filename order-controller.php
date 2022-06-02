<?php 
 require_once './config/DAO.php';
 session_start();

 $action=isset($_REQUEST["action"])? $_REQUEST["action"]:"";

 //var_dump($_REQUEST);

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // get akcije
   if($action=='Send'){
       
      $type=isset($_POST["type"])? test_input($_POST["type"]):"";
      $adress=isset($_POST["adress"])? test_input($_POST["adress"]):"";
      $date=isset($_POST["date"])? test_input($_POST["date"]):"";
      $dao=new DAO();
      $dao->insertOrder($type,$adress,$date);
      include 'orders.php';
   }
   elseif($action=='Delete'){
      $order_id=isset($_POST["type"])? test_input($_POST["type"]):"";
      $dao=new DAO();
      $dao->deleteOrder($order_id);
      include 'orders.php';
   }

}  
else{
   header("Location:index.php");
}
function test_input($data){
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   return $data;
}
?>