<?php
if(!isset($_SESSION)) session_start(); 
var_dump($_SESSION);
// zastita stranice objektom iz sesije na osnovu poslednje aktivnosti
if (time() - $_SESSION['last-active'] < 20) { // provera aktivnosti 10 sekundi
    if (isset($_SESSION['user']) && $_SESSION['user']['type']=='kupac') { // jos i provera tipa kupca
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>KUPAC PANEL</title>
        </head>

        <body>
            <h2>KUPAC</h2>
            
            <a href="LoginController.php?action=logout">LOGOUT</a>
        </body>

        </html>
<?php
    } else {
        header("location: LoginController.php?action=logout");
    }
} else {
    header("location: LoginController.php?action=logout");
}

?>
<?php $_SESSION['last-active'] = time(); ?>