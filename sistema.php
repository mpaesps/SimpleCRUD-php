<?php
    session_start();
   // print_r($_SESSION);
    
 if((!isset($_SESSION['email']) == true) &&(!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
else
{
  $logado = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: linear-gradient(to right,black,rgb(238, 98, 98));
            color: white;
            text-align:center;
        }
    </style>
    <title>Sistema</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: black;">
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand">Bem-vindo</a>
                </div>
         </nav>
            <div class="d-flex">
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            </div>
    </nav>
     <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";     
     ?>
</body>
</html>