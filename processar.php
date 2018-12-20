<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "tcc");
?>
<html lang="pt-br">
    <head>
        <link rel="icon" type="image/png" href="images/letter-k.png">
        <meta charset="utf-8">
        <title>Cadastro</title>
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='login.html'", 4000);
            }
        </script>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
			      $telefone = $_POST["telefone"];
            $endereco = $_POST["endereco"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $inserir = "INSERT INTO clientes (id, nome, cpf, telefone, endereco, email, senha) VALUES (NULL, '$nome', '$cpf', '$telefone', '$endereco', '$email', '$senha');";
            mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
            echo"<center><br><br><br><h1>Você foi cadastrado com sucesso. Aguarde um momento.";
            echo"<script language='javascript'>sucesso()</script>";
        ?>
    </body>
</html>
