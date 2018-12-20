<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "tcc");
?>
<!DOCTYPE html>
<html>
<head>
  <script language='javascript'>
        function adm(){
            setTimeout('window.location='adm.html'', 2000);
        }
        function sucesso(){
            setTimeout('window.location='index.php'', 2000);
        }
        function failed(){
            setTimeout('window.location='index.php'', 2000);
        }
    </script>
	<title></title>
</head>
<body>
	        <?php
            $nome = $_POST["user"];
			      $cpf = $_POST["cpf"];
            $email = $_POST["email"];
            $senha = $_POST["pass"];


            $inserir = "INSERT INTO clientes (id, nome, cpf, senha, email, nome_foto, datas, nivel) VALUES (NULL, '$nome', '$cpf', '$senha', '$email', 'profile_placeholder.gif', NOW(), 2);";
            mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
            echo"<center><br><br><br><h1>Seu administrador foi cadastrado com sucesso. Aguarde um momento.";
              echo "<script type='text/javascript'>
                window.location='adm.html'
              </script>";
        ?>
</body>
</html>
