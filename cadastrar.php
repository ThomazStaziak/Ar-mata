<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "tcc");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	        <?php
            $nome = $_POST["nome"];
			      $cpf = $_POST["cpf"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $endereco = $_POST["endereco"];


            $inserir = "INSERT INTO clientes (id, nome, cpf, endereco, senha, email, nome_foto, datas) VALUES (NULL, '$nome', '$cpf', '$endereco', '$senha', '$email', 'profile_placeholder.gif', NOW());";
            mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
            echo"<center><br><br><br><h1>Você foi cadastrado com sucesso. Aguarde um momento.";
            echo"<script language='javascript'>window.location='index.php'</script>";
        ?>
</body>
</html>
