<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "tcc");
    session_start();
?>
<html lang="pt-br">
    <head>
        <link rel="icon" type="image/png" href="images/letter-k.png">
        <meta charset="utf-8">
        <title>Login</title>
        <script language="javascript">
            function adm(){
                setTimeout("window.location='index_logado.php", 2000);
            }
            function sucesso(){
                setTimeout("window.location='index.php'", 2000);
            }
            function failed(){
                setTimeout("window.location='index.php'", 2000);
            }
        </script>
    </head>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];

            $consulta = mysqli_query($conexao, "SELECT * FROM clientes WHERE nome = '$user' AND senha = '$pass'") or die (mysqli_error($conexao));
            $linhas = mysqli_num_rows($consulta);

            $verificacao = mysqli_query($conexao, "SELECT * FROM clientes WHERE nome = '$user' AND senha = '$pass' AND nivel = 2") or die (mysqli_error($conexao));
            $validacao = mysqli_num_rows($verificacao);

            if($linhas == 0){
                echo"<center>Nome de usuário ou senha incorretos. Aguarde um momento.</center>";
                echo"<script language='javascript'>failed()</script>";
            }elseif ($validacao == 0 ) {
              echo"<center>Cliente</center>";
              $sessionuser=$_SESSION["usuario"] = $user;
              $_SESSION["senha"] = $pass;
               echo"<script language='javascript'>window.location='index_logado.php'</script>";
            }else {
              echo"<center>Administrador</center>";
              $sessionuser=$_SESSION["usuario"] = $user;
              $_SESSION["senha"] = $pass;
               echo"<script language='javascript'>window.location='index_logado_admin.php'</script>";
            }



           // $verificacao = "SELECT '$user' FROM login WHERE nome='$user' &&  nivel = 2;";
            //if($verificacao == $user){
            //    echo"<center><br><br><br><h1>ADM</h1><br><IMG SRC='images/712.gif'></center>";
           // }else{
           //     echo"<center><br><br><br><h1>CLIENTE.</h1><br><IMG SRC='images/712.gif'></center>";
           // }
            //echo"<center><br><br><br><h1>Você foi cadastrado com sucesso. Aguarde um momento.";
            //echo"<script language='javascript'>sucesso()</script>";
                //echo"<center><br><br><br><h1>Você foi logado com sucesso. Aguarde um momento.</h1><br><IMG SRC='images/712.gif'></center>";
               // echo"<script language='javascript'>sucesso()</script>";

        ?>
    </body>
</html>
