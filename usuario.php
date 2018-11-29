<!DOCTYPE html>
<html>
<head>
  <?php
      $conexao = mysqli_connect("localhost", "root", "");
      mysqli_select_db($conexao, "tcc");
      session_start();
      $usuario = $_SESSION["usuario"];
      // $secao_senha   = $_SESSION['senha'];
  ?>
  <head>
		<meta charset="UTF-8">
		<title>Arômata</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</head>
<style>
.card {
  max-width: 390px;
  text-align: center;
  margin: auto;
  background-color: #fff;
}


.title {
  color: grey;
  font-size: 18px;
}

.user-button {
  border: none;
  outline: 0;
  position: relative;
  left: 0em;
  top: 1em;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.link-user {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

#header{
  background-color: transparent;
}
body{
  background-image: url(images/user-masc.jpg);
  background-size: cover;
}
</style>
</head>
<body>

  <header id="header">
    <h1><a href="index.html"> ARÔMATA </a></h1>
    <!-- <img src="images/arômata.png" width="120" alt=""> -->
    <nav id="nav" style="position: absolute; right: 10em;">
      <ul>
        <li><a href="index_logado.php" class="button1 special" style="color:#ffffff8c">Home</a></li>
        <li><a href="generic.php" style="color:#ffffff8c">Quem Somos</a></li>
        <li><a href="prod_home.html" style="color:#ffffff8c">Produtos</a></li>
      </ul>
    </nav>
    <a href="logout.php" class="icon fa-share-square-o" style="color:#ffffff8c; font-size:2em; position: absolute; right: 1em; top:0em;"><span class="label">Logout</span></a>
  </header>
  <br><br>
  <h2 style="text-align:center; color:#fff;">Perfil do usuário</h2>
  <?php
        $consulta="select nome_foto from clientes where nome='$usuario'";
        $resultado=mysqli_query($conexao,$consulta);
        $linha = mysqli_fetch_assoc($resultado);
  ?>
  <div class="card">
    <?php
     echo "<img src='images/".$linha['nome_foto']."' alt='User' style='border:#fff solid 1px; border-radius: 80%; margin: 1em 0 2em 0; width: 170px; '>";
      ?>
    <h1 style="font-size: 1.4em; ">Olá <?php echo "$usuario";?></h1>
    <p class="title">Cliente há <?php
        $data="SELECT
           @data_conta :=
              DATE_SUB( DATE_SUB( DATE_SUB( CURRENT_DATE,
                       INTERVAL YEAR( datas ) - 1 YEAR
                    ), INTERVAL MONTH( datas ) - 1 MONTH
                    ), INTERVAL DAY( datas ) - 1 DAY
              ) AS Total,

           CONCAT(
                 YEAR( @data_conta ) - 1,' anos, ',
                 MONTH( @data_conta ) - 1,' meses e ',
                 DAY( @data_conta ) - 1,' dias'
              ) AS Total_exibir
          FROM clientes where nome = '$usuario';";
          $dataresult = mysqli_query($conexao, $data);
          if ($resultado) {
            while($linha = mysqli_fetch_assoc($dataresult)){
             echo "$linha[Total_exibir]";}
          }
           ?></p>
    <p>Compras:</p>
    <?php
    $consulta2="select nome_cliente, nome, preco, quantidade  from pedidos_continuos where nome_cliente='$usuario'";
    $dataresult2 = mysqli_query($conexao, $consulta2);
    echo "<div style='overflow: auto; width: 388px; height: 200px; border:solid 0px;'>";
    if ($dataresult2) {
      while($linha2 = mysqli_fetch_assoc($dataresult2)){
    echo "<hr>";
     echo "<p><b>Produto</b>:  ".$linha2['nome']."</p>";
      echo "<p><b>Quantidade:</b> ".$linha2['quantidade'].",00</p>";
     echo "<p><b>Preço:</b>R$ ".$linha2['preco'].",00</p>";
     echo "<hr>";

    }
    } echo "</div>";?>
   <p>
     <form class="" action="update_foto.php" method="post" enctype="multipart/form-data">
       <label style=" background-color: #000; color: #fff; margin:0 0 -1em -0em;  width:29.6em; border-radius: 0%; " for='selecao-arquivo'>ALTERAR FOTO</label>
     <input type="file"  id="selecao-arquivo" name="file" onchange="updatepicture(this);" />
     <button type="submit"  class="user-button" name="publicar" onclick="verificar_foto()">Confirmar</button>
     </form>
  </p>
  </div>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="8u 12u$(medium)">
          <ul class="copyright">
            <li>COPYYRIGHT &copy; ARÔMATA</li>
            <li>SAC - 0800 344 377 984</a></li>
            <li>AROMA HOUSE</li>
          </ul>
        </div>
        <div class="4u$ 12u$(medium)">
          <ul class="icons">
            <li>
              <a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
            </li>
            <li>
              <a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
            </li>
            <li>
              <a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
            </li>
            <li>
              <a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
