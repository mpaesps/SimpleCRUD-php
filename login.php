<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,black,rgb(238, 98, 98));
        }
        div{
            background-color: rgba(0, 0, 0, 8);
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: bisque;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: pink;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 25px;
        }
        .inputSubmit:hover{
            background-color: blueviolet;
            cursor:pointer;
        }
    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>