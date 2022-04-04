<?php
    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];  
            }
        }
        else 
        {
            header('Location: sistema.php');
        }    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left,black,rgb(238, 98, 98));
        }
        .box{
            color: aliceblue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid blueviolet;
        }
        legend{
            border: 1px solid blueviolet;
            padding: 10px;
            text-align: center;
            background-color: blueviolet;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            color: aliceblue;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: blueviolet;
        }
        #submit{
            background-color: blueviolet;
            width: 100%;
            border: none;
            padding: 15px;
            color: aliceblue;
            font-size: 15px;
            border-radius: 15px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0,20,172), rgb(80,19,195));
        }
    </style>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
                <fieldset>
                    <legend><strong>Formulário</strong></legend>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required value="<?php echo $nome ?>">
                        <label for="nome" class="labelInput">Nome Completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required value="<?php echo $email ?>">
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="senha" id="senha" class="inputUser" required value="<?php echo $senha ?> "> 
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required value="<?php echo $telefone ?>">
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo $sexo ==  'feminino' ? 'checked' : '' ?>>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino"  <?php echo ($sexo ==  'masculino') ? 'checked' : '' ?>>
                    <label for="masculino">Maculino</label>
                    <br><br>
                    <div class="inputBox">
                        <label for="data_nascimento"><strong>Data de nascimento</strong></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" required value="<?php echo $data_nasc ?>">
                    </div>
                
                    <br><br>
                    <input type="hidden" name="id" value="<?php encho $id?>">
                    <input type="submit"name="update" id="update">
                </fieldset>
        </form>
    </div>
</body>
</html>