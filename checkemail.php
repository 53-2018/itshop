<?php
    $email=array("success"=>"", "color"=>"", "description"=>"");
    $pom=$_GET['email'];
    if(strpos($pom,"@"))
    {
        $email['success']="true";
        $email['color']="green";
        $email['description']="Email is valid!";
    }
    else
    {
        $email['success']="false";
        $email['color']="red";
        $email['description']="Invalid email format";
    }

    $myobject=json_encode($email);
    echo $myobject;

    //var_dump($_GET['email']);
    //echo "proba";
?>