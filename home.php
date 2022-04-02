<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(1000deg,black,rgb(238, 98, 98));
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color:rgba(0,0,0,0.8);
            padding: 30px;
            border-radius:15px; 
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid blueviolet;
            border-radius:10px;
            padding:15px;
        }
        a:hover{
            background-color: blueviolet;
        }
    </style>
</head>
<body>
    <h1>Olá, mundo</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>